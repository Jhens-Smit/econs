<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MUNICIPALIDAD DISTRITAL DE EL TAMBO</title>
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
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Título principal con botones -->
  <header class=" text-white py-3" style="background-color: #D19724;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">MUNICIPALIDAD DISTRITAL DE EL TAMBO</h1>
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
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-modalidad-a">MODALIDAD A <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES RESPONSABLES)</span></a></li>
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
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="certi-as">CERTIFICADO Y ASIGNACIÓN DE NUMERACIÓN DE FINCA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-pos">CERTIFICADO DE POSESIÓN</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="vis-pla">VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-pla-ur">CERTIFICADO DE PLANOS URBANÍSTICOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-cat">CERTIFICADO NEGATIVO DE CATASTRO</a></li>
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
      "licencia-modalidad-a": `
        <h2 style="text-align: center;">
  LICENCIA DE HABILITACIÓN URBANA MODALIDAD A <br>
  <span style="font-size: 0.5em; color: gray;">
    (APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES RESPONSABLES)
  </span>
</h2>
        <ol>
    <li>Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda.</li>
    <li style="color: darkgoldenrod;">En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
    <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente.</li>
    <li>Certificado de Factibilidad de Servicios de agua, alcantarillado y de energía eléctrica.</li>
    <li>Declaración Jurada de Inexistencia de Feudatarios.</li>
    <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
      <ul>
        <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
        <li>Plano perimétrico y topográfico.</li>
        <li>Plano de trazado y localización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
        <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
        <li style="color: darkgoldenrod;">Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
        <li>Memoria descriptiva.</li>
      </ul>
    </li>
    <li style="color: darkgoldenrod;">Copia del planeamiento integral aprobado, cuando corresponda.</li>
    <li>Certificación Ambiental, según lo dispuesto en el literal a) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
    <li style="color: darkgoldenrod;">Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
    <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
    <li>Cronograma de Visitas de Inspección, debidamente suscrito por el responsable de Obra y el Supervisor Municipal.</li>
    <li>Comunicación de la fecha de inicio de la obra.</li>
    <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
  </ol>

  <h3 class="notas">Notas:</h3>
  <ul>
    a) En la presente modalidad, no están contempladas las habilitaciones urbanas proyectadas sobre terrenos que constituyan parte integrante del Patrimonio Cultural de la Nación declaradas por el Ministerio de Cultura.<br>
    b) Si no cumple con los requisitos, se aplicará de acuerdo con el Artículo 23 del D.S. N° 029-2019-VIVIENDA.</li><br>
    c) Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro.<br>
    d) El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.<br>
    e) Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.<br>
    f) Los proyectos de la Modalidad A se encuentran exonerados de realizar aportes reglamentarios, según el numeral 1 del Artículo 3 del D.S. N° 006-2017-VIVIENDA.
  </ul>
`,
      "licencia-modalidad-b": `

         <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B <br>
         <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)
  </span></h2>
        <p>Documentos y pasos necesarios para iniciar el trámite.</p>
      `,
      "licencia-modalidad-bb": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B <br>
         <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN PREVIA POR LOS REVISORES URBANOS)
  </span></h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "licencia-modalidad-c": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C <br>
        <span style="font-size: 0.5em; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR REVISORES URBANOS)
  </span></h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "licencia-modalidad-cc": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C <br>
        <span style="font-size: 0.5em; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA)
  </span></h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "independizacion-terrenos": `
      <h2 style="text-align: center;">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS<br></h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "sub-lote-urbano": `
      <h2 style="text-align: center;">SUBDIVISIÓN DE LOTE URBANO<br></h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "regulacion-urbana-ejecutada": `
        <h2>REGULARIZACIÓN DE HABILITACIONES URBANAS EJECUTADAS</h2>
        <p>Puedes realizar tu trámite en línea desde aquí.</p>
      `,
      "licencia-e-ma": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES.<br>
        <span style="font-size: 0.5em; color: gray;">CONSTRUCCIÓN DE UNA VIVIENDA UNIFAMILIAR DE HASTA 120 m<sup>2</sup> CONSTRUIDOS
  </span></h2>
        <p>Información para iniciar el proceso de habilitación urbana.</p>
      `,
      "licencia-e-maa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA AMPLIACIÓN DE UNA VIVIENDA UNIFAMILIAR,<br>
        <span style="font-size: 0.5em; color: gray;">CUYA EDIFICACIÓN ORIGINAL CUENTE CON LICENCIA DE CONSTRUCCIÓN O DECLARATORIA DE FÁBRICA, Y LA SUMATORIA DEL ÁREA CONSTRUIDA DE AMBAS NO SUPERE LOS 200 m<sup>2</sup>
  </span></h2>
      <p>Documentos y requisitos necesarios.</p>
      `,
      "licencia-e-maaa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES AMPLIACIONES Y REMODELACIONES<br>
        <span style="font-size: 0.5em; color: gray;">CONSIDERADAS OBRAS MENORES
  </span></h2>
        <p>Accede a la plataforma de trámites en línea.</p>
      `,
      "licencia-e-maaaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA REMODELACIÓN DE VIVIENDA UNIFAMILIAR<br>
        <span style="font-size: 0.5em; color: gray;">(SIN MODIFICACIÓN ESTRUCTURAL, NI CAMBIO DE USO, NI AUMENTO DE ÁREA CONSTRUIDA)
  </span></h2>
        <p>Paso a paso para solicitar tu licencia de función.</p>
      `,
      "licencia-e-maaaaa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A APROBACIÓN AUTOMÁTICA CON FIRMA DE PROF. PARA CONSTRUCCIÓN DE CERCOS,<br>
        <span style="font-size: 0.5em; color: gray;">DE MÁS DE 20 ML
  </span></h2>
        <p>Requisitos obligatorios antes de iniciar el trámite.</p>
      `,
      "licencia-e-b": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD B APROBACIÓN POR EVALUACIÓN DE LA MUNICIPALIDAD PARA EDIFICACIONES PARA FINES DE VIVIENDA,<br>
        <span style="font-size: 0.5em; color: gray;">EDIFICACIONES PARA FINES DE VIVIENDA UNIFAMILIAR, MULTIFAMILIAR, QUINTA O CONDOMINIOS DE VIVIENDA UNIFAMILIAR Y/O MULTIFAMILIAR (NO MAYORES A 5 PISOS SIEMPRE QUE EL PROYECTO TENGA UN MÁXIMO DE 3,000 M2 DE ÁREA CONSTRUIDA)
  </span></h2>
        <p>Realiza tu trámite online.</p>
      `,
      "certi-as": `
        <h2>CERTIFICADO Y ASIGNACIÓN DE NUMERACIÓN DE FINCA</h2>
        <p>Información sobre el certificado 1.</p>
      `,
      "certi-pos": `
        <h2>CERTIFICADO DE POSESIÓN</h2>
        <p>Información sobre el certificado 2.</p>
      `,
      "vis-pla": `
        <h2>VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</h2>
        <p>Información sobre el certificado 3.</p>
      `,
      "certi-pla-ur": `
        <h2>CERTIFICADO DE PLANOS URBANÍSTICOS</h2>
        <p>Este es el contenido de la nueva sección agregada al final.</p>
      `,
      "certi-cat": `
        <h2>CERTIFICADO NEGATIVO DE CATASTRO</h2>
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
