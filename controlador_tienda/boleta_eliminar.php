<?php
// boleta_eliminar.php
include '../bd/conexion.php';

header('Content-Type: application/json');

if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'error' => 'ID de boleta no proporcionado']);
    exit;
}

$id_venta = intval($_GET['id']);

// Comenzar transacción
$conn->begin_transaction();

try {
    // 1) Eliminar productos asociados en venta_producto
    $stmt1 = $conn->prepare("DELETE FROM venta_producto WHERE id_venta = ?");
    $stmt1->bind_param("i", $id_venta);
    $stmt1->execute();
    $stmt1->close();

    // 2) Eliminar la boleta en venta
    $stmt2 = $conn->prepare("DELETE FROM venta WHERE id = ?");
    $stmt2->bind_param("i", $id_venta);
    $stmt2->execute();
    $stmt2->close();

    // Confirmar transacción
    $conn->commit();

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    $conn->rollback();
    echo json_encode(['success' => false, 'error' => 'Error al eliminar la boleta']);
}
