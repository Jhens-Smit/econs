<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Municipalidad distrital de Sapallanga</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Título principal con botones -->
  <header class=" text-white py-3" style="background-color: #9DCD24;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">Municipalidad Distrital de Sapallanga</h1>
      <div class="d-flex gap-2">
        
        <a href="../controlador/cerrar_sesion.php" class="btn btn-danger btn-sm">Cerrar sesión</a>
      </div>
    </div>
  </header>

  <!-- Barra de botones desplegables -->
  <nav class="d-flex justify-content-center gap-3 my-4">
    <!-- Botón 1 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Búsqueda
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="edificacion-solicitud">Solicitud</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="edificacion-requisitos">Requisitos</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="edificacion-tramites">Trámites en Línea</a></li>
      </ul>
    </div>

    <!-- Botón 2 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Transcripción
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="habilitacion-solicitud">Solicitud</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="habilitacion-requisitos">Requisitos</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="habilitacion-tramites">Trámites en Línea</a></li>
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Unificación
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="funcion-solicitud">Solicitud</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="funcion-requisitos">Requisitos</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="funcion-tramites">Trámites en Línea</a></li>
      </ul>
    </div>

    <!-- Botón 4 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Certificación
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="certificacion-1">Certificado 1</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certificacion-2">Certificado 2</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certificacion-3">Certificado 3</a></li>
      </ul>
    </div>

    <!-- Nueva Sección -->
    <button class="btn btn-outline-primary content-btn" data-target="nuevo">Nueva Sección</button>
  </nav>

  <!-- Área dinámica de contenido -->
  <main class="container my-4">
    <div id="dynamic-content" class="p-4 bg-white rounded shadow-sm">
      <h2>Bienvenido</h2>
      <p>Selecciona una opción de los menús superiores para ver más información.</p>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script para cambiar contenido dinámicamente -->
  <script>
    const contentMap = {
      "edificacion-solicitud": `
        <h2>Solicitud - Licencia de Edificación</h2>
        <p>Aquí encontrarás toda la información para solicitar tu licencia de edificación.</p>
      `,
      "edificacion-requisitos": `
        <h2>Requisitos - Licencia de Edificación</h2>
        <p>Documentos y pasos necesarios para iniciar el trámite.</p>
      `,
      "edificacion-tramites": `
        <h2>Trámites en Línea - Licencia de Edificación</h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "habilitacion-solicitud": `
        <h2>Solicitud - Habilitación Urbana</h2>
        <p>Información para iniciar el proceso de habilitación urbana.</p>
      `,
      "habilitacion-requisitos": `
        <h2>Requisitos - Habilitación Urbana</h2>
        <p>Documentos y requisitos necesarios.</p>
      `,
      "habilitacion-tramites": `
        <h2>Trámites en Línea - Habilitación Urbana</h2>
        <p>Accede a la plataforma de trámites en línea.</p>
      `,
      "funcion-solicitud": `
        <h2>Solicitud - Licencia de Función</h2>
        <p>Paso a paso para solicitar tu licencia de función.</p>
      `,
      "funcion-requisitos": `
        <h2>Requisitos - Licencia de Función</h2>
        <p>Requisitos obligatorios antes de iniciar el trámite.</p>
      `,
      "funcion-tramites": `
        <h2>Trámites en Línea - Licencia de Función</h2>
        <p>Realiza tu trámite online.</p>
      `,
      "certificacion-1": `
        <h2>Certificado 1</h2>
        <p>Información sobre el certificado 1.</p>
      `,
      "certificacion-2": `
        <h2>Certificado 2</h2>
        <p>Información sobre el certificado 2.</p>
      `,
      "certificacion-3": `
        <h2>Certificado 3</h2>
        <p>Información sobre el certificado 3.</p>
      `,
      "nuevo": `
        <h2>Nueva Sección</h2>
        <p>Este es el contenido de la nueva sección agregada al final.</p>
      `
    };

    document.querySelectorAll(".content-link, .content-btn").forEach(element => {
      element.addEventListener("click", (e) => {
        e.preventDefault();
        const target = element.getAttribute("data-target");
        document.getElementById("dynamic-content").innerHTML = contentMap[target] || "<p>Contenido no disponible.</p>";
      });
    });
  </script>
</body>
</html>
