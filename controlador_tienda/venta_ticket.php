<?php
// venta_ticket.php
include '../bd/conexion.php';

if (!isset($_GET['id'])) {
    header('Location: ../vista_tienda/productos.php');
    exit();
}

$id_venta = intval($_GET['id']);

// 1) Obtener cabecera
$stmt = $conn->prepare("SELECT nombre_cliente, total, fecha FROM venta WHERE id = ?");
$stmt->bind_param("i", $id_venta);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nombre_cliente, $total, $fecha);
if (!$stmt->fetch()) {
    $stmt->close();
    header('Location: ../vista_tienda/productos.php');
    exit();
}
$stmt->close();

// 2) Obtener detalles
$sql = "SELECT p.nombre, vp.tipo_precio, vp.precio, vp.cantidad, vp.total 
        FROM venta_producto vp
        INNER JOIN producto p ON vp.id_producto = p.id
        WHERE vp.id_venta = $id_venta";
$detalles = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ticket de venta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: #f8f9fa;
            padding: 20px;
        }
        .ticket {
            max-width: 480px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 6px;
            border: 2px dashed #888;
        }
        .ticket h3 {
            text-align: center;
            margin-bottom: 15px;
        }
        .totales {
            text-align: right;
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .btn-print {
            width: 100%;
            margin-top: 20px;
        }
        .btn-back {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="ticket">
    <h3>Ticket de Venta</h3>
    <p><strong>Cliente:</strong> <?= htmlspecialchars($nombre_cliente) ?></p>
    <p><strong>Fecha:</strong> <?= $fecha ?></p>
    <hr>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Prod.</th>
                <th>Tipo</th>
                <th>P.U.</th>
                <th>Cant.</th>
                <th>Tot.</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($detalles && $detalles->num_rows > 0): ?>
            <?php while($row = $detalles->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['nombre']) ?></td>
                    <td><?= ucfirst($row['tipo_precio']) ?></td>
                    <td><?= number_format($row['precio'],2) ?></td>
                    <td><?= $row['cantidad'] ?></td>
                    <td><?= number_format($row['total'],2) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">Sin detalles</td></tr>
        <?php endif; ?>
        </tbody>
    </table>

    <div class="totales">
        Total: S/ <?= number_format($total,2) ?>
    </div>

    <button class="btn btn-dark btn-print" onclick="window.print()">🖨️ Imprimir</button>
    <a href="../vista_tienda/productos.php" class="btn btn-secondary btn-back">⬅️ Volver</a>
</div>

</body>
</html>
