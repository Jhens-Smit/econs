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
        <li><a class="dropdown-item content-link" href="#" data-target="certi-as">CERTIFICADO Y ASIGNACIÓN DE NUMERACIÓN DE FINCA</a></li>
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
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-vi">CERT. DE AL. VIAL EN VIAS URBANAS CONSOLIDADAS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-vii">CERT. DE AL. VIAL EN PROCESO DE CONSOLIDACIÓN</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viii">CERT. DE SECCIÓN VIAL</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viiii">CERT. DE NOMENCLATURA DE VÍA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-viiiii">CERT. DE COMPATIBILIDAD DE USOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="ocp-via">OCUPACIÓN DE VIAS</a></li>
      </ul>
    </div>

    <!-- Nueva Sección -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Otros
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="aut-r-pis">AUTORIZ. DE ROT. DE PISTAS Y/O VEREDAS PARA INST. DOMICILARIA</a></li>
         <li><a class="dropdown-item content-link" href="#" data-target="aut-r-pis-ob">AUTORIZ. DE ROT. DE PISTAS Y/O VEREDAS PARA OBRAS COMPLEMENTARIAS</a></li>
         <li><a class="dropdown-item content-link" href="#" data-target="op-tip-tr">OPOSICION A CUALQUIER TIPO DE TRAMITE</a></li>
      </ul>
    </div>
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
      <div style="text-align: justify;">
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
  </div>
`,
      "licencia-modalidad-b": `

         <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B <br>
         <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN POR LA MUNICIPALIDAD)
  </span></h2>
  <div style="text-align: justify;">
        <ol>
  <li>Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad que corresponda.</li>
  <li style="color: darkgoldenrod;">En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  <li>Certificado de Factibilidad de Servicios de agua, alcantarillado y de energía eléctrica.</li>
  <li>Declaración Jurada de Inexistencia de Feudatarios</li>
  <li>
    Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li style="color: darkgoldenrod;">Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  <li style="color: darkgoldenrod;">Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Los derechos de aportes de acuerdo al Artículo 16 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Si no cumple con los requisitos, se aplicará de acuerdo con el Artículo 23 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>El Pago por déficit de aportes reglamentarios, no se encuentran contemplados en los pagos administrativos; por lo que se deberá dar en cumplimiento a la NORMA GH.020.
    <ul>
      <li>El % de aporte se determina de acuerdo a la zonificación.</li>
      <li>Fórmula: (Área del % de aporte X Arancel).</li>
    </ul>
  </li>
</ul>
</div>
      `,
      "licencia-modalidad-bb": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B <br>
         <span style="font-size: 0.5em; color: gray;">(APROBACIÓN DEL PROYECTO CON EVALUACIÓN PREVIA POR LOS REVISORES URBANOS)
  </span></h2>
  <div style="text-align: justify;">
        <ol>
  <li>Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad que corresponda.</li>
  
  <li style="color: darkgoldenrod;">En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  
  <li>Certificado de Factibilidad de Servicios de agua, alcantarillado y de energía eléctrica.</li>
  
  <li>Declaración Jurada de Inexistencia de Feudatarios</li>
  
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente: 
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li style="color: darkgoldenrod;">Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  
  <li style="color: darkgoldenrod;">Copia del Planeamiento integral aprobado, cuando corresponda. O propuesta de Planeamiento Integral, según numeral 9 del Artículo 3 del D.S. N° 006-2017-VIVIENDA.</li>
  
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del Articulo 21 del D.S. N° 029-2019-VIVIENDA</li>
  
  <li style="color: darkgoldenrod;">Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del Artículo 21 del D.S. N° 029-2019- VIVIENDA.</li>
  
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  
  <li>Comunicación de la fecha de inicio de la obra</li>
  
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ol>
  <li>Los derechos de aportes de acuerdo al Articulo 16 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Si no cumple con los requisitos, se aplicara de acuerdo con el Artículo 23 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>El Pago por déficit de aportes reglamentarios, no se encuentran contemplados en los pagos administrativos; Por lo que se deberá dar en cumplimiento a la NORMA GH.020. 
    <ul>
      <li>El % de aporte se determina de acuerdo a la zonificación.</li>
      <li>Fórmula: (Área del % de aporte X Arancel).</li>
    </ul>
  </li>
</ol>

</div>
      `,
      "licencia-modalidad-c": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C <br>
        <span style="font-size: 0.5em; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR REVISORES URBANOS)
  </span></h2>
  <div style="text-align: justify;">
        <ol>
  <li>Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad que corresponda.</li>
  
  <li style="color: darkgoldenrod;">En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  
  <li>Certificado de Factibilidad de Servicios de agua, alcantarillado y de energía eléctrica.</li>
  
  <li>Declaración Jurada de Inexistencia de Feudatarios.</li>
  
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li style="color: darkgoldenrod;">Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  
  <li style="color: darkgoldenrod;">Copia del Planeamiento integral aprobado, cuando corresponda. O propuesta de Planeamiento Integral, según numeral 9 del Artículo 3 del D.S. N° 006-2017-VIVIENDA.</li>
  
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  
  <li>Informe técnico favorable con las formalidades dispuestas en el Artículo 27 del D.S. N° 029-2019-VIVIENDA.</li>
  
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  
  <li>Comunicación de la fecha de inicio de la obra.</li>
  
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Los derechos de aportes de acuerdo al Artículo 16 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>El Pago por déficit de APORTES REGLAMENTARIOS, no se encuentran contemplados en los pagos administrativos; por lo que se deberá dar en cumplimiento a la NORMA GH.020.
    <ul>
      <li>El % de aporte se determina de acuerdo a la zonificación.</li>
      <li>Fórmula: (Área del % de aporte X Arancel).</li>
    </ul>
  </li>
