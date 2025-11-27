<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MUNICIPALIDAD DISTRITAL DE SAPALLANGA</title>

  <!-- Bootstrap 5 -->
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
  <header class=" text-white py-3" style="background-color: #9DCD24;">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="../login.php" class="btn btn-light btn-sm">Volver al inicio</a>
      <h1 class="h3 m-0">MUNICIPALIDAD DISTRITAL DE SAPALLANGA</h1>
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
        <li><a class="dropdown-item content-link" href="#" data-target="ha-a">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ha-b">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ha-c">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> (APROBACIÓN DE PROYECTO CON EVALUACIÓN PREVIA POR LOS REVISORES
URBANOS)</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="ha-cc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">  (APROBACION CON EVALUACION PREVIA DEL PROYECTO POR LA COMISIÓN
TÉCNICA)</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="ha-d">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;">(APROBACIÓN DE PROYECTO CON EVALUACIÓN PREVIA POR LA COMISIÓN TÉCNICA)</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="re-ur">REGULARIZACIÓN DE HABILITACIONES URBANAS</a></li>
      </ul>
    </div>

    <!-- Botón 2 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Licencias de Edificaciones
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ma">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LA AMPLIACIÓN DE
VIVIENDA UNIFAMILIAR</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LAS AMPLIACIONES
DE OBRAS MENORES</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES S PARA LA CONSTRUCCIÓN DE
CERCOS</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-b">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD PARA LAS
EDIFICACIONES PARA FINES DE VIVIENDA UNIFAMILIAR</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-bb">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD PARA LAS OBRAS DE
AMPLIACIÓN O REMODELACIÓN</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-c">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA
LAS EDIFICACIONES PARA FINES DE VIVIENDA MULTIFAMILIAR</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-cc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES DE USO MIXTO</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ccc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES PARA LOCALES COMERCIALES</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="licencia-e-d">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES PARA LOCALES COMERCIALES, CULTURALES, CENTROS DE DIVERSIÓN Y SALAS DE ESPECTÁCULOS, QUE
INDIVIDUALMENTE O EN CONJUNTO, CUENTEN CON MAS DE 30,000 m2 DE AREA TECHADA</span></a></li>
<li><a class="dropdown-item content-link" href="#" data-target="re-li-e">REGULARIZACIÓN DE LICENCIAS DE EDIFICACIONES EJECUTADAS</a></li>
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="ce-f">CERT. Y ASIG. DE NUMERACIÓN DE FINCA (INMUEBLE)</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ce-cat">CERT. NEGATIVO DE CATASTRO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="vi-pla">VISADO DE PLANOS (INCLUYE MEMORIA DESCRIPTIVA)</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ce-pa-e">CERT. DE PARAMETROS URBANISTICOS Y EDIFICATORIOS</a></li>
      </ul>
    </div>

    <!-- Botón 4 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Planeamiento Urbano
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="cert-c-u">CERT. DE COMPATIBILIDAD DE USO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-vi">CERT. DE ALINEAMIENTO VIAL</a></li>
        
      </ul>
    </div>

     <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Otros
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="cert-h">CERT. DE HABITABILIDAD</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ind-te">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS</a></li>
      </ul>
    </div>


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
      "ha-a": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACION URBANA MODALIDAD A:<br>
        <span style="font-size: 0.5em; color: gray;">  (APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li>Certificado de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, otorgados por las prestadoras de dichos servicios.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazado y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Planos de pavimentos con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificado Ambiental, de acuerdo a las normas de la materia y desarrollado conforme a lo dispuesto en la Ley Nº 274446, su Reglamento y al listado de inclusión de los proyectos de inversión sujetos al Sistema Nacional de Evaluación de Impacto Ambiental - SEIA.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos, en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de mecánica de suelos, con fines de pavimentación, de acuerdo a lo establecido en la Norma Técnica CE.010, "Pavimentos Urbanos" del RNE.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Sobre la acreditación de la propiedad, el Decreto Supremo N167 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>
</ol>

        </div>
      `,
      "ha-b": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B:<br>
        <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li>Certificado de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, otorgados por las prestadoras de dichos servicios.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en dos (02) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazado y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Planos de pavimentos con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificado Ambiental, de acuerdo a las normas de la materia y desarrollado conforme a lo dispuesto en la Ley Nº 274446, su Reglamento y al listado de inclusión de los proyectos de inversión sujetos al Sistema Nacional de Evaluación de Impacto Ambiental - SEIA.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos, en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de mecánica de suelos, con fines de pavimentación, de acuerdo a lo establecido en la Norma Técnica CE.010, "Pavimentos Urbanos" del RNE.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Sobre la acreditación de la propiedad, el Decreto Supremo N167 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutara la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>
</ol>

        </div>
      `,
      "ha-c": `
         <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C:<br>
        <span style="font-size: 0.5em; color: gray;"> (APROBACIÓN DE PROYECTO CON EVALUACIÓN PREVIA POR LOS REVISORES
URBANOS)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>

  <li>Certificado de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, otorgados por las prestadoras de dichos servicios.</li>

  <li>Declaración Jurada de inexistencia de feudatarios.</li>

  <li>Documentación técnica, en dos (02) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazado y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Planos de pavimentos con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>

  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>

  <li>Certificado Ambiental, de acuerdo a las normas de la materia y desarrollado conforme a lo dispuesto en la Ley Nº 274446, su Reglamento y al listado de inclusión de los proyectos de inversión sujetos al Sistema Nacional de Evaluación de Impacto Ambiental - SEIA.</li>

  <li>Certificado de Inexistencia de Restos Arqueológicos, en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>

  <li>Estudio de mecánica de suelos, con fines de pavimentación, de acuerdo a lo establecido en la Norma Técnica CE.010, "Pavimentos Urbanos" del RNE.</li>

  <li>Informe Técnico Favorable en tres (03) juegos originales, debidamente firmados y sellados por los Revisores Urbanos.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol>
  <li>Sobre la acreditación de la propiedad, el Decreto Supremo N167 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutara la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>
</ol>


        </div>
      `,
      "ha-cc": `
               <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C:<br>
        <span style="font-size: 0.5em; color: gray;"> (APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN
TÉCNICA)
  </span></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>

  <li>Certificado de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, otorgados por las prestadoras de dichos servicios.</li>

  <li>Declaración Jurada de inexistencia de feudatarios.</li>

  <li>Documentación técnica, en dos (02) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazado y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Planos de pavimentos con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>

  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>

  <li>Certificado Ambiental, de acuerdo a las normas de la materia y desarrollado conforme a lo dispuesto en la Ley Nº 274446, su Reglamento y al listado de inclusión de los proyectos de inversión sujetos al Sistema Nacional de Evaluación de Impacto Ambiental - SEIA.</li>

  <li>Certificado de Inexistencia de Restos Arqueológicos, en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>

  <li>Estudio de mecánica de suelos, con fines de pavimentación, de acuerdo a lo establecido en la Norma Técnica CE.010, "Pavimentos Urbanos" del RNE.</li>

  <li>Estudio de Impacto Vial (EIV), en los casos que el RNE lo establezca.</li>

  <li>Copia de los comprobantes de pago por revisión del proyecto.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol>
  <li>Sobre la acreditación de la propiedad, el Decreto Supremo N167 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutara la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>

  <li>Los pagos por revisión del proyecto se realizan según corresponda en los colegios profesionales respectivos, Colegio de Arquitectos del Perú - Regional Junín o Colegio de Ingenieros del Perú - Región Junín.</li>
</ol>


        </div>
      `,
      "ha-d": `
          <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD D:<br>
        <span style="font-size: 0.5em; color: gray;"> (APROBACIÓN DE PROYECTO CON EVALUACIÓN PREVIA POR LA COMISIÓN TÉCNICA)
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>

  <li>Certificado de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, otorgados por las prestadoras de dichos servicios.</li>

  <li>Declaración Jurada de inexistencia de feudatarios.</li>

  <li>Documentación técnica, en dos (02) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazado y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Planos de pavimentos con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>

  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>

  <li>Certificado Ambiental, de acuerdo a las normas de la materia y desarrollado conforme a lo dispuesto en la Ley Nº 274446, su Reglamento y al listado de inclusión de los proyectos de inversión sujetos al Sistema Nacional de Evaluación de Impacto Ambiental - SEIA.</li>

  <li>Certificado de Inexistencia de Restos Arqueológicos, en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>

  <li>Estudio de mecánica de suelos, con fines de pavimentación, de acuerdo a lo establecido en la Norma Técnica CE.010, "Pavimentos Urbanos" del RNE.</li>

  <li>Estudio de Impacto Vial (EIV), en los casos que el RNE lo establezca.</li>

  <li>Copia de los comprobantes de pago por revisión del proyecto.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol>
  <li>Sobre la acreditación de la propiedad, el Decreto Supremo N167 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutara la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>

  <li>Los pagos por revisión del proyecto se realizan según corresponda en los colegios profesionales respectivos, Colegio de Arquitectos del Perú - Regional Junín o Colegio de Ingenieros del Perú - Región Junín.</li>
</ol>
        </div>
      `,
      "re-ur": `
                <h2 style="text-align: center;">REGULARIZACIÓN DE HABILITACIONES URBANAS
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En el caso que el titular del derecho a habilitar sea persona distinta a la que inició el procedimiento administrativo de habilitación urbana, la documentación que acredite que cuenta con derecho a habilitar, y de ser el caso a edificar.</li>

  <li>Documentación técnica, firmada por el profesional constatador, compuesta por:
    <ol type="a">
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano de lotización, conteniendo el perímetro del terreno, el diseño de la lotización, de las vías, aceras y bermas; y las áreas correspondientes a los aportes. La lotización deberá estar en concordancia con el Plan de Desarrollo Urbano - PDU aprobado por la Municipalidad Provincial.</li>
      <li>Plano de ubicación con la localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico del terreno, incluyendo la referencia topográfica a la vía urbanizada más cercana existente o con aprobación de proyectos.</li>
      <li>Plano que indique los lotes ocupados y las alturas de las edificaciones existentes.</li>
      <li>Memoria descriptiva, indicando las manzanas, de corresponder, las áreas de los lotes, la numeración y los aportes reglamentarios.</li>
    </ol>
  </li>

  <li>Copia del comprobante de pago de la multa por habilitar sin licencia. El valor de la multa es equivalente hasta el 10% del valor de la obra a regularizar tomando el promedio de los valores unitarios oficiales de edificación a la fecha de su ejecución y de la fecha de solicitud de la regularización.</li>
</ol>
    <p><strong>Notas:</strong></p>
    <ol type="a">
      <li style="color: darkgoldenrod;">En caso se cuente con estudios preliminares aprobados, no corresponde presentar el plano de ubicación con la localización del terreno y el plano de lotización, debiendo presentar en su reemplazo:
        <ol type="i">
          <li>Resolución y planos de los estudios preliminares aprobados.</li>
          <li>Planos de Replanteo de la Habilitación Urbana, de corresponder.</li>
        </ol>
      </li>
      <li>El procedimiento administrativo de regularización de habilitaciones urbanas está sujeto a la evaluación y dictamen por parte del delegado del Colegio de Arquitectos del Perú de la Comisión Técnica para Habilitaciones Urbanas. Solo se emite el dictamen en los términos de Conforme y No Conforme. Los pagos por Comisión Técnica se efectuarán al Colegio de Arquitectos del Perú - Regional Junín. Art. 40 numeral 40.1 D.S. 029-2019-VIVIENDA.</li>
    </ol>
        </div>
      `,
      "licencia-e-ma": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LA CONSTRUCCION DE UNA
VIVIENDA UNIFAMILIAR DE HASTA 120 M2 CONSTRUIDOS, SIEMPRE QUE CONSTITUYA LA ÚNICA EDIFICACIÓN EN EL LOTE
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>

  <li>Plano de Ubicación.</li>

  <li>Planos de arquitectura (plantas, cortes y elevaciones), de estructuras, de instalaciones sanitarias y de instalaciones eléctricas.</li>
</ol>
  <p><strong>Notas:</strong></p>
    <ol type="1">
      <li>Documentación Técnica, en tres juegos originales y en archivo digital.</li>

      <li>El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA señala: “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.</li>

      <li>Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Norma G-030 Derechos y Responsabilidades, señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>
    
</ol>
        </div>
      `,
      "licencia-e-maa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LA AMPLIACIÓN DE
VIVIENDA UNIFAMILIAR CUYA EDIFICACIÓN ORIGINAL CUENTE CON LICENCIA DE CONSTRUCCIÓN, CONFORMIDAD DE OBRA O
DECLARATORIA DE FABRICA Y/O EDIFICACIÓN, SIN CARGA Y LA SUMATORIA DEL ÁREA TECHADA NO SUPERE LOS 200 m2
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>

  <li>Plano de Ubicación y arquitectura.</li>

  <li>Declaración jurada de habilitación del arquitecto responsable.</li>
</ol>
  <p><strong>Notas:</strong></p>
    <ol type="1">
      <li>Documentación Técnica, en tres juegos originales y en archivo digital.</li>

      <li>El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA (Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación) señala: “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.</li>

      <li>Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Norma G-030 Derechos y Responsabilidades señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>  
  </li>
</ol>
        </div>
      `,
      "licencia-e-maaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LAS AMPLIACIONES
CONSIDERADAS OBRAS MENORES, SEGÚN LO ESTABLECIDO EN LA NORMA TÉCNICA G 040 "DEFINICIONES" DEL REGLAMENTO NACIONAL
DE EDIFICACIONES - RNE"
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>

  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>

  <li>Plano de Ubicación y arquitectura.</li>

  <li>Declaración jurada de habilitación del arquitecto responsable.</li>
</ol>
  <p><strong>Notas:</strong>
  </p>
    <ol type="1">
      <li>Documentación Técnica, en tres juegos originales y en archivo digital, donde se diferencien dichas áreas.</li>

      <li>El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA (Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación) señala: “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.</li>

      <li>Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Norma G-030 Derechos y Responsabilidades señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.</li>
    
  
</ol>

        </div>
      `,
      "licencia-e-maaaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA LA CONSTRUCCIÓN DE
CERCOS DE MAS DE 20 METROS DE LONGITUD, SIEMPRE QUE EL INMUEBLE NO SE ENCUENTRE BAJO EL RÉGIMEN DE PROPIEDAD
EXCLUSIVA Y PROPIEDAD COMÚN, DE ACUERDO A LA LEGISLACIÓN DE LA MATERIA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, 
    los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere 
    iniciar, de acuerdo a la modalidad correspondiente.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de Ubicación.
  </li>

  <li>
    Planos de las especialidades que correspondan y sus respectivas memorias descriptivas.
  </li>
 </ol>
  <p><strong>Notas:</strong></p>
    <ol type="1">
      <li>
        Documentación Técnica, en tres juegos originales y en archivo digital, donde se diferencien dichas áreas.
      </li>

      <li>
        El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Decreto Supremo que aprueba el Reglamento 
        de Licencias de Habilitación Urbana y Licencias de Edificación, señala lo siguiente: 
        “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, por lo menos, con el 
        correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana 
        debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
      </li>
</ol>
        </div>
      `,
      "licencia-e-b": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD B:<br>
        <span style="font-size: 0.5em; color: gray;">  APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD PARA LAS
EDIFICACIONES PARA FINES DE VIVIENDA UNIFAMILIAR, MULTIFAMILIAR O CONDOMINIOS DE VIVIENDA UNIFAMILIAR Y/O MULTIFAMILIAR
NO MAYORES A CINCO (05) PISOS, SIEMPRE QUE EL PROYECTO TENGA UN MÁXIMO DE 3,000 m2 DE AREA TECHADA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, 
    los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere 
    iniciar, de acuerdo a la modalidad correspondiente.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación del lote.
  </li>

  <li>
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Instalaciones Eléctricas y otras, de ser el caso, 
    firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas 
    por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 39 de la Norma Técnica E 050 del RNE, acompañado 
    de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, 
    complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder según los casos que establece la Norma Técnica E.050, 
    "Suelos y Cimentaciones" del RNE.
  </li>

  <li>
    Adicionalmente para proyectos multifamiliares o condominios: Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya 
    a ejecutar, con cobertura por daños materiales y personales a terceros.
  </li>

  <li>
    Adicionalmente para proyectos de vivienda multifamiliar o fines diferentes al de vivienda: Certificado de Factibilidad de Servicios.
  </li>
    </ol>
  <p><strong>Notas:</strong></p>
    <ol type="a">
      <li>
        Documentación Técnica (En tres juegos originales y en archivo digital, a excepción del Estudio de Mecánica de Suelos).
      </li>

      <li>
        El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Decreto Supremo que aprueba el Reglamento de Licencias 
        de Habilitación Urbana y Licencias de Edificación, señala lo siguiente: “Para la obtención de la Licencia de Edificación, se tiene que acreditar 
        que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, 
        la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
      </li>

      <li>
        Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA, que aprueba el Reglamento Nacional de Edificaciones – 
        Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, 
        el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor 
        sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma 
        legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.
      </li>


</ol>

        </div>
      `,
      "licencia-e-bb": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD B:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN DE PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD PARA LAS OBRAS DE
AMPLIACIÓN O REMODELACIÓN DE UNA EDIFICACIÓN EXISTENTE, PARA FINES DE VIVIENDA CON MODIFICACIÓN ESTRUCTURAL, AUMENTO
DEL ÁREA TECHADA O CAMBIO DE USO
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, 
    los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere 
    iniciar, de acuerdo a la modalidad correspondiente.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación del lote.
  </li>

  <li>
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Instalaciones Eléctricas y otras, 
    de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las 
    correspondientes memorias descriptivas por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 39 de la Norma Técnica E 050 del RNE, 
    acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número 
    de pisos y sótanos, complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder según los casos que establece la Norma Técnica E.050 
    "Suelos y Cimentaciones" del RNE.
  </li>

  <li>
    Adicionalmente para proyectos multifamiliares o condominios: Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya 
    a ejecutar, con cobertura por daños materiales y personales a terceros.
  </li>

  <li>
    Adicionalmente para proyectos de vivienda multifamiliar o fines diferentes al de vivienda: Certificado de Factibilidad de Servicios.
  </li>
</ol>
  <p><strong>Notas:</strong></p>
    <ol type="1">
      <li>
        Documentación Técnica (En tres juegos originales y en archivo digital, a excepción del Estudio de Mecánica de Suelos).
      </li>

      <li>
        El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Decreto Supremo que aprueba el Reglamento de Licencias de 
        Habilitación Urbana y Licencias de Edificación, señala lo siguiente: “Para la obtención de la Licencia de Edificación, se tiene que acreditar 
        que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, 
        la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
      </li>

      <li>
        Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – 
        Norma G-030 Derechos y Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, 
        el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor 
        sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma 
        legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.
      </li>
    

</ol>

        </div>
      `,
      "licencia-e-c": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD C:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA
LAS EDIFICACIONES PARA FINES DE VIVIENDA MULTIFAMILIAR, QUINTA O CONDOMINIOS, QUE INCLUYAN VIVIENDA MULTIFAMILIAR DE
MÁS, DE CINCO (05) PISOS O 3,000 m2 DE ÁREA TECHADA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, 
    en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente, 
    adjuntando copia del recibo del pago efectuado en los colegios profesionales; en las instituciones con funciones específicas; o, en aquellas 
    que designan delegados de servicios públicos, por derecho de revisión.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación y localización del lote.
  </li>

  <li>
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otros, de ser el caso, firmados y sellados 
    por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de Excavaciones, de acuerdo con lo establecido en el artículo 33 de la Norma Técnica E 050 del RNE, acompañado 
    de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, 
    complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 
    “Suelos y Cimentaciones” del RNE.
  </li>

  <li style="color: darkgoldenrod;">
    Certificación ambiental aprobada por la entidad competente, según sea el caso.
  </li>

  <li style="color: darkgoldenrod;">
    Estudio de Impacto Vial aprobado por la entidad competente, según sea el caso.
  </li>

  <li>
    La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros.
  </li>
</ol>
  <p><strong>Notas:</strong></p>
    <ol type="1">
      <li>
        Documentación Técnica (En tres juegos originales y en archivo digital).
      </li>

      <li>
        El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Decreto Supremo que aprueba el Reglamento de Licencias de 
        Habilitación Urbana y Licencias de Edificación, señala lo siguiente: “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, 
        por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana debe estar recepcionada, 
        salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
      </li>

      <li>
        Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA que aprueba el Reglamento Nacional de Edificaciones – Norma G-030 Derechos y 
        Responsabilidades, señala lo siguiente: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, el propietario deberá acreditar su 
        calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor sobre el que se ejecutará la habilitación urbana o edificación. 
        También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre 
        de un tercero o exista una compra venta más reciente”.
      </li>
    
</ol>
        </div>
      `,
            "licencia-e-cc": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD C:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES DE USO MIXTO CON VIVIENDA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, 
    en la sección que corresponda, los profesionales responsables, en el que se debe consignar 
    la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente, 
    adjuntando copia del recibo del pago efectuado en los colegios profesionales; en las instituciones con 
    funciones específicas; o, en aquellas que designan delegados de servicios públicos, por derecho de revisión.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación y localización del lote.
  </li>

  <li>
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, 
    Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto 
    y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de excavaciones, de acuerdo con lo establecido en el artíc. 33 
    de la Norma Téc. E 050 del RNE, acompañado de la memoria descriptiva que precise las características 
    de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece 
    la Norma Técnica E.050 “Suelos y Cimentaciones” del RNE.
  </li>

  <li style="color: darkgoldenrod;">
    Certificación ambiental aprobada por la entidad competente, según sea el caso.
  </li>

  <li style="color: darkgoldenrod;">
    Estudio de Impacto Vial aprobado por la entidad competente, según sea el caso.
  </li>

  <li>
    Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, 
    con cobertura por daños materiales y personales a terceros.
  </li>
</ol>

<p><strong>Notas:</strong></p>

<p>1.- Documentación Técnica (En tres juegos originales y en archivo digital).</p>

<p>
2.- El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Reglamento de Licencias de 
Habilitación Urbana y Licencias de Edificación, señala: “Para la obtención de la Licencia de Edificación, se 
tiene que acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. 
Para la ejecución de la edificación, la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana 
aprobados con construcción simultánea”.
</p>

<p>
3.- Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Reglamento Nacional de Edificaciones, 
Norma G-030 Derechos y Responsabilidades, señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, 
el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor 
sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del Inmueble con firma 
legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.
</p>
        </div>
      `,
            "licencia-e-ccc": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD C:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES PARA LOCALES COMERCIALES, CULTURALES, CENTROS DE DIVERSIÓN Y SALAS DE ESPECTÁCULOS QUE,
INDIVIDUALMENTE O EN CONJUNTO, CUENTEN CON UN MÁXIMO DE 30,000 m2 DE ÁREA TECHADA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda,
    los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar,
    de acuerdo a la modalidad correspondiente, adjuntando copia del recibo del pago efectuado en los colegios profesionales; 
    en las instituciones con funciones específicas; o, en aquellas que designan delegados de servicios públicos, por derecho de revisión.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación y localización del lote.
  </li>

  <li style="color: darkgoldenrod;">
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras,
    de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, 
    adjuntando las correspondientes memorias descriptivas por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de excavaciones, de acuerdo con lo establecido en el artíc. 33 de la Norma Técnica E.050 del RNE,
    acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes 
    indicando el número de pisos y sótanos, complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece 
    la Norma Técnica E.050 “Suelos y Cimentaciones” del RNE.
  </li>

  <li style="color: darkgoldenrod;">
    Certificación ambiental aprobada por la entidad competente, según sea el caso.
  </li>

  <li style="color: darkgoldenrod;">
    Estudio de Impacto Vial aprobado por la entidad competente, según sea el caso.
  </li>

  <li>
    Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, 
    con cobertura por daños materiales y personales a terceros.
  </li>
</ol>

<p><strong>Notas:</strong></p>

<p>1.- Documentación Técnica (En tres juegos originales y en archivo digital).</p>

<p>
2.- El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Reglamento de Licencias de 
Habilitación Urbana y Licencias de Edificación, señala: “Para la obtención de la Licencia de Edificación, se tiene que acreditar 
que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, 
la habilitación urbana debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
</p>

<p>
3.- Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Reglamento Nacional de Edificaciones, 
Norma G-030 Derechos y Responsabilidades, señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, 
el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble a su favor 
sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del inmueble con firma 
legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compra venta más reciente”.
</p>
        </div>
      `,
            "licencia-e-d": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD D:<br>
        <span style="font-size: 0.5em; color: gray;"> APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA LAS
EDIFICACIONES PARA LOCALES COMERCIALES, CULTURALES, CENTROS DE DIVERSIÓN Y SALAS DE ESPECTÁCULOS, QUE
INDIVIDUALMENTE O EN CONJUNTO, CUENTEN CON MAS DE 30,000 m2 DE AREA TECHADA
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>
    FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, 
    los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, 
    de acuerdo a la modalidad correspondiente. Adjuntando copia del recibo del pago efectuado en los colegios profesionales; 
    en las instituciones con funciones específicas; o, en aquellas que designan delegados de servicios públicos, por derecho de revisión.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.
  </li>

  <li>
    Plano de ubicación y localización del lote.
  </li>

  <li style="color: darkgoldenrod;">
    Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otros, 
    de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, 
    adjuntando las correspondientes memorias descriptivas por cada especialidad.
  </li>

  <li style="color: darkgoldenrod;">
    De ser el caso, plano de sostenimiento de excavaciones, de acuerdo con lo establecido en el artíc. 33 de la Norma Técnica E.050 del RNE, 
    acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando 
    el número de pisos y sótanos, complementando con fotos.
  </li>

  <li>
    Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 
    “Suelos y Cimentaciones” del RNE.
  </li>

  <li style="color: darkgoldenrod;">
    Certificación ambiental aprobada por la entidad competente, según sea el caso.
  </li>

  <li style="color: darkgoldenrod;">
    Estudio de Impacto Vial aprobado por la entidad competente, según sea el caso.
  </li>

  <li>
    La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, 
    con cobertura por daños materiales y personales a terceros.
  </li>
</ol>

<p><strong>Notas:</strong></p>

<p>1.- Documentación Técnica (En tres juegos originales y en archivo digital).</p>

<p>
2.- El artículo 3° numeral 3.2 inciso c) del Decreto Supremo Nº 029-2019-VIVIENDA, Reglamento de Licencias de Habilitación Urbana 
y Licencias de Edificación, señala: “Para la obtención de la Licencia de Edificación, se tiene que acreditar que el predio cuenta, 
por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. Para la ejecución de la edificación, la habilitación urbana 
debe estar recepcionada, salvo los proyectos de habilitación urbana aprobados con construcción simultánea”.
</p>

<p>
3.- Sobre la acreditación de la propiedad, el Decreto Supremo Nº 011-2006-VIVIENDA – Reglamento Nacional de Edificaciones, 
Norma G-030 Derechos y Responsabilidades, señala: “Artículo 3.- Para la realización de trámites administrativos en los que sea requerido, 
el propietario deberá acreditar su calidad de tal mediante la presentación de la escritura o copia simple de la inscripción del inmueble 
a su favor sobre el que se ejecutará la habilitación urbana o edificación. También lo puede hacer mediante una Minuta de Compra-Venta del inmueble 
con firma legalizada por Notario, y mientras no se demuestre que la propiedad está inscrita a nombre de un tercero o exista una compraventa más reciente”.
</p>
        </div>
      `,
            "re-li-e": `
        <h2 style="text-align: center;">REGULARIZACIÓN DE LICENCIAS DE EDIFICACIONES EJECUTADAS
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único de Regularización, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por el profesional responsable, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, adjuntando copia del recibo del pago efectuado por derecho de revisión al Colegio Profesional (Comisión Técnica).</li>

  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>

  <li>Copia del comprobante de pago de la multa por construir sin licencia.</li>

  <li>Plano de ubicación y localización del lote.</li>

  <li>Planos de arquitectura (planta, cortes y elevaciones).</li>

  <li>Memoria descriptiva.</li>

  <li>Carta de seguridad de obra, debidamente sellada y firmada por un ingeniero civil colegiado.</li>

  <li style="color: darkgoldenrod;">
    Para regularización de remodelaciones, ampliaciones o demoliciones:<br>
    Copia del documento que acredite la declaratoria de fábrica o de edificación, con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente que no es materia de regularización.
  </li>

  <li style="color: darkgoldenrod;">
    Para demoliciones totales o parciales de edificaciones cuya fábrica se encuentre inscrita en el Registro de Predios:<br>
    Acreditar que sobre el bien no recaigan cargas y/o gravámenes; en su defecto, presentar la autorización del titular de la carga o gravamen.
  </li>

  <li style="color: darkgoldenrod;">
    En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común:<br>
    Autorización de la Junta de Propietarios, siempre que esta se encuentre inscrita ante el Registro de Predios. De no estar inscrita o no estar actualizada la Junta de Propietarios y siempre que el proyecto no contravenga las normas vigentes, los parámetros urbanísticos y edificatorios, así como las condiciones de seguridad y funcionamiento, se presenta un documento suscrito por mayoría simple de los propietarios autorizando la ejecución de las obras.
  </li>
</ol>

<p><strong>Notas:</strong></p>
<p>La documentación técnica, debe estar firmada por el profesional constatador.</p>

        </div>
      `,
            "ce-f": `
        <h2 style="text-align: center;">CERTIFICADO Y ASIGNACIÓN DE NUMERACIÓN DE FINCA (INMUEBLE)
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud debidamente suscrita por el o los propietarios o su representante debidamente acreditado.</li>
  <li>Documento que acredite la titularidad del predio.</li>
  <li>Plano de ubicación y localización suscrito por profesional responsable, colegiado y habilitado.</li>
</ol>

        </div>
      `,
            "cert-h": `
        <h2 style="text-align: center;">CERTIFICADO DE HABITABILIDAD
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigirá al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Presentar documento que acredite la propiedad del predio.</li>
  <li>Plano de ubicación, perimétrico y topográfico firmados por el profesional habilitado (Arquitecto o Ingeniería Civil).</li>
  <li>Informe técnico firmado y sellado por un Ingeniero Civil o Arquitecto colegiado indicando el estado de conservación del predio, adjuntando plano de distribución arquitectónica, corte y elevación.</li>
</ol>
        </div>
      `,
            "cert-c-u": `
        <h2 style="text-align: center;">CERTIFICADO DE COMPATIBILIDAD DE USO
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigirá al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Presentar documento que acredite la propiedad del predio o alquiler.</li>
  <li>Autorización del INC en caso de zona monumental.</li>
  <li>Plano de ubicación a escala de 1/500 y de localización.</li>
  <li>Memoria Descriptiva, en casi de grifos y/o estaciones de establecimiento, establecimientos con depósito de hidrocarburos para uso propio.</li>
  <li>Plano de distribución en caso de grifos a escala 1/100 indicando las zonas de tanques, cercos, estacionamientos, oficinas, etc.</li>
</ol>
        </div>
      `,
            "cert-vi": `
        <h2 style="text-align: center;">CERTIFICADO DE ALINEAMIENTO VIAL
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigirá al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Exhibir del DNI del solicitante.</li>
  <li>Copia del documento que acredite la propiedad del predio o documento que acredite la posesión.</li>
  <li>Plano de ubicación y localización firmado por el profesional responsable.</li>
  <li>Memoria descriptiva suscrita por un Ingeniero Civil o Arquitecto colegiados y habilitados.</li>
</ol>
        </div>
      `,
            "ce-cat": `
        <h2 style="text-align: center;">CERTIFICADO NEGATIVO DE CATASTRO
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigirá al Alcalde.</li>
  <li>Plano de ubicación, localización y memoria descriptiva firmado por el profesional responsable.</li>
  <li>Exhibir DNI del solicitante.</li>
</ol>
        </div>
      `,
            "vi-pla": `
        <h2 style="text-align: center;">VISADO DE PLANOS (INCLUYE MEMORIA DESCRIPTIVA)
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde.</li>
  <li>Exhibir DNI del solicitante.</li>
  <li>Copia del título de propiedad o documento que acredite la posesión del predio.</li>
  <li>Memoria descriptiva suscrito por profesional responsable (02 juegos).</li>
  <li>Plano de ubicación y localización suscrito por profesional responsable (02 juegos).</li>
  <li>Indicar número y fecha de comprobante de pago por derecho de tramitación.</li>
</ol>
        </div>
      `,
            "ce-pa-e": `
        <h2 style="text-align: center;">CERTIFICADO DE PARÁMETROS URBANÍSTICOS Y EDIFICATORIOS
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud debidamente suscrita por el solicitante, indicando los datos referidos a la ubicación del predio, número y fecha del comprobante de pago
por derecho de tramitación.
</li>
</ol>
        </div>
      `,
            "ind-te": `
        <h2 style="text-align: center;">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS UBICADOS DENTRO DEL AREA URBANA O DE EXPANSION URBANA
        </h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el titular del derecho a habilitar sea persona distinta a la que inició el procedimiento administrativo de habilitación urbana, la documentación que acredite que cuenta con derecho a habilitar, y de ser el caso a edificar.</li>
  <li>Anexo E del FUHU: Independización de Terreno Rústico / Habilitación Urbana.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica compuesta por:<br>
      - Plano de ubicación y localización del terreno matriz con coordenadas UTM.<br>
      - Plano del predio rústico matriz, indicando perímetro, linderos, áreas, curvas de nivel y nomenclatura original, según antecedentes registrales.<br>
      - Plano de Independización, señalando la parcela independizada y la(s) parcela(s) remanente(s), indicando perímetro, linderos, área, curvas de nivel y nomenclatura original según antecedentes registrales. Cuando corresponda, el Plano de Independización identifica el número de parcelas con los sufijos del predio matriz.<br>
      - Memoria descriptiva indicando áreas, linderos y medidas perimétricas del predio matriz del área independizada y del área remanente.
  </li>
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
