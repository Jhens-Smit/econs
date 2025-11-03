<?php
// producto_eliminar.php
include '../bd/conexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if ($id > 0) {
        $stmt = $conn->prepare("DELETE FROM producto WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }
}

header('Location: ../vista_tienda/productos.php?success=3');
exit();