</ul>
</div>
      `,
      "licencia-modalidad-cc": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACIÓN URBANA MODALIDAD C <br>
        <span style="font-size: 0.5em; color: gray;">(APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA)
  </span></h2>
  <div style="text-align: justify;">
        <ol>
  <li>Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad que corresponda.</li>
  <li style="color: darkgoldenrod;">En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  <li>Certificado de Factibilidad de Servicios de agua, alcantarillado y de energía eléctrica.</li>
  <li>Declaración Jurada de Inexistencia de Feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li style="color: darkgoldenrod;">Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">Copia del Planeamiento integral aprobado, cuando corresponda. O propuesta de Planeamiento Integral, según numeral 9 del Artículo 3 del D.S. N° 006-2017-VIVIENDA.</li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del Artículo 21 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Adjuntar el Estudio de Impacto Vial (EIV), en los casos que establezca el RNE y exhibir los comprobantes de pago por revisión del proyecto.</li>
  <li>Pago por derecho copia de los comprobantes de pago por revisión de proyecto.</li>
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Para los procedimientos administrativos de otorgamiento de Licencias de Habilitación Urbana, la Comisión Técnica Distrital, la Comisión Técnica Provincial y la Comisión Técnica Provincial Ad Hoc están conformadas por:
    <ul>
      <li>Un (01) representante de la Municipalidad, quien la preside.</li>
      <li>Un (01) representante del Colegio de Arquitectos del Perú - CAP.</li>
      <li>Un (01) representante del Colegio de Ingenieros del Perú - CIP.</li>
      <li>Un (01) representante por cada entidad prestadora de servicios públicos. Según el numeral 10.3 del Artículo 10 del D.S. N° 029-2019-VIVIENDA.</li>
    </ul>
  </li>
  <li>Los derechos de aportes de acuerdo al Artículo 16 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios y su Reglamento.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>La documentación técnica será presentada en una copia; debiendo presentarse las dos copias adicionales cuando la Comisión Técnica emita el Dictamen Conforme.</li>
  <li>El Pago por déficit de APORTES REGLAMENTARIOS, no se encuentra contemplado en los pagos administrativos; por lo que se deberá dar en cumplimiento a la NORMA GH.020. <br>
  <b>*</b> El % de aporte se determina de acuerdo a la zonificación. <br>
  <b>*</b> Fórmula: (Área del % de aporte X Arancel)
  </li>
</ul>
</div>
      `,
      "independizacion-terrenos": `
      <h2 style="text-align: center;">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS<br></h2>
      <div style="text-align: justify;">
        <ol>
  <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong>
  <li>
    Formulario Único (FUHU - ANEXOS) en tres (03) juegos originales, debidamente suscritos por el administrado y en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad que corresponda.
  </li>
  <li style="color: darkgoldenrod;">
    En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.
  </li>
  <li>
    Anexo E del FUHU: Independización de Terreno Rústico / Habilitación Urbana.
  </li>
  <li>
    Declaración Jurada de Inexistencia de Feudatarios.
  </li>
  <strong>B. VERIFICACIÓN TÉCNICA</strong>
  <li>
    Certificado de Zonificación y Vías. Emitida por la Municipalidad Provincial de Huancayo. De acuerdo al inciso a) del Artículo 20 del D.S. Nº 029-2019-VIVIENDA.
  </li>
  <li>
    Documentación técnica compuesta por:
    <ul>
      <li>Plano de ubicación y localización del terreno matriz con coordenadas UTM.</li>
      <li>Plano del predio rústico matriz, indicando perímetro, linderos, áreas, curvas de nivel y nomenclatura original, según antecedentes registrales.</li>
      <li>Plano de Independización, señalando la parcela independizada y la(s) parcela(s) remanente(s), indicando perímetro, linderos, área, curvas de nivel y nomenclatura original según antecedentes registrales.</li>
      <li>Plano de Independización, señalando la parcela independizada y la(s) parcela(s) remanente(s), indicando perímetro, linderos, área, curvas de nivel y nomenclatura original según antecedentes registrales. Cuando corresponda, el Plano de parcelación identifica el número de parcelas con los sufijos del predio matriz.</li>
      <li>Memoria Descriptiva, indicando áreas, linderos y medidas perimétricas del predio matriz, del área independizada y del área remanente.</li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>La independización de terrenos rústicos, o parcelaciones, que se ejecuten en áreas urbanas o de expansión urbana, deberán tener parcelas superiores a 1 (una) hectárea (Según el Artículo 5. Norma GH.010 del RNE).</li>
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.</li>
  <li>En caso se solicite la independización de predios rústicos y la habilitación urbana en un solo procedimiento administrativo, el administrado debe presentar, además, los requisitos exigidos para el procedimiento administrativo de habilitación urbana que corresponda.</li>
</ul>
</div>
      `,
      "sub-lote-urbano": `
      <h2 style="text-align: center;">SUBDIVISIÓN DE LOTE URBANO<br></h2>
      <div style="text-align: justify;">
        <ol>
  <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong>
  <li>
    Formulario Único (FUHU) en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.
  </li>
  <li style="color: darkgoldenrod;">
    En caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.
  </li>

  <strong>B. VERIFICACIÓN TÉCNICA</strong>
  <li>
    Anexo F del FUHU: Subdivisión de lote urbano.
  </li>
  <li>
    Plano de ubicación y localización del lote materia de subdivisión.
  </li>
  <li>
    Plano del lote a subdividir, señalando el área, linderos, medidas perimétricas y nomenclatura, según los antecedentes registrales.
  </li>
  <li>
    Plano de la subdivisión señalando áreas, linderos, medidas perimétricas y nomenclatura de cada sublote propuesto resultante, en concordancia con lo establecido en la Norma Técnica GH.020 "Componente del Diseño Urbano" del Reglamento Nacional de Edificaciones RNE.
  </li>
  <li>
    Memoria descriptiva, indicando áreas, linderos y medidas perimétricas del lote materia de subdivisión y de los sublotes propuestos resultantes.
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>
    Reglamento Nacional de Edificaciones (RNE) GH.010: Las subdivisiones constituyen las particiones de predios ya habilitados y se sujetan a las condiciones propias de los lotes normativos de cada zonificación. Estas podrán ser de dos tipos:
    <ul>
      <li><strong>Sin Obras:</strong> Cuando no requieren la ejecución de vías ni redes de servicios públicos.</li>
      <li><strong>Con Obras:</strong> Cuando requieren la ejecución de vías y redes de servicios públicos. (Según Artículo 10. Norma GH.010 del RNE)</li>
    </ul>
  </li>
  <li>
    Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.
  </li>
  <li>
    El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen, numeral 7.1 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.
  </li>
  <li>
    Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado, numeral 7.2 del Artículo 7 del D.S. N° 029-2019-VIVIENDA.
  </li>
</ul>
</div>
      `,
      "licencia-e-ma": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES.<br>
        <span style="font-size: 0.5em; color: gray;">CONSTRUCCIÓN DE UNA VIVIENDA UNIFAMILIAR DE HASTA 120 m<sup>2</sup> CONSTRUIDOS
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="3">
  <li>Plano de ubicación, los planos de arquitectura (planta, cortes y elevaciones), de estructuras, de instalaciones sanitarias, y de instalaciones eléctricas. Esta documentación debe ser presentada también en archivo digital.</li>
