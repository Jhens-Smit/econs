<?php
// boletas.php
include '../bd/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Boletas Generadas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body { background: #f8f9fa; padding: 20px; }
    .ticket { max-width: 480px; margin: 0 auto; background: white; padding: 20px; border-radius: 6px; border: 2px dashed #888; }
    .ticket h3 { text-align: center; margin-bottom: 15px; }
    .totales { text-align: right; margin-top: 10px; font-size: 18px; font-weight: bold; }
    table th, table td { border: 1px solid #dee2e6; padding: 5px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
  <h2>Boletas Generadas</h2>
  <div class="d-flex align-items-center">
    <label for="buscarFecha" class="me-2 fw-bold">Buscar por Fecha:</label>
    <input type="date" id="buscarFecha" class="form-control form-control-sm me-3" style="width:180px;">
    <a href="productos.php" class="btn btn-secondary">⬅️ Volver a Productos</a>
  </div>
</div>

<table id="tablaBoletas" class="table table-striped table-bordered align-middle text-center">
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Cliente</th>
      <th>Fecha</th>
      <th>Total</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $res = $conn->query("SELECT id, nombre_cliente, total, fecha FROM venta ORDER BY id DESC");
    if($res && $res->num_rows > 0):
      while($row = $res->fetch_assoc()):
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['nombre_cliente']) ?></td>
        <td><?= $row['fecha'] ?></td>
        <td>S/ <?= number_format($row['total'],2) ?></td>
        <td>
          <button class="btn btn-primary btn-sm" onclick="verBoleta(<?= $row['id'] ?>)">Ver Boleta</button>
          <button class="btn btn-danger btn-sm" onclick="eliminarBoleta(<?= $row['id'] ?>)">Eliminar</button>
          <button class="btn btn-success btn-sm" id="estadoBtn<?= $row['id'] ?>" onclick="toggleEstado(<?= $row['id'] ?>)">No debe</button>
        </td>
      </tr>
    <?php
      endwhile;
    else:
    ?>
      <tr><td colspan="5">No hay boletas registradas</td></tr>
    <?php endif; ?>
  </tbody>
</table>
  </div>

  <!-- Modal Detalle Boleta -->
  <div class="modal fade" id="modalDetalleBoleta" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">JaviMarket</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body" id="detalleBoletaBody">
          <!-- Cargado vía JS -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" onclick="imprimirBoleta()">🖨️ Imprimir</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Ver boleta en modal
    function verBoleta(idVenta){
      fetch(`../controlador_tienda/get_boleta.php?id=${idVenta}`)
        .then(res => res.json())
        .then(data => {
          if(data.error){
            Swal.fire({icon:'error', title:data.error});
            return;
          }
          const { nombre_cliente, fecha, total, productos } = data;
          let html = `<div class="ticket">
                        <h3>Ticket de Venta</h3>
                        <p><strong>Cliente:</strong> ${nombre_cliente}</p>
                        <p><strong>Fecha:</strong> ${fecha}</p>
                        <hr>
                        <table class="table table-sm">
                          <thead>
                            <tr>
                              <th>Producto</th>
                              <th>Tipo precio</th>
                              <th>P.U.</th>
                              <th>Cant.</th>
                              <th>Subtotal</th>
                            </tr>
                          </thead>
                          <tbody>`;
          productos.forEach(item => {
            html += `<tr>
                       <td>${item.nombre}</td>
                       <td>${item.tipo_precio}</td>
                       <td>S/ ${parseFloat(item.precio).toFixed(2)}</td>
                       <td>${item.cantidad}</td>
                       <td>S/ ${parseFloat(item.subtotal).toFixed(2)}</td>
                     </tr>`;
          });
          html += `</tbody></table>
                   <div class="totales">Total: S/ ${parseFloat(total).toFixed(2)}</div>
                  </div>`;
          document.getElementById('detalleBoletaBody').innerHTML = html;
          const modal = new bootstrap.Modal(document.getElementById('modalDetalleBoleta'));
          modal.show();
        })
        .catch(err => {
          console.error(err);
          Swal.fire({icon:'error', title:'Error al cargar la boleta'});
        });
    }

    // Imprimir boleta manteniendo diseño
    function imprimirBoleta(){
      const contenido = document.getElementById('detalleBoletaBody').innerHTML;
      const ventana = window.open('', '', 'width=600,height=600');
      ventana.document.write(`
        <html>
          <head>
            <title>Boleta</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
              body { background: #f8f9fa; padding: 20px; }
              .ticket { max-width: 480px; margin: 0 auto; background: white; padding: 20px; border-radius: 6px; border: 2px dashed #888; }
              .ticket h3 { text-align: center; margin-bottom: 15px; }
              .totales { text-align: right; margin-top: 10px; font-size: 18px; font-weight: bold; }
              table { width: 100%; border-collapse: collapse; }
              table th, table td { border: 1px solid #dee2e6; padding: 5px; }
            </style>
          </head>
          <body>
            ${contenido}
          </body>
        </html>
      `);
      ventana.document.close();
      ventana.print();
    }

    // Eliminar boleta
    function eliminarBoleta(idVenta){
      Swal.fire({
        icon: 'warning',
        title: '¿Desea eliminar esta boleta?',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
      }).then(result => {
        if(result.isConfirmed){
          fetch(`../controlador_tienda/boleta_eliminar.php?id=${idVenta}`)
            .then(res => res.json())
            .then(data => {
              if(data.success){
                Swal.fire({icon:'success', title:'Boleta eliminada', timer:1500, showConfirmButton:false})
                  .then(()=> location.reload());
              } else {
                Swal.fire({icon:'error', title:data.error || 'Error al eliminar'});
              }
            })
            .catch(err => {
              console.error(err);
              Swal.fire({icon:'error', title:'Error al eliminar la boleta'});
            });
        }
      });
    }
      // --- BOTÓN ROJO/VERDE PERSISTENTE ---
  document.addEventListener("DOMContentLoaded", () => {
    // Al cargar, aplicar colores guardados
    document.querySelectorAll("[id^='estadoBtn']").forEach(btn => {
      const id = btn.id.replace("estadoBtn", "");
      const estadoGuardado = localStorage.getItem(`estadoBoleta_${id}`);
      if (estadoGuardado === "inactivo") {
        btn.classList.remove("btn-success");
        btn.classList.add("btn-danger");
        btn.textContent = "Inactivo";
      }
    });
  });

  function toggleEstado(id) {
    const btn = document.getElementById(`estadoBtn${id}`);
    const estadoActual = localStorage.getItem(`estadoBoleta_${id}`);

    if (estadoActual === "inactivo") {
      // Cambiar a verde
      btn.classList.remove("btn-danger");
      btn.classList.add("btn-success");
      btn.textContent = "no debe";
      localStorage.setItem(`estadoBoleta_${id}`, "activo");
    } else {
      // Cambiar a rojo
      btn.classList.remove("btn-success");
      btn.classList.add("btn-danger");
      btn.textContent = "debe";
      localStorage.setItem(`estadoBoleta_${id}`, "inactivo");
    }
  }
   // --- FILTRO DINÁMICO POR FECHA ---
  document.getElementById("buscarFecha").addEventListener("input", function() {
    const valor = this.value.trim();
    const filas = document.querySelectorAll("#tablaBoletas tbody tr");

    filas.forEach(fila => {
      const fecha = fila.children[2].textContent.trim();
      if (valor === "" || fecha.startsWith(valor)) {
        fila.style.display = "";
      } else {
        fila.style.display = "none";
      }
    });
  });
  </script>
</body>
</html>
