<?php
// productos.php
include '../bd/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Gestión de Productos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-light p-4">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold">Gestión de Productos</h2>
      <div class="d-flex gap-2">
        <button class="btn btn-secondary" id="btnAbrirCarrito" data-bs-toggle="modal" data-bs-target="#modalCarrito">
          Ver carrito <span id="badgeCarrito" class="badge bg-danger ms-2">0</span>
        </button>
        <a href="boletas.php" class="btn btn-info">Ver Boletas</a> 
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProducto">Nuevo Producto</button>
      </div>
    </div>

    <!-- Buscador -->
    <div class="mb-3">
      <input type="text" id="buscador" class="form-control" placeholder="Buscar producto por nombre...">
    </div>

    <!-- Tabla de productos -->
    <?php
    $sql = "SELECT id, nombre, precio_unitario, precio_general, cantidad FROM producto";
    $result = $conn->query($sql);
    ?>
    <table id="tablaProductos" class="table table-bordered table-striped align-middle text-center">

      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Precio Unitario</th>
          <th>Precio General</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['nombre']); ?></td>
            <td><?= number_format($row['precio_unitario'],2); ?></td>
            <td><?= number_format($row['precio_general'],2); ?></td>
            <td><?= $row['cantidad']; ?></td>
            <td>
              <button class="btn btn-warning btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#modalEditar"
                onclick="llenarEditar('<?= $row['id']; ?>','<?= htmlspecialchars(addslashes($row['nombre'])); ?>','<?= $row['precio_unitario']; ?>','<?= $row['precio_general']; ?>','<?= $row['cantidad']; ?>')">
                Editar
              </button>

              <a href="../controlador_tienda/producto_eliminar.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirmarEliminar()">
                Eliminar
              </a>

              <button class="btn btn-success btn-sm"
                onclick="abrirModalAgregar(<?= $row['id']; ?>, '<?= htmlspecialchars(addslashes($row['nombre'])); ?>', <?= $row['precio_unitario']; ?>, <?= $row['precio_general']; ?>, <?= $row['cantidad']; ?>) ">
                Vender
              </button>
            </td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="6">No hay productos registrados</td></tr>
      <?php endif; ?>
      </tbody>
    </table>
  </div>
<div id="paginacion" class="text-center my-3"></div>

  <!-- Modal Nuevo Producto -->
  <div class="modal fade" id="modalProducto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Nuevo Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form method="POST" action="../controlador_tienda/producto_guardar.php">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Precio Unitario</label>
              <input type="number" step="0.01" name="precio_unitario" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Precio General</label>
              <input type="number" step="0.01" name="precio_general" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Cantidad</label>
              <input type="number" name="cantidad" class="form-control" required min="0">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form method="POST" action="../controlador_tienda/producto_actualizar.php">
          <input type="hidden" name="id" id="edit_id">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" name="nombre" id="edit_nombre" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Precio Unitario</label>
              <input type="number" step="0.01" name="precio_unitario" id="edit_precio_unitario" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Precio General</label>
              <input type="number" step="0.01" name="precio_general" id="edit_precio_general" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Cantidad</label>
              <input type="number" name="cantidad" id="edit_cantidad" class="form-control" required min="0">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-warning">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal: Agregar ítem (al carrito) -->
  <div class="modal fade" id="modalAgregarItem" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar al carrito</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="add_producto_id">
          <p><strong>Producto:</strong> <span id="add_producto_nombre"></span></p>
          <p><strong>Stock disponible:</strong> <span id="add_producto_stock"></span></p>

          <div class="mb-3">
            <label class="form-label">Tipo de precio</label>
            <select id="add_tipo_precio" class="form-select" required>
              <option value="">Seleccione...</option>
              <option value="unitario">Precio Unitario</option>
              <option value="general">Precio General</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input type="number" id="add_cantidad" class="form-control" min="1" value="1">
          </div>

          <div class="mb-3">
            <p><strong>Subtotal:</strong> S/ <span id="add_subtotal">0.00</span></p>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" onclick="agregarAlCarrito()">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Carrito (revisión y finalizar) -->
  <div class="modal fade" id="modalCarrito" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <form id="formFinalizarVenta" method="POST" action="../controlador_tienda/venta_finalizar.php">
          <div class="modal-header">
            <h5 class="modal-title">Carrito de venta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div id="carritoContainer">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Tipo precio</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="carritoBody">
                  <!-- items via JS -->
                </tbody>
              </table>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <label class="form-label">Nombre del cliente</label>
                  <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" required>
                </div>
                <div class="text-end">
                  <p class="mb-1"><strong>Subtotal:</strong> S/ <span id="carritoSubtotal">0.00</span></p>
                  <p class="mb-1"><strong>Total:</strong> S/ <span id="carritoTotal">0.00</span></p>
                </div>
              </div>
            </div>

            <!-- hidden input con JSON del carrito -->
            <input type="hidden" name="cart_json" id="cart_json" />

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Seguir comprando</button>
            <button type="submit" class="btn btn-success" id="btnFinalizar">Finalizar venta</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Productos con stock bajo -->
