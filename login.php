<?php
session_start();

// Verificar si hay sesión activa
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel - E'CONS PERU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style/login.css">
</head>
<body class="bg-light text-dark">
  <div class="container mt-5 text-center">

    <!-- Encabezado con logo y nombre -->
    <div class="d-flex align-items-center justify-content-center mb-4 gap-3">
      <div class="brand-circle">
        <img src="images/logo_f.png" alt="Logo" class="img-fluid">
      </div>
      <h1 class="h3 m-0">E'CONS PERU</h1>
    </div>

    <!-- Botón Municipalidad con subopciones -->
    <div class="d-grid justify-content-center mb-3">
      <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#municipalidades" aria-expanded="false" aria-controls="municipalidades">
        Municipalidad
      </button>
      <div class="collapse mt-2" id="municipalidades">
        <div class="card card-body text-start">
          <a href="vista_municipalidad/municipalidad_tambo.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD DISTRITAL DE EL TAMBO</a>
          <a href="municipalidad_chilca.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD PROVINCIAL DE HUANCAYO</a>
          <a href="municipalidad_huancayo.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD DISTRITAL DE HUAMANCACA</a>
          <a href="municipalidad_huancayo.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD DISTRITAL DE CHILCA</a>
          <a href="municipalidad_huancayo.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD DISTRITAL DE PILCOMAYO</a>
          <a href="municipalidad_huancayo.php" class="btn btn-outline-primary w-100 mb-2">MUNICIPALIDAD PROVINCIAL DE CHUPACA</a>
          <a href="municipalidad_huancayo.php" class="btn btn-outline-primary w-100">MUNICIPALIDAD DISTRITAL DE SAPALLANGA</a>
        </div>
      </div>
    </div>

    <!-- Botón Sunarp -->
    <a href="sunarp.php" class="btn btn-success btn-lg mb-4">Sunarp</a>

    <!-- Botón de cerrar sesión -->
    <form action="controlador/cerrar_sesion.php" method="POST">
      <button type="submit" class="btn btn-danger">Cerrar sesión</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