</ol>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong><br>
<ol start="4">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li style="color: darkgoldenrod;">Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica. De ser el caso pago según acotación en Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          a) Estacionamiento comercial 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)<br>
          b) Estacionamiento residencial 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)
        </ul>
      </li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Todos los documentos serán presentados por duplicado.</li>
  <li>El Formulario y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.</li>
</ul>
</div>
      `,
      "licencia-e-maa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA AMPLIACIÓN DE UNA VIVIENDA UNIFAMILIAR,<br>
        <span style="font-size: 0.5em; color: gray;">CUYA EDIFICACIÓN ORIGINAL CUENTE CON LICENCIA DE CONSTRUCCIÓN O DECLARATORIA DE FÁBRICA, Y LA SUMATORIA DEL ÁREA CONSTRUIDA DE AMBAS NO SUPERE LOS 200 m<sup>2</sup>
  </span></h2>
  <div style="text-align: justify;">

      <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong><br>
<ol start="3">
  <li>Plano de ubicación, los planos de arquitectura (planta, cortes y elevaciones), de estructuras, de instalaciones sanitarias, y de instalaciones eléctricas. Esta documentación debe ser presentada también en archivo digital.</li>
  <li>Para ampliaciones de una vivienda unifamiliar cuya edificación original cuente con licencia de construcción, declaratoria de fábrica o de edificación sin carga y la sumatoria del área existente con el área de ampliación no supere los 200 m<sup>2</sup> de área techada, se deben presentar los planos exigidos como documentación técnica, en los que se diferencien dichas áreas.</li>
</ol>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong> 
<ol start="5">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica. De ser el caso pago según acotación en Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          a) Estacionamiento comercial 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)<br>
          b) Estacionamiento residencial 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)
        </ul>
      </li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. (a) Se debe acreditar
que el predio cuenta, por lo menos, con el correspondiente proyecto.</li>
  <li>Todos los documentos serán presentados por duplicado.</li>
  <li>El Formulario y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.</li>
  <li>La licencia tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      "licencia-e-maaa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES AMPLIACIONES Y REMODELACIONES<br>
        <span style="font-size: 0.5em; color: gray;">CONSIDERADAS OBRAS MENORES
  </span></h2>
   <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong><br>
<ol start="3">
  <li>Plano de ubicación y arquitectura; así como la declaración jurada de habilitación profesional del arquitecto responsable del proyecto. Esta documentación debe ser presentada también en archivo digital, donde se diferencien dichas áreas.</li>
</ol>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong> 
<ol start="4">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica. De ser el caso pago según acotación en Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          a) Estacionamiento comercial 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)<br>
          b) Estacionamiento residencial 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel) - Retiro (en zona consolidada de acuerdo al PDU) área sin retiro x arancel.
        </ul>
      </li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado. (a) Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto.</li>
  <li>Todos los documentos serán presentados por duplicado.</li>
  <li>El Formulario y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.</li>
  <li>La licencia tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      "licencia-e-maaaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A: APROBACIÓN AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA REMODELACIÓN DE VIVIENDA UNIFAMILIAR<br>
        <span style="font-size: 0.5em; color: gray;">(SIN MODIFICACIÓN ESTRUCTURAL, NI CAMBIO DE USO, NI AUMENTO DE ÁREA CONSTRUIDA)
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="3">
  <li>Planos que conforman la documentación técnica en los que se diferencie la edificación existente de las áreas y elementos remodelados.</li>
</ol>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong><br>
<ol start="4">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica. De ser el caso pago según acotación en Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          a) Estacionamiento comercial 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)<br>
          b) Estacionamiento residencial 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel) - Retiro (en zona consolidada de acuerdo al PDU) área sin retiro x arancel.
        </ul>
      </li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong><br>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Todos los documentos serán presentados por duplicado.</li>
  <li>Deben ser visados en todas sus páginas el formulario y sus anexos y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.</li>
  <li>La licencia de edificación tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      "licencia-e-maaaaa": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD A APROBACIÓN AUTOMÁTICA CON FIRMA DE PROF. PARA CONSTRUCCIÓN DE CERCOS,<br>
        <span style="font-size: 0.5em; color: gray;">DE MÁS DE 20 ML
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="3">
  <li>Plano de ubicación y los planos de las especialidades que correspondan y sus respectivas memorias descriptivas.</li>
</ol>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong> 
<ol start="4">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Todos los documentos serán presentados por duplicado.</li>
  <li>Deben ser visados en todas sus páginas el formulario y sus anexos y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.</li>
  <li>La licencia de edificación tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      "licencia-e-b": `
      <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN - MODALIDAD B APROBACIÓN POR EVALUACIÓN DE LA MUNICIPALIDAD PARA EDIFICACIONES PARA FINES DE VIVIENDA,<br>
        <span style="font-size: 0.5em; color: gray;">EDIFICACIONES PARA FINES DE VIVIENDA UNIFAMILIAR, MULTIFAMILIAR, QUINTA O CONDOMINIOS DE VIVIENDA UNIFAMILIAR Y/O MULTIFAMILIAR (NO MAYORES A 5 PISOS SIEMPRE QUE EL PROYECTO TENGA UN MÁXIMO DE 3,000 M2 DE ÁREA CONSTRUIDA)
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica</strong><br>
<strong>En tres (03) juegos originales, de lo siguiente:</strong>
<ol start="3">
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el Artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones del RNE", acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementado con fotos.</li>
  <li>Estudio de Mecánica de Suelos o El Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones del RNE".</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar. La documentación técnica señalada anteriormente, a excepción del Estudio de Mecánica de Suelos, debe ser presentada también en archivo digital. De ser el caso pago según acotación en Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          a) Estacionamiento comercial 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel).<br>
          b) Estacionamiento residencial 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup></strong> de déficit de estacionamiento x arancel).
        </ul>
      </li>
    </ul>
  </li>
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li style="color: darkgoldenrod;">Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Para proyectos multifamiliares, la Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>El administrado puede presentar la documentación técnica, un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (2) juegos originales.</li>
  <li>El Formulario y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>La Póliza CAR o la Póliza de Responsabilidad Civil se entrega el día útil anterior al inicio de la obra y debe tener una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Debe comunicarse el inicio del proceso edificatorio con una antelación de 15 días calendarios, en caso de no haberlo declarado en el FUE.</li>
  <li>La licencia tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      
      "licencia-e-bb": `
        <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN - MODALIDAD B OBRAS DE AMPLIACIÓN O REMODELACIÓN DE UNA EDIFICACIÓN EXISTENTE CON FIN DE
VIVIENDA<br>
        <span style="font-size: 0.5em; color: gray;">(CON MODIFICACIÓN ESTRUCTURAL, AUMENTO DE ÁREA CONSTRUIDA O CAMBIO DE USO, ASÍ COMO LAS DEMOLICIONES
PARCIALES SUJETAS A ESTA MODALIDAD)"
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica, En tres (03) juegos originales:</strong><br>
<ol start="3">
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el Artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones del RNE", acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, adjuntando fotografías.</li>
  <li>Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones del RNE". Deberá presentar archivo digital.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar. De ser el caso pago según acotación en Licencia de Obra:</li>

<ul>  
  <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
  <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:</li>
  <ul>
    a) Estacionamiento comercial: 2.70 m x 5.00 m = 13.50 m² por cada estacionamiento (m² de déficit de estacionamiento x arancel).<br>
    b) Estacionamiento residencial: 2.40 m x 5.00 m = 12.50 m² por cada estacionamiento (m² de déficit de estacionamiento x arancel). Retiro (en zona consolidada de acuerdo al PDU): área sin retiro x arancel.
  </ul>
</ul>
</ol>
<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong><br>
<ol start="8">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li style="color: darkgoldenrod;">Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>La edificación existente debe contar con licencia de construcción, licencia de edificación, declaratoria de fábrica o conformidad de obra y declaratoria de edificación.</li>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Para proyectos multifamiliares, la Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>El administrado puede presentar la documentación técnica, un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (2) juegos originales.</li>
  <li>El Formulario y sus anexos deben ser visados en todas sus páginas y, cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.</li>
  <li>La Póliza CAR o la Póliza de Responsabilidad Civil se entrega el día útil anterior al inicio de la obra y debe tener una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Debe comunicarse el inicio del proceso edificatorio con una antelación de 15 días calendarios, en caso de no haberlo declarado en el FUE.</li>
  <li>La licencia tiene una vigencia de treinta y seis (36) meses.</li>
</ul>
</div>
      `,
      "licencia-e-c": `
        <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN - MODALIDAD C APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA
PARA VIVIENDA MULTIFAMILIAR,<br>
        <span style="font-size: 0.5em; color: gray;">QUINTA O CONDOMINIOS QUE INCLUYAN VIVIENDA MULTIFAMILIAR (DE MÁS DE 5 PISOS Y/OMÁS DE
3,000 M2 DE ÁREA TECHADA)"
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Exhibir recibo de pago efectuado en los colegios profesionales; en las instituciones con funciones específicas; o en las entidades que designan delegados de servicios públicos, por derecho de revisión.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificación Ambiental y el EIV aprobados por las entidades competentes en los casos que se requiera y exhibir comprobante de pago por revisión del proyecto.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
</ol>

<strong>Documentación Técnica:</strong>
<ol start="6">
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el Artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementado con fotos.</li>
  <li>Estudio de Mecánica de Suelos o el Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE. Deberá presentar archivo digital.</li>
</ol>

<strong>De ser el caso, pago según acotación en Licencia de Obra:</strong>
<ul>
  <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso × arancel.</li>
  <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU</li>
  <ul>
    a) Estacionamiento comercial 2.70 m × 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento × arancel)<br>
    b) Estacionamiento residencial 2.40 m × 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento × arancel). Retiro (en zona consolidada de acuerdo al PDU) área sin retiro × arancel.
  </ul>
</ul>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong>
<ol start="10">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>a) Después de haberse notificado el último dictamen Conforme del Proyecto se debe presentar los requisitos 10, 11 y 12.</li>
  <li>b) La documentación se presenta en tres (03) juegos originales, pudiendo presentar el administrado un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (02) juegos originales.</li>
  <li>c) La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>d) Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>e) Para los procedimientos administrativos de otorgamiento de Licencias de Edificación, la Comisión Técnica Distrital, la Comisión Técnica Provincial y la Comisión Técnica Provincial Ad Hoc están conformadas por:
    <ul>
      <li>Un (01) representante de la Municipalidad, quien la preside.</li>
      <li>Un (01) representante del Colegio de Arquitectos del Perú - CAP.</li>
      <li>Un (01) representante del Colegio de Ingenieros del Perú - CIP.</li>
      <li>Un (01) representante por cada entidad prestadora de servicios públicos. (según el numeral 10.3 del Artículo 10º del D.S. N° 029-2019-VIVIENDA).</li>
    </ul>
  </li>
</ul>
</div>
      `,
       "licencia-e-cc": `
         <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN - MODALIDAD C APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA
PARA EDIFICACIONES PARA LOCALES COMERCIALES,<br>
        <span style="font-size: 0.5em; color: gray;">CULTURALES, CENTROS DE DIVERSIÓN Y SALAS DE ESPECTÁCULOS (QUE
INDIVIDUALMENTE O EN CONJUNTO CUENTEN CON UN MÁXIMO DE 30,000 M2 DE ÁREA TECHADA)"
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Exhibir recibo de pago efectuado en los colegios profesionales; en las instituciones con funciones específicas; o en las entidades que designan delegados de servicios públicos, por derecho de revisión.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificación Ambiental y el EIV aprobados por las entidades competentes en los casos que se requiera y exhibir comprobante de pago por revisión del proyecto.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="6">
  <li>Plano de ubicación y localización del lote.</li>
  <li>
    Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad. Planos de Seguridad y Evacuación cuando correspondan.
 
    Los planos de arquitectura deben contener:
    <ul>
      <li>Plano de levantamiento de la edificación existente, que grafique los elementos a eliminar, ampliar y/o remodelar.</li>
      <li>Plano de la edificación resultante.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el Artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, adjuntando fotografías.</li>
  <li>Estudio de Mecánica de Suelos o El Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE.</li>
</ol>

<strong>De ser el caso, pago según acotación en Licencia de Obra:</strong>
<ul>
  <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
  <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
    <ul>
      <li>Estacionamiento comercial: 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel).</li>
      <li>Estacionamiento residencial: 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel). Retiro (en zona consolidada de acuerdo al PDU): área sin retiro x arancel.</li>
    </ul>
  </li>
  
</ul>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong><br>
<ol start="10">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Después de haberse notificado el último dictamen Conforme del Proyecto se debe presentar los requisitos 10, 11 y 12.</li>
  <li>La documentación se presenta en tres (03) juegos originales, pudiendo presentar el administrado, un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (02) juegos originales.</li>
  <li>La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Para los procedimientos administrativos de otorgamiento de Licencias de Edificación Urbana, la Comisión Técnica Distrital, la Comisión Técnica Provincial y la Comisión Técnica Provincial Ad Hoc están conformadas por:
    <ul>
      <li>Un (01) representante de la Municipalidad, quien la preside.</li>
      <li>Un (01) representante del Colegio de Arquitectos del Perú - CAP.</li>
      <li>Un (01) representante del Colegio de Ingenieros del Perú - CIP.</li>
      <li>Un (01) representante por cada entidad prestadora de servicios públicos (según el numeral 10.3 del Artículo 10º del D.S. N° 029-2019- VIVIENDA).</li>
    </ul>
  </li>
</ul>
</div>
      `,
      "licencia-e-ccc": `
         <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN - MODALIDAD C APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA
PARA EDIFICACIONES DE MERCADOS<br>
        <span style="font-size: 0.5em; color: gray;"> (QUE CUENTEN CON UN MÁXIMO DE 15,000 M2 DE ÁREA TECHADA)"
  </span></h2>
  <div style="text-align: justify;">
        <strong>A. VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Exhibir recibo de pago efectuado en los colegios profesionales; en las instituciones con funciones específicas; o en las entidades que designan delegados de servicios públicos, por derecho de revisión.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificación Ambiental y el EIV aprobados por las entidades competentes en los casos que se requiera y exhibir comprobante de pago por revisión del proyecto.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="6">
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad. Planos de Seguridad y Evacuación cuando correspondan.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el Artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, adjuntando fotografías.</li>
  <li>Estudio de Mecánica de Suelos o El Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE. Deberá presentar archivo digital. La documentación técnica señalada anteriormente, a excepción del Estudio de Mecánica de Suelos.</li>
</ol>

<strong>De ser el caso, pago según acotación en Licencia de Obra:</strong>
<ul>
  <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
  <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
    <ul>
      <li>Estacionamiento comercial: 2.70 m x 5.00 m = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel).</li>
      <li>Estacionamiento residencial: 2.40 m x 5.00 m = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel). Retiro (en zona consolidada de acuerdo al PDU): área sin retiro x arancel.</li>
    </ul>
  </li>
</ul>

<strong>B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong><br>
<ol start="10">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Después de haberse notificado el último dictamen Conforme del Proyecto se debe presentar los requisitos 10, 11 y 12.</li>
  <li>La documentación se presenta en tres (03) juegos originales, pudiendo presentar el administrado, un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (02) juegos originales.</li>
  <li>La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>Para los procedimientos administrativos de otorgamiento de Licencias de Edificación, la Comisión Técnica Distrital, la Comisión Técnica Provincial y la Comisión Técnica Provincial Ad Hoc están conformadas por:
    <ul>
      <li>Un (01) representante de la Municipalidad, quien la preside.</li>
      <li>Un (01) representante del Colegio de Arquitectos del Perú - CAP.</li>
      <li>Un (01) representante del Colegio de Ingenieros del Perú - CIP.</li>
      <li>Un (01) representante por cada entidad prestadora de servicios públicos (según el numeral 10.3 del Artículo 10º del D.S. N° 029-2019- VIVIENDA).</li>
    </ul>
  </li>
</ul>
</div>
      `,
      "licencia-e-d": `
        <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN MODALIDAD D APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA
EDIFICACIONES PARA FINES EDUCATIVOS,<br>
        <span style="font-size: 0.5em; color: gray;"> SALUD, HOSPEDAJE, ESTABLECIMIENTOS DE EXPENDIO DE COMBUSTIBLES Y
TERMINALES DE TRANSPORTE" </span></h2>
<div style="text-align: justify;">
<strong> A. VERIFICACIÓN ADMINISTRATIVA </strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Exhibir recibo de pago efectuado en los colegios profesionales; en las instituciones con funciones específicas; o en las entidades que designan delegados de servicios públicos, por derecho de revisión.</li>
  <li style="color: darkgoldenrod;">En el caso que el solicitante no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificación Ambiental y el EIV aprobados por las entidades competentes en los casos que se requiera y exhibir comprobante de pago por revisión del proyecto.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
</ol>

<strong>Documentación Técnica</strong>
<ol start="6">
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad. Planos de Seguridad y Evacuación cuando correspondan.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el artículo 39 de la Norma Técnica E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, adjuntando fotografías.</li>
  <li>Estudio de Mecánica de Suelos o El Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE. Deberá presentar archivo digital.</li>
</ol>
<strong>La documentación técnica señalada anteriormente, a excepción del Estudio de Mecánica de Suelos. De ser el caso, pago según acotación en Licencia de Obra:</strong>

<ul>
  <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
  <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
    <ul>
      a) Estacionamiento comercial 2.70 m. x 5.00 m. = 13.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)<br>
      b) Estacionamiento residencial 2.40 m. x 5.00 m. = 12.50 m<sup>2</sup> por cada estacionamiento (m<sup>2</sup> de déficit de estacionamiento x arancel)
    </ul>
  </li>
</ul>
<strong>  B. VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong>
<ol start="10">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el Responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra, en caso no se haya indicado en el FUE.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
</ol>

<strong>Notas</strong>
<ul>
  <li>La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar con cobertura de daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790 Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Se debe acreditar que el predio cuenta, por lo menos, con el correspondiente proyecto de habilitación urbana aprobado.</li>
  <li>La documentación se presenta en tres (03) juegos originales, pudiendo presentar el administrado, un (01) juego original al inicio del trámite y, aprobado el proyecto, los otros dos (02) juegos originales.</li>
  <li>Para los procedimientos administrativos de otorgamiento de Licencias de Edificación, la Comisión Técnica Distrital, la Comisión Técnica Provincial y la Comisión Técnica Provincial Ad Hoc están conformadas por:
    <ul>
      <li>Un (01) representante de la Municipalidad, quien la preside.</li>
      <li>Un (01) representante del Colegio de Arquitectos del Perú - CAP.</li>
      <li>Un (01) representante del Colegio de Ingenieros del Perú - CIP.</li>
      <li>Un (01) representante por cada entidad prestadora de servicios públicos. (según el numeral 10.3 del Artículo 10º del D.S. N° 029-2019-VIVIENDA).</li>
    </ul>
  </li>
</ul>
</div> 
      `,
      "ant-con": `
         <h2 style="text-align: center;">"ANTEPROYECTO EN CONSULTA<br>
        <span style="font-size: 0.5em; color: gray;"> PARA LAS MODALIDADES B, C y D" </span></h2>
<div style="text-align: justify;">
<ol>
  <li>
    Formulario Único de Edificaciones (FUE), en tres (03) juegos originales,
    debidamente suscritos por el administrado y los profesionales responsables,
    en el que se indica el número de recibo y la fecha de pago del trámite de la
    licencia ante la municipalidad; así como la copia del recibo de pago
    efectuado ante los colegios profesionales, según la modalidad que corresponda.
  </li>
  <li>Plano de ubicación y localización.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones) en escala 1/100.</li>
  <li>
    Planos de seguridad y evacuación amoblados, en las modalidades de aprobación
    C y D, cuando se requiera intervención del delegado Ad hoc del Centro
    Nacional de Estimación, Prevención y Reducción del Riesgo de Desastres
    (CENEPRED).
  </li>
  <li>Declaración jurada de habilidad del profesional que interviene en el proyecto.</li>
  <li>Memoria Descriptiva.</li>
  <li>
    Identificar número de comprobante de pago por derecho de revisión, sólo para
    las modalidades de aprobación B, C y D.
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Presentar documentos por (02 juegos originales).</li>
</ul>
</div> 
      `,
      "licencia-re": `
        <h2 style="text-align: center;">"LICENCIA DE EDIFICACIÓN POR REGULARIZACIÓN, INCLUYE PARA REGULARIZACION DE AMPLIACIONES REMODELACIONES Y
DEMOLICIONES<br>
        <span style="font-size: 0.5em; color: gray;">  (SOLO PARA EDIFICACIONES CONSTRUIDAS SIN LICENCIA O QUE NO TENGAN CONFORMIDAD DE OBRA Y QUE HAYAN
SIDO EJECUTADAS DESPUÉS DEL 20 DE JULIO DE 1999 HASTA EL 27 DE SETIEMBRE DEL 2017)"</span></h2>
<div style="text-align: justify;">
        <ol>
  <li>Formulario Único de Edificación - FUE, por triplicado y debidamente suscritos.</li>
  <li style="color: darkgoldenrod;">Cuando no sea el propietario del predio, copia del documento que acredite que cuenta con derecho a edificar.</li>
  <li style="color: darkgoldenrod;">
    En caso el administrado sea una persona jurídica, declaración jurada del representante legal;
    señalando que cuenta con representación vigente, consignando datos de la Partida Registral y
    el asiento en el que conste inscrita la misma.
  </li>
  <li>
    Documentación técnica firmada por el profesional constatador, compuesta por:
    <ul>
      <li>Planos de Ubicación y Localización, según formato.</li>
      <li>Planos de Arquitectura (planta, cortes y elevaciones).</li>
      <li>Memoria Descriptiva.</li>
    </ul>
  </li>
  <li>Documento que acredite la fecha de ejecución de la obra.</li>
  <li>Carta de Seguridad de Obra, debidamente sellada y firmada por un ingeniero civil colegiado.</li>
  <li>Declaración Jurada del profesional constatador, señalando estar hábil para el ejercicio de la profesión.</li>
  <li>
    Para regularización de remodelaciones, ampliaciones o demoliciones, copia del documento que acredite la
    declaratoria de fábrica o de edificación, con sus respectivos planos en caso no haya sido expedido por la
    Municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra
    o de Edificación de la construcción existente que no es materia de regularización.
  </li>
  <li style="color: darkgoldenrod;">
    En caso de demoliciones totales o parciales de edificaciones cuya fábrica se encuentra inscrita en el Registro de
    Predios, se acredita que sobre el bien no recaigan cargas y/o gravámenes; en su defecto, presentar la autorización
    del titular de la carga o gravamen.
  </li>
  <li>
    Indicar el número del comprobante de pago de la multa por construir sin licencia. El valor de la multa es
    equivalente al 10% del valor de la obra a regularizar tomando como base el costo a la fecha de construcción
    actualizado por el índice de precios al consumidor.
  </li>
  <li style="color: darkgoldenrod;">En caso de demolición debe acreditarse que en el bien no recaiga cargas o gravámenes.</li>
</ol>
</div> 
      `,
      "rev-li-ur": `
        <h2 style="text-align: center;">"REVALIDACIÓN DE LICENCIA DE EDIFICACIÓN O DE HABILITACIÓN URBANA"<br></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Anexo H del FUE o del FUHU según corresponda, debidamente suscrito.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
</div> 
      `,
      "cert-al-vi": `
        <h2 style="text-align: center;">"CERTIFICADO DE ALINEAMIENTO VIAL EN VIAS URBANAS CONSOLIDADAS"<br></h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibir DNI del propietario.</li>
  <li>
    Plano de ubicación y localización con coordenadas UTM, firmado por el profesional responsable.
    (Arquitecto o Ingeniero Civil habilitado).
  </li>
  <li>
    Plano de afectación de Vía, Plano de Levantamiento topográfico y plano catastral de la vía a alinearse
    con coordenadas UTM, firmado por profesional responsable.
  </li>
  <li>Copia del documento que acredita la propiedad.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>

<p><strong>Notas:</strong></p>
<ul>
  <li>El alineamiento debe de realizarse sobre el plan de catastro.</li>
  <li>Los planos tendrán que ser presentados en el sistema de coordenadas UTM - WGS84.</li>
  <li>Deberá anexar la documentación técnica en archivo digital.</li>
</ul>
</div>
      `,
      "cert-al-vii": `
        <h2 style="text-align: center;">"CERTIFICADO DE ALINEAMIENTO VIAL EN PROCESO DE CONSOLIDACIÓN"</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibir DNI del propietario.</li>
  <li>Plano de ubicación y localización con coordenadas UTM, firmado por el profesional responsable (Arquitecto o Ingeniero Civil habilitado).</li>
  <li>Planos de: Trazo de vía, Levantamiento topográfico y plano catastral de la vía a alinearse con coordenadas UTM, firmado por profesional responsable.</li>
  <li>Copia del documento que acredita la propiedad</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Los planos tendrán que ser presentados en el sistema de coordenadas UTM - WGS84.</li>
  <li>Deberá anexar la documentación técnica en archivo digital.</li>
</ol>
</div>
      `,
      "cert-al-viii": `
        <h2 style="text-align: center;">"CERTIFICADO DE SECCIÓN VIAL"</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Identificar número de DNI del solicitante.</li>
  <li>
    Plano de Ubicación y Localización indicando el tramo solicitado y plano de sección de vía existente,
    firmado por el profesional responsable habilitado, señalando la Resolución que aprobó la Habilitación Urbana
    de la vía, en caso corresponda.
  </li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
</div>
      `,
      "cert-al-viiii": `
        <h2 style="text-align: center;">"CERTIFICADO DE NOMENCLATURA DE VÍA"</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Plano de ubicación y localización simple.</li>
  <li>Copia del título de propiedad y/o documento correspondiente.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
        </div>  
      `,
      "cert-al-viiiii": `
        <h2 style="text-align: center;">"CERTIFICADO DE COMPATIBILIDAD DE USOS"</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Plano de ubicación y localización simple con coordenadas UTM referido a elementos existentes (consignar cuadro de datos técnicos) escala 1/500 o escala conveniente.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
<strong>Notas:</strong>
<ul>
  <li>Los planos tendrán que ser presentados en el sistema de coordenadas UTM - WGS84.</li>
  <li>Deberá anexar la documentación técnica en archivo digital.</li>
</ul>
        </div>  
      `,
      "certi-cat": `
        <h2 style="text-align: center;">CERTIFICADO NEGATIVO DE CATASTRO</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Plano de Ubicación y Localización (en original) firmado por el profesional responsable. (Arquitecto o Ingeniero Civil habilitado).</li>
  <li>Exhibición DNI del solicitante.</li>
  <li>Copia simple de documento de propiedad.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
        </div>  
      `,
      "certi-as": `
        <h2 style="text-align: center;">"ASIGNACIÓN Y CERTIFICADO DE NUMERACIÓN DE FINCA"</h2>
        <div style="text-align: justify;">
        <strong>Requerimientos de asignación de numeración de finca</strong>
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibición del DNI del propietario.</li>
  <li>Copia simple del documento que acredite el derecho de propiedad.</li>
  <li>
    Plano de ubicación y localización debidamente firmado por el profesional responsable.
    (Indicar distancia de esquina más cercana al lote).
  </li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>

<strong>Notas:</strong>
<ul>
  <li>Con el proyecto aprobado de Licencia de Edificación de oficio se acota los derechos municipales de trámite.</li>
  <li>
    Para otorgarse la asignación de numeración de finca, el predio deberá estar construido o cercado permanentemente y contar
    con puerta para asignar el número; caso contrario se obtendrá con los trámites de licencia de edificación, licencia de muro
    y apertura de puerta. No se otorgará asignación de numeración de finca a terrenos sin construir.
  </li>
</ul>
<strong>Requerimientos de certificado de numeración de finca</strong>
<ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibición del DNI del propietario.</li>
  <li>Copia de la Constancia de Asignación de Numeración de Finca y/o fotografía de placa numérica otorgada por la M.D.T.</li>
  <li>Copia simple del documento que acredite el derecho de propiedad.</li>
  <li>Pago de la Tasa Administrativa, por cada número.</li>
</ol>
        </div>  
      `,
      "certi-pos": `
        <h2 style="text-align: center;">CONSTANCIA MUNICIPAL DE POSESIÓN</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibición de DNI.</li>
  <li>Plano simple de ubicación del predio.</li>
  <li>Acta de verificación de posesión efectiva del predio emitida por un funcionario de la municipalidad distrital correspondiente y suscrita por todos los colindantes del predio o acta policial de posesión suscrita por todos los colindantes de dicho predio.</li>
</ol>
<ul>
  <strong>Notas:</strong>
  <li>El acta de verificación emitida por un funcionario de la municipalidad distrital se efectuará al momento de realizar la inspección técnica.</li>
</ul>
        </div> 
      `,
      "vis-pla": `
        <h2>VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</h2>
        <div style="text-align: justify;">
        <strong>Para Fines de rectificación de áreas y Para Fines de Saneamiento Físico Legal</strong>
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente, especificando la finalidad de la visación.</li>
  <li>Identificar DNI del solicitante.</li>
  <li>Copia del documento que acredite el derecho de propiedad.</li>
  <li>Memoria descriptiva firmada por Arquitecto o Ingeniero Civil habilitado, dos juegos en original, especificando la finalidad u objetivo de la visación.</li>
  <li>Plano de Localización y Ubicación - Plano Perimétrico (Acorde al Formato Ley N° 29090). Dos juegos en original (especificando la finalidad u objetivo de la visación).</li>
  <li>Certificado de búsqueda catastral.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
      </div>
      `,
      "certi-pla-ur": `
        <h2 style="text-align: center;">CERTIFICADO DE PARAMETROS URBANÍSTICOS Y EDIFICATORIOS</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibición del DNI del propietario.</li>
  <li>Plano de ubicación y localización firmado por profesional habilitado.</li>
  <li>Copia simple del documento que acredite propiedad, adjuntando declaración jurada del administrado acerca de su autenticidad.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
<ul>
  <strong>Notas:</strong><BR>
  <li>Tiene una vigencia de 36 meses.</li>
</ul>
        </div> 
      `,
      "ocp-via": `
        <h2 style="text-align: center;">OCUPACIÓN DE VÍAS</h2>
        <div style="text-align: justify;">
        <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Exhibición del DNI del propietario.</li>
  <li>Documentos sustentatorios que justifiquen el área a ocupar y el tiempo.</li>
  <li>Croquis de ubicación y localización de la ocupación de vías.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
<p><strong>Notas:</strong></p>
<ul>
  <li>Adjuntar copia simple de Licencia de Edificación y/o dictamen de comisión.</li>
  <li>Para fines de edificación u otros, con material, maquinaria, etc., cerco provisional de seguridad (en 25% de vereda) según corresponda.</li>
  <li>Se debe presentar con 3 días hábiles de anticipación.</li>
</ul>

        </div> 
      `,
      "aut-r-pis": `
        <h2 style="text-align: center;">"AUTORIZACIÓN DE ROTURA DE PISTAS Y/O VEREDAS<br>
        <span style="font-size: 0.5em; color: gray;"> PARA INSTALACIÓN DOMICILIARIA DE AGUA Y DESAGÜE EN ÁREA DE USO
PUBLICO"</span></h2>
        <div style="text-align: justify;">
    <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente.</li>
  <li>Identificar DNI del solicitante.</li>
  <li>Croquis simple de ubicación del predio.</li>
  <li>Declaración jurada notarial de compromiso de reposición de la infraestructura existente.</li>
  <li>Documento de la empresa prestadora del servicio donde se indique las características de las obras a ejecutar.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
<p><strong>Notas:</strong></p>
<ul>
  <li>Para pavimento rígido o flexible: 07 años mínimo de haber sido ejecutada la obra (Art. 40° de la Ley 30225 Ley de Contrataciones del Estado), salvo casos excepcionales de acuerdo a Ley.</li>
</ul>

        </div> 
      `,
      "aut-r-pis-ob": `
        <h2 style="text-align: center;">"AUTORIZACIÓN DE ROTURA DE PISTAS Y/O VEREDAS<br>
        <span style="font-size: 0.5em; color: gray;"> PARA OBRAS COMPLEMENTARIAS"</span></h2>
        <div style="text-align: justify;">
   <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico, correo electrónico del recurrente, especificando la finalidad de la visación.</li>
  <li>Identificar DNI del solicitante.</li>
  <li>Plano y memoria descriptiva del proyecto.</li>
  <li>Declaración jurada notarial de compromiso de reposición de la infraestructura existente.</li>
  <li>Cronograma de obra indicando fecha de inicio y culminación de obra.</li>
  <li>Pago de la Tasa Administrativa.</li>
</ol>
<p><strong>Notas:</strong></p>
<ul>
  <li>Para pavimento rígido o flexible: 07 años mínimo de haber sido ejecutada la obra (Art. 40° de la Ley 30225 Ley de Contrataciones del Estado), salvo casos excepcionales de acuerdo a Ley.</li>
</ul>


        </div> 
      `,
      "op-tip-tr": `
        <h2 style="text-align: center;">"OPOSICION A CUALQUIER TIPO DE TRAMITE<br>
        <span style="font-size: 0.5em; color: gray;"> PARA OBRAS COMPLEMENTARIAS"</span></h2>
        <div style="text-align: justify;">
   <ol>
  <li>Solicitud dirigida al Alcalde, con datos generales, número telefónico y correo electrónico del recurrente.</li>
  <li>Adjuntar prueba instrumental formal y legal.</li>
  <li>Identificar DNI del peticionario.</li>
  <li>Pago de la Tasa Administrativa.</li>
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
