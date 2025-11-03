<?php
// producto_guardar.php
include '../bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $precio_unitario = $_POST['precio_unitario'] ?? 0;
    $precio_general = $_POST['precio_general'] ?? 0;
    $cantidad = $_POST['cantidad'] ?? 0; // <-- NUEVO

    if (!empty($nombre)) {

        $stmt = $conn->prepare("INSERT INTO producto (nombre, precio_unitario, precio_general, cantidad) VALUES (?, ?, ?, ?)");
        // s = string, d = decimal / double, i = integer
        $stmt->bind_param('sddi', $nombre, $precio_unitario, $precio_general, $cantidad);
        $stmt->execute();
        $stmt->close();
    }
}

header('Location: ../vista_tienda/productos.php?success=1');
exit();
