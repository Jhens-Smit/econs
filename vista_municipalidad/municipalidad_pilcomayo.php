<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MUNICIPALIDAD DISTRITAL DE PILCOMAYO</title>
  <link rel="stylesheet" href="../style/municipalidad.css">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <header class=" text-white py-3" style="background-color: #611E30;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">MUNICIPALIDAD DISTRITAL DE PILCOMAYO</h1>
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
        <li><a class="dropdown-item content-link" href="#" data-target="ha-nueva">Habilitaciones Urbanas Nueva</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="re-ha">Regularización de Habilitaciones Urbanas Ejecutadas</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="edificacion-tramites">Trámites en Línea</a></li>
      </ul>
    </div>

    <!-- Botón 2 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Licencia de Edificación
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="mod-b-apr">MODALIDAD B <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="habilitacion-requisitos">Requisitos</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="habilitacion-tramites">Trámites en Línea</a></li>
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
         <li><a class="dropdown-item content-link" href="#" data-target="certi-pos">COM. CAMPESINA SOLICITUD CONSTANCIA DE POSESIÓN</a></li>
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
      <p>Selecciona una opción de los menús superiores para ver más información.</p><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script para cambiar contenido dinámicamente -->
  <script>
    const contentMap = {
      "ha-nueva": `
        <h2 style="text-align: center;">HABILITACIONES URBANAS NUEVAS</h2>
         <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al sr. alcalde</li>
  <li>FUHU (ANEXO 01), debidamente suscrito por el administrado y los profesionales responsables, señalando el número de recibo y fecha de pago del trámite de la independización; en 1 juego original</li>
  <li>Certificado de factibilidad de servicios (energía eléctrica, agua y desagüe)</li>
  <li>Certificado de zonificación y vías (Tramitar en Municipalidad Provincial de Huancayo)</li>
  <li>Copia fedateada del autoevalúo (actual)</li>
  <li>Declaración jurada, consignado el número de partida registral y asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso de que el administrado no sea el propietario del predio, debe presentar copia simple de la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal señalando que cuenta con representación vigente, consignado datos de la partida registral y el asiento en el que conste inscrita la misma.</li>
  <li>Declaración jurada de habilitación de los profesionales que suscriben la documentación técnica.</li>
  <li>Título de propiedad o Desmembramiento de la Comunidad Campesina de Pilcomayo. (Copia legalizada por el notario).</li>
  <li>(01) Juego de plano Firmado por el propietario y profesional habilitado (original) de:
    <ul>
      <li>Plano de localización y ubicación según con coordenadas UTM.</li>
      <li>Plano perimétrico.</li>
      <li>Plano de servicios básicos (alcantarillado y telefónica).</li>
      <li>Plano catastral.</li>
      <li>Plano topográfico.</li>
      <li>Plano vial.</li>
      <li>Memoria descriptiva indicado áreas, linderos y medidas perimétricas del lote.</li>
    </ul>
  </li>
</ol>
</div> 
      `,
      "re-ha": `
        <h2 style="text-align: center;">Regularización de Habilitaciones Urbanas Ejecutadas</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al sr. alcalde.</li>
  <li>FUHU y anexo G, debidamente suscrito por el administrado y los profesionales responsables, señalando el número de recibo y fecha de pago del trámite de la independización; en 3 juegos original.</li>
  <li>Copia de recibos de agua y luz. (original o legalizado)</li>
  <li>Certificado de zonificación y vías (Tramitar en Municipalidad Provincial de Huancayo)</li>
  <li>Copia fedateada de autoevaluó (actual)</li>
  <li>Recibo del pago al colegio de arquitectos por la revisión de la comisión técnica 000-3756440 Banco Scotiabank S/. 318.40, CCI N° 009-423-000003756440-58 (hasta 1000 m2)</li>
  <li>Declaración jurada, consignado el número de partida registral y asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso de que el administrador no sea el propietario del predio, debe presentar copia simple de la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal señalando que cuenta con representación vigente, consignado datos de la partida registral y el asiento en el que conste inscrita la misma.</li>
  <li>Declaración jurada de habilitación de los profesionales que suscriben la documentación técnica.</li>
  <li>Título de propiedad o desmembramiento de la Comunidad Campesina de Pilcomayo. (Copia legalizada por el notario).</li>
  <li>(03) Juego de plano Firmado por el propietario y profesional habilitado (original) de:
    <ul>
      <li>Plano de localización y ubicación según con coordenadas UTM.</li>
      <li>Plano perimétrico.</li>
      <li>Plano de servicios básicos (alcantarillado y telefónica).</li>
      <li>Plano catastral.</li>
      <li>Plano topográfico.</li>
      <li>Plano vial.</li>
      <li>Memoria descriptiva indicado áreas, linderos y medidas perimétricas del lote.</li>
    </ul>
  </li>
</ol>
</div> 
      `,
      "mod-b-apr": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD B: <br>
         <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al sr. alcalde.</li>
  <li>Resolución de Habilitación Urbana.</li>
  <li>FUE, debidamente suscrito por el administrado y los profesionales responsables, señalando el número de recibo y fecha de pago del trámite de la licencia de edificación, en tres (03) juegos originales.</li>
  <li>Certificado de factibilidad de servicio (energía eléctrica, agua, desagüe).</li>
  <li>Copia fedateada del autoevalúo (actual).</li>
  <li style="color: darkgoldenrod;">En el caso de que el administrado no sea el propietario del predio, debe presentar copia simple de la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal señalando que cuenta con representación vigente, consignando datos de la partida registral y el asiento en el que conste inscrita la misma.</li>
  <li>Declaración jurada de los profesionales que intervienen en el proyecto, señalando encontrarse hábiles para el ejercicio de su profesión.</li>
  <li>Para proyectos multifamiliares, la póliza CAR (todo riesgo contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños de materiales y personales a terceros y como complemento al seguro complementario de trabajo de riesgo. Este documento se entrega obligatoriamente a la municipalidad como máximo al día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Título de propiedad y/o Documento que acredite la propiedad (copia legalizada por el notario).</li>
  <li>Juego de planos (03) Firmado por el propietario y profesional habilitado (original):
    <ul>
      <li>Plano de localización y ubicación según formato.</li>
      <li>Plano de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas de cada especialidad.</li>
      <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 33 de la norma E 050 “Suelos y Cimentaciones” del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.</li>
    </ul>
  </li>
  <li>Estudio de mecánica de suelos, según los casos que establece el RNE.</li>
  <li>Cuadro de valores unitarios.</li>
  <li>Adjuntar CD con los requisitos.</li>
</ol>

        </div> 
      `,
      "certi-pos": `
        <h2 style="text-align: center;">SOLICITUD DE CONSTANCIA DE POSESIÓN
         </h2>
         <div style="text-align: justify;">
        <ol>
  <li>Copia legalizada (Por Notario) del DNI de los propietarios.</li>
  <li>Copia legalizada (Por Notario) del documento de propiedad.</li>
  <li>Copia legalizada (Por Notario) de la memoria descriptiva y plano realizado en sistema de coordenadas UTM Psad 56. Acompañado con la habilidad del profesional a cargo.</li>
  <li>Copia legalizada de los documentos referentes al autoevaluó (HR, PU y recibo de pago).</li>
  <li>Declaración jurada con firma legalizada del propietario (Formato).</li>
  <li>Declaración jurada con firma legalizada de los colindantes (Formato).</li>
  <li>Solicitud de formato FUT.</li>
  <li>Copia del recibo de pago por concepto de constancia de posesión.</li>
</ol>

<p><strong>Notas:</strong></p>
<p>Ingresar por mesa de partes (secretaría) todo lo solicitado debidamente foliado y ordenado en el folder correspondiente.</p>

        </div> 
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
