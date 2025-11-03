<?php
// producto_actualizar.php
include '../bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'] ?? 0;
    $nombre = $_POST['nombre'] ?? '';
    $precio_unitario = $_POST['precio_unitario'] ?? 0;
    $precio_general = $_POST['precio_general'] ?? 0;
    $cantidad = $_POST['cantidad'] ?? 0; // <-- NUEVO

    if ($id > 0 && !empty($nombre)) {
        $stmt = $conn->prepare("UPDATE producto SET nombre = ?, precio_unitario = ?, precio_general = ?, cantidad = ? WHERE id = ?");
        // s = string, d = double, i = integer
        $stmt->bind_param('sddii', $nombre, $precio_unitario, $precio_general, $cantidad, $id);
        $stmt->execute();
        $stmt->close();
    }
}

header('Location: ../vista_tienda/productos.php?updated=1');
exit();
