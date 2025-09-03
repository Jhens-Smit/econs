<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MUNICIPALIDAD PROVINCIAL DE CHUPACA</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body class="bg-light">

  <!-- Título principal con botones -->
  <header class=" text-white py-3" style="background-color: #0E8FA9;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">MUNICIPALIDAD PROVINCIAL DE CHUPACA</h1>
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
        Habilitaciones Urbanas
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="cert-para-urb">CERT. DE PARÁMETROS URBANÍSTICOS Y EDIFICATORIOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-modalidad-b">MODALIDAD B <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-modalidad-bb">MODALIDAD B <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN PREVIA POR LOS REVISORES URBANOS)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-modalidad-c">MODALIDAD C <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR REVISORES URBANOS)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-modalidad-cc">MODALIDAD C <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="independizacion-terrenos">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="sub-lote-urbano">SUBDIVISIÓN DE LOTE URBANO</a></li>
      </ul>
    </div>

    <!-- Botón 2 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Licencias de Edificaciones
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ma">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA AMPLIACIÓN DE UNA VIVIENDA UNIFAMILIAR</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES AMPLIACIONES Y REMODELACIONES</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA REMODELACIÓN DE VIVIENDA UNIFAMILIAR</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaaaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROF. PARA CONSTRUCCIÓN DE CERCOS</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-b">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN POR EVALUACIÓN DE LA MUNICIPALIDAD PARA EDIFICACIONES PARA FINES DE VIVIENDA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-bb">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">OBRAS DE AMPLIACIÓN O REMODELACIÓN DE UNA EDIFICACIÓN EXISTENTE CON FIN DE VIVIENDA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-c">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA VIVIENDA MULTIFAMILIAR,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-cc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES PARA LOCALES COMERCIALES,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ccc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES DE MERCADOS</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-d">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES PARA FINES EDUCATIVOS,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ant-con">ANTEPROYECTO EN CONSULTA: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> PARA LAS MODALIDADES B, C y D</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-re">LICENCIA DE EDIFICACIÓN POR REGULARIZACIÓN <span style="font-size: 0.7em; font-weight: bold; color: gray;"> PARA REGULARIZACION DE AMPLIACIONES REMODELACIONES Y DEMOLICIONES</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="rev-li-ur">REVALIDACIÓN DE LICENCIA DE EDIFICACIÓN O DE HABILITACIÓN URBANA</a></li>
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="certi-terreno">CERTIFICADO DE POSESIÓN DE TERRENO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-pos">CONSTANCIA MUNICIPAL DE POSESIÓN</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="vis-pla">VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-pla-ur">CERTIFICADO DE PARÁMETROS URBANÍSTICOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-cat">CERTIFICADO NEGATIVO DE CATASTRO</a></li>
      </ul>
    </div>

    <!-- Botón 4 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Planeamiento Urbano
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-vi">CERT. DE ALINEAMIENTO DE VIAS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-vii">CERT. DE AL. VIAL EN PROCESO DE CONSOLIDACIÓN</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viii">CERT. DE SECCIÓN VIAL</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viiii">CERT. DE NOMENCLATURA DE VÍA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viiiii">CERT. DE COMPATIBILIDAD DE USOS</a></li>
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
      "certi-terreno": `
        <h2 style="text-align: center;">CERTIFICADO DE POSESIÓN DE TERRENO</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión, indicando el N° de expediente.</li>
  <li>Memoria descriptiva del trámite, suscrita por un arquitecto o ingeniero habilitado.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Declaración jurada notarial del peticionario en la que conste ser posesionario del bien inmueble.</li>
  <li>Cualquier documento que acredite la posesión del terreno: planilla, testamento, sucesión intestada, autoevalúo u otros.</li>
  <li>Búsqueda catastral (SUNARP).</li>
  <li>Declaración jurada simple de los vecinos colindantes y dos testigos que certifiquen la posesión del peticionante, con firma de DNI y huella digital, en la que señalen estar conformes con los linderos colindantes.</li>
  <li>DNI del solicitante, colindantes y testigos.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>

        </div> 
      `,
      "cert-para-urb": `
        <h2 style="text-align: center;">CERTIFICADO DE PARÁMETROS URBANÍSTICOS Y EDIFICATORIOS<br>
         <span style="font-size: 0.5em; color: gray;">(A SOLICITUD DEL ADMINISTRADO)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización del terreno expresando en coordenadas UTM PSAD 56.</li>
  <li>Declaración jurada de ser el propietario del bien inmueble.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>
        </div> 
      `,
      "vis-pla": `
        <h2 style="text-align: center;">VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA<br>
         </h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión, indicando el N° de expediente.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Memoria descriptiva (03 juegos)</li>
  <li>Documento que acredite derecho sobre el inmueble.</li>
  <li>Búsqueda catastral (SUNARP)</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
  <li>Certificado de alineamiento vial.</li>
  <li>Indicación del número de comprobante de pago del derecho administrativo que corresponda.</li>
</ol>

        </div> 
      `,
      "cert-al-vi": `
        <h2 style="text-align: center;">CERTIFICADO DE ALINEAMIENTO DE VIAS<br>
         </h2>
        <div style="text-align: justify;">
   <ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización del terreno expresando en coordenadas UTM PSAD 56.</li>
  <li>Copia de minuta de compra venta o Constancia de Posesión.</li>
  <li>Indicación del número de comprobante de pago por derecho administrativo.</li>
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
