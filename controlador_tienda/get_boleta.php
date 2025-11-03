<?php
// get_boleta.php
include '../bd/conexion.php';

if (!isset($_GET['id'])) {
    echo json_encode(['error' => 'ID de venta no especificado']);
    exit;
}

$id_venta = intval($_GET['id']);

// 1) Obtener cabecera de la venta
$stmt = $conn->prepare("SELECT nombre_cliente, total, fecha FROM venta WHERE id = ?");
$stmt->bind_param("i", $id_venta);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nombre_cliente, $total, $fecha);
if (!$stmt->fetch()) {
    echo json_encode(['error' => 'Venta no encontrada']);
    $stmt->close();
    exit;
}
$stmt->close();

// 2) Obtener productos de la venta
$sql = "SELECT p.nombre, vp.tipo_precio, vp.precio, vp.cantidad, vp.total AS subtotal
        FROM venta_producto vp
        INNER JOIN producto p ON vp.id_producto = p.id
        WHERE vp.id_venta = $id_venta";
$res = $conn->query($sql);

$productos = [];
if($res && $res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $productos[] = $row;
    }
}

echo json_encode([
    'nombre_cliente' => $nombre_cliente,
    'fecha' => $fecha,
    'total' => $total,
    'productos' => $productos
]);