<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold text-danger">Productos con Stock Bajo (&lt;6)</h2>
    <button class="btn btn-dark" onclick="imprimirStockBajo()">🖨️ Imprimir Lista</button>
  </div>

  <?php
  $resBajo = $conn->query("SELECT nombre, cantidad FROM producto WHERE cantidad < 6 ORDER BY cantidad ASC");
  ?>
  <table class="table table-bordered table-striped align-middle text-center" id="tablaStockBajo">
    <thead class="table-danger">
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Cantidad</th>
      </tr>
    </thead>
    <tbody>
      <?php if($resBajo && $resBajo->num_rows > 0): ?>
        <?php $i = 1; while($row = $resBajo->fetch_assoc()): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= $row['cantidad'] ?></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="3">No hay productos con stock bajo</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<script>
function imprimirStockBajo() {
  const contenido = document.getElementById('tablaStockBajo').outerHTML;
  const ventana = window.open('', '', 'width=800,height=600');
  ventana.document.write(`
    <html>
      <head>
        <title>Stock Bajo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
          body { padding: 20px; font-size: 18px; }
          h3 { text-align: center; margin-bottom: 20px; }
          table { width: 100%; border-collapse: collapse; }
          th, td { border: 1px solid #000; padding: 8px; text-align: center; }
          @media print {
            body { font-size: 20px; }
            table { width: 100%; }
          }
        </style>
      </head>
      <body>
        <h3>Productos con Stock Bajo (&lt;6)</h3>
        ${contenido}
      </body>
    </html>
  `);
  ventana.document.close();
  ventana.print();
}
</script>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const carrito = [];
    const badgeCarrito = document.getElementById('badgeCarrito');

    function abrirModalAgregar(id, nombre, precioU, precioG, stock) {
      document.getElementById('add_producto_id').value = id;
      document.getElementById('add_producto_nombre').textContent = nombre;
      document.getElementById('add_producto_stock').textContent = stock;
      document.getElementById('add_tipo_precio').value = '';
      document.getElementById('add_cantidad').value = 1;
      document.getElementById('add_subtotal').textContent = '0.00';
      // guardar precios en dataset
      document.getElementById('add_tipo_precio').dataset.precioU = precioU;
      document.getElementById('add_tipo_precio').dataset.precioG = precioG;

      const modal = new bootstrap.Modal(document.getElementById('modalAgregarItem'));
      modal.show();
    }

    function actualizarSubtotal() {
      const tipo = document.getElementById('add_tipo_precio').value;
      const precioU = parseFloat(document.getElementById('add_tipo_precio').dataset.precioU || 0);
      const precioG = parseFloat(document.getElementById('add_tipo_precio').dataset.precioG || 0);
      const cantidad = parseInt(document.getElementById('add_cantidad').value) || 1;
      let precio = 0;
      if(tipo === 'unitario') precio = precioU;
      if(tipo === 'general') precio = precioG;
      const subtotal = precio * cantidad;
      document.getElementById('add_subtotal').textContent = subtotal.toFixed(2);
    }

    document.getElementById('add_tipo_precio').addEventListener('change', actualizarSubtotal);
    document.getElementById('add_cantidad').addEventListener('input', actualizarSubtotal);

    function agregarAlCarrito() {
      const id = parseInt(document.getElementById('add_producto_id').value);
      const nombre = document.getElementById('add_producto_nombre').textContent;
      const tipo = document.getElementById('add_tipo_precio').value;
      const precioU = parseFloat(document.getElementById('add_tipo_precio').dataset.precioU || 0);
      const precioG = parseFloat(document.getElementById('add_tipo_precio').dataset.precioG || 0);
      const cantidad = parseInt(document.getElementById('add_cantidad').value) || 1;
      if (!tipo) {
        Swal.fire({ icon:'warning', title:'Seleccione tipo de precio' });
        return;
      }
      const precio = tipo === 'unitario' ? precioU : precioG;
      if (cantidad <= 0) {
        Swal.fire({ icon:'warning', title:'Cantidad inválida' });
        return;
      }

      const idx = carrito.findIndex(item => item.id_producto === id && item.tipo_precio === tipo);
      if (idx > -1) {
        carrito[idx].cantidad += cantidad;
        carrito[idx].subtotal = parseFloat((carrito[idx].precio * carrito[idx].cantidad).toFixed(2));
      } else {
        carrito.push({
          id_producto: id,
          nombre: nombre,
          tipo_precio: tipo,
          precio: parseFloat(precio),
          cantidad: cantidad,
          subtotal: parseFloat((precio * cantidad).toFixed(2))
        });
      }

      actualizarCarritoUI();
      const modalEl = document.getElementById('modalAgregarItem');
      const modal = bootstrap.Modal.getInstance(modalEl);
      modal.hide();
      const modalCar = new bootstrap.Modal(document.getElementById('modalCarrito'));
      modalCar.show();
    }

    function actualizarCarritoUI() {
      const tbody = document.getElementById('carritoBody');
      tbody.innerHTML = '';
      let total = 0;
      carrito.forEach((item, i) => {
        total += item.subtotal;
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${item.nombre}</td>
          <td>${item.tipo_precio}</td>
          <td>S/ ${Number(item.precio).toFixed(2)}</td>
          <td>${item.cantidad}</td>
          <td>S/ ${Number(item.subtotal).toFixed(2)}</td>
          <td><button class="btn btn-sm btn-danger" onclick="quitarDelCarrito(${i})">Quitar</button></td>
        `;
        tbody.appendChild(tr);
      });
      document.getElementById('carritoSubtotal').textContent = total.toFixed(2);
      document.getElementById('carritoTotal').textContent = total.toFixed(2);
      document.getElementById('cart_json').value = JSON.stringify(carrito);
      badgeCarrito.textContent = carrito.length;
    }

    function quitarDelCarrito(index) {
      carrito.splice(index,1);
      actualizarCarritoUI();
    }

    document.getElementById('formFinalizarVenta').addEventListener('submit', function(e){
      if (carrito.length === 0) {
        e.preventDefault();
        Swal.fire({ icon:'warning', title:'El carrito está vacío' });
        return;
      }
      const nombreCliente = document.getElementById('nombre_cliente').value.trim();
      if (!nombreCliente) {
        e.preventDefault();
        Swal.fire({ icon:'warning', title:'Ingrese nombre del cliente' });
        return;
      }
    });

    function llenarEditar(id, nombre, precioU, precioG, cantidad){
      document.getElementById('edit_id').value = id;
      document.getElementById('edit_nombre').value = nombre;
      document.getElementById('edit_precio_unitario').value = precioU;
      document.getElementById('edit_precio_general').value = precioG;
      document.getElementById('edit_cantidad').value = cantidad;
    }

    function confirmarEliminar(){ return confirm('¿Está seguro de eliminar este producto?'); }

    const buscador = document.getElementById('buscador');
    buscador.addEventListener('keyup', function(){
      const filtro = buscador.value.toLowerCase();
      document.querySelectorAll('table tbody tr').forEach(fila => {
        const nombre = fila.cells[1].textContent.toLowerCase();
        fila.style.display = nombre.includes(filtro) ? '' : 'none';
      });
    });

    actualizarCarritoUI();

    const filasPorPagina = 10;
let paginaActual = 1;

function mostrarPagina(numPagina) {
  const tabla = document.getElementById("tablaProductos");
  const filas = tabla.querySelectorAll("tbody tr");
  const totalFilas = filas.length;
  const totalPaginas = Math.ceil(totalFilas / filasPorPagina);

  // Ocultar todas las filas
  filas.forEach(fila => fila.style.display = "none");

  // Calcular inicio y fin
  const inicio = (numPagina - 1) * filasPorPagina;
  const fin = inicio + filasPorPagina;

  // Mostrar filas de la página actual
  for (let i = inicio; i < fin && i < totalFilas; i++) {
    filas[i].style.display = "";
  }

  // Actualizar botones
  generarBotonesPaginacion(totalPaginas);
}

function generarBotonesPaginacion(totalPaginas) {
  const contenedor = document.getElementById("paginacion");
  contenedor.innerHTML = "";

  for (let i = 1; i <= totalPaginas; i++) {
    const btn = document.createElement("button");
    btn.textContent = i;
    btn.className = `btn btn-sm ${i === paginaActual ? "btn-primary" : "btn-outline-primary"} mx-1`;
    btn.onclick = () => {
      paginaActual = i;
      mostrarPagina(paginaActual);
    };
    contenedor.appendChild(btn);
  }
}

// Ejecutar al cargar
document.addEventListener("DOMContentLoaded", () => {
  mostrarPagina(paginaActual);
});
  </script>

  <!-- Alerts -->
  <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <script>Swal.fire({icon:'success', title:'Producto registrado exitosamente', timer:1800, showConfirmButton:false});</script>
  <?php endif; ?>
  <?php if (isset($_GET['updated']) && $_GET['updated'] == 1): ?>
    <script>Swal.fire({icon:'success', title:'Producto actualizado exitosamente', timer:1800, showConfirmButton:false});</script>
  <?php endif; ?>
  <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
    <script>Swal.fire({icon:'success', title:'Producto eliminado exitosamente', timer:1800, showConfirmButton:false});</script>
  <?php endif; ?>
  <?php if (isset($_GET['venta']) && $_GET['venta'] == 1): ?>
    <script>Swal.fire({icon:'success', title:'Venta registrada exitosamente', timer:1800, showConfirmButton:false});</script>
  <?php endif; ?>
  <?php if (isset($_GET['venta']) && $_GET['venta'] == 0): ?>
    <script>Swal.fire({icon:'error', title:'Stock insuficiente', text:'No hay suficiente cantidad disponible para uno o más productos.', showConfirmButton:true});</script>
  <?php endif; ?>

</body>
</html>
