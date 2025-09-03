<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MUNICIPALIDAD PROVINCIAL DE HUANCAYO</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Título principal con botones -->
  <header class=" text-white py-3" style="background-color: #821E73;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">MUNICIPALIDAD PROVINCIAL DE HUANCAYO</h1>
      <div class="d-flex gap-2">
        
        <a href="../controlador/cerrar_sesion.php" class="btn btn-danger btn-sm">Cerrar sesión</a>
      </div>
    </div>
    <link rel="stylesheet" href="../style/municipalidad.css">
   <style>
  /* Mostrar menú al pasar el cursor */
  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0; /* evita salto al aparecer */
  }

  /* Opcional: cambia el cursor */
  .dropdown-toggle {
    cursor: pointer;
  }
</style>
  </header>

  <!-- Barra de botones desplegables -->
  <nav class="d-flex justify-content-center gap-3 my-4">
    <!-- Botón 1 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Habilitaciones Urbanas
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="re-ha-ej">REGULACIÓN DE HABILITACIONES URBANAS EJECUTADAS</a></li>
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
        Planeamiento Urbano
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="zon-vias">CERTIFICADO DE ZONIFICACIÓN Y VÍAS</a></li>
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
      
      "zon-vias": `
        <h2 style="text-align: center;">CERTIFICADO DE ZONIFICACIÓN Y VÍAS</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al alcalde</li>
  <li>Croquis de ubicación del predio con la distancia a la vía transversal más cercana, establecido en el 
  PDM o PDU, firmado por el arquitecto o ingeniero civil habilitado.</li>
  <li>Exhibir DNI del solicitante</li>
  <li>Derecho de pago</li>
</ol>

        </div>
      `,
       "re-ha-ej": `
        <h2 style="text-align: center;">REGULACIÓN DE HABILITACIONES URBANAS EJECUTADAS</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Formulario Único de Regulación en tres (03) juegos originales, debidamente suscritos por el administrador y, en la sección que corresponda, por el profesional responsable, en el que se consigne la información necesaria al procedimiento que se requiere iniciar, adjuntando copia del recibo del pago efectuado en el colegio profesional por el derecho de revisión.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a realizar una habilitación urbana.</li>
  <strong>Documentación Técnica:</strong>
  <li>Plano de ubicación con la localización del terreno con coordenadas UTM.</li>
  <li>Plano de lotización, conteniendo el perímetro del terreno, el diseño de la lotización, de las vías, aceras y berma; y las áreas correspondientes a los aportes. La lotización deberá estar en concordancia con el Plan de Desarrollo Urbano-PDU aprobado por la Municipalidad Provincial correspondiente.</li>
  <li>Plano perimétrico y topográfico del terreno, incluyendo la referencia topográfica a la vía urbanizada más cercana existente o con aprobación de proyectos.</li>
  <li>Plano que indique los lotes ocupados y las alturas de las edificaciones existentes.</li>
  <li>Memoria descriptiva, indicando las manzanas, de corresponder, las áreas de los lotes, la numeración y los aportes reglamentarios.</li>
  <li>Copia de comprobante de pago de la multa por habilitar sin licencia. El valor de la multa es equivalente hasta el 10% del valor de la obra a regularizar tomando el promedio de los valores unitarios oficiales de la edificación a la fecha de su ejecución y de la fecha de solicitud de la regulación.</li>
  <li style="color: darkgoldenrod;">En caso que se cuente con estudios preliminares aprobados, no corresponde presentar el plano de ubicación con la localización del terreno y el plano de lotización, debiendo presentar en su reemplazo:
    <ul>
      <li>Resolución y planos de los estudios preliminares aprobados.</li>
      <li>Planos de Replanteo de la Habilitación Urbana, de corresponder.</li>
      <li>Copia del comprobante de pago por revisión del proyecto CAP (Acorde al numeral 40.1.1. del artículo 40 del DS N°029-2019-VIVIENDA).</li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ol>
  <li>El formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen (Num. 7.1, art. 7 DS N°029-2019-VIV).</li>
  <li>Numeral 7.2, art. 7 DS N°029-2019-VIVIENDA: toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
</ol>


        </div>
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
