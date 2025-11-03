<?php
// venta_finalizar.php
include '../bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../vista_tienda/productos.php');
    exit();
}

$cart_json = $_POST['cart_json'] ?? '';
$nombre_cliente = trim($_POST['nombre_cliente'] ?? '');

if (empty($cart_json) || empty($nombre_cliente)) {
    header('Location: ../vista_tienda/productos.php?venta=0');
    exit();
}

$items = json_decode($cart_json, true);
if (!is_array($items) || count($items) === 0) {
    header('Location: ../vista_tienda/productos.php?venta=0');
    exit();
}

$conn->begin_transaction();

try {
    // 1) Re-validate stock for every item and compute total
    $totalVenta = 0.0;
    foreach ($items as $it) {
        $id_producto = intval($it['id_producto']);
        $cantidad = intval($it['cantidad']);
        // get current stock and price
        $stmt = $conn->prepare("SELECT precio_unitario, precio_general, cantidad FROM producto WHERE id = ?");
        $stmt->bind_param("i", $id_producto);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($precio_unitario, $precio_general, $stock_actual);
        $stmt->fetch();
        $stmt->close();

        if ($stock_actual < $cantidad) {
            // insufficient stock -> rollback and redirect
            $conn->rollback();
            header('Location: ../vista_tienda/productos.php?venta=0');
            exit();
        }

        $precio_aplicado = ($it['tipo_precio'] === 'unitario') ? floatval($precio_unitario) : floatval($precio_general);
        $subtotal = $precio_aplicado * $cantidad;
        $totalVenta += $subtotal;
    }

    // 2) Insert cabecera venta
    $stmt = $conn->prepare("INSERT INTO venta (nombre_cliente, total, fecha) VALUES (?, ?, NOW())");
    $stmt->bind_param("sd", $nombre_cliente, $totalVenta);
    $stmt->execute();
    $id_venta = $stmt->insert_id;
    $stmt->close();

    // 3) Insert detalles y actualizar stocks
    $stmtDetalle = $conn->prepare("INSERT INTO venta_producto (id_venta, id_producto, tipo_precio, precio, cantidad, total) VALUES (?, ?, ?, ?, ?, ?)");
    $stmtUpdate = $conn->prepare("UPDATE producto SET cantidad = cantidad - ? WHERE id = ?");

    foreach ($items as $it) {
        $id_producto = intval($it['id_producto']);
        $cantidad = intval($it['cantidad']);
        $tipo_precio = $it['tipo_precio'];
        // get current price (again)
        $stmt = $conn->prepare("SELECT precio_unitario, precio_general FROM producto WHERE id = ?");
        $stmt->bind_param("i", $id_producto);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($precio_unitario_db, $precio_general_db);
        $stmt->fetch();
        $stmt->close();

        $precio_aplicado = ($tipo_precio === 'unitario') ? floatval($precio_unitario_db) : floatval($precio_general_db);
        $subtotal = $precio_aplicado * $cantidad;

        // detalle
        $stmtDetalle->bind_param("iisdid", $id_venta, $id_producto, $tipo_precio, $precio_aplicado, $cantidad, $subtotal);
        $stmtDetalle->execute();

        // update stock
        $stmtUpdate->bind_param("ii", $cantidad, $id_producto);
        $stmtUpdate->execute();
    }

    $stmtDetalle->close();
    $stmtUpdate->close();

    $conn->commit();

    // redirect to ticket view
    header('Location: ../controlador_tienda/venta_ticket.php?id=' . $id_venta);
    exit();

} catch (Exception $e) {
    $conn->rollback();
    // log error if you want: error_log($e->getMessage());
    header('Location: ../vista_tienda/productos.php?venta=0');
    exit();
}
