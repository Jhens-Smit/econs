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
        <li><a class="dropdown-item content-link" href="#" data-target="sub-ur">SUBDIVISION DE LOTE URBANO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="re-ha-ej">REGULARIZACIÓN DE HABILITACIONES URBANAS EJECUTADAS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="lic-a">LICENCIA DE HABILITACIÓN URBANA MODALIDAD A</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="lic-b">LICENCIA DE HABILITACIÓN URBANA MODALIDAD B</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="lic-c">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">LICENCIA DE HABILITACIÓN URBANA - POR LA COMISIÓN TÉCNICA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="lic-d">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;">LICENCIA DE HABILITACIÓN URBANA - POR LA COMISIÓN TÉCNICA</span></a></li>
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
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-bb">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">OBRAS DE AMPLIACIÓN O REMODELACIÓN DE UNA EDIFICACIÓN EXISTENTE CON MODIFICACIÓN ESTRUCTURAL</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-c">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA VIVIENDA MULTIFAMILIAR,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-cc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES DE USO MIXTO CON VIVIENDA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ccc">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES PARA LOCALES COMERCIALES,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-d">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN CON EVALUACIÓN PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA PARA EDIFICACIONES PARA LOCALES COMERCIALES,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="lic-ed-vi-re">LICENCIA DE EDIFICACIÓN EN VIAS DE REGULARIZACIÓN</a></li>
      </ul>
    </div>

    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="certi-terreno">CERT. DE POSESIÓN DE TERRENO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="vis-pla">VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-fin">CERT. DE NUMERACIÓN DE FINCA Y PLACA NUMÉRICA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-neg">CERT. NEGATIVO DE CATASTRO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="certi-pa-ur">CERT. DE PARÁMETROS URBANÍSTICOS</a></li>
      </ul>
    </div>

    <!-- Botón 4 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Planeamiento Urbano
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="cert-al-vi">CERT. DE ALINEAMIENTO DE VIAS</a></li>
                <li><a class="dropdown-item content-link" href="#" data-target="cert-comp">CERTIFICADO DE COMPATIBILIDAD DE USO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cert-zo-vi">CERT. DE ZONIFICACIÓN Y VIAS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="aut-oc-vi">AUTORIZACIÓN PARA OCUPACIÓN DE VIA</a></li>
      </ul>
    </div>

    <!-- Nueva Sección -->
     <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Otros
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="in-par-te">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="cer-ha">CERT. DE HABITABILIDAD</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="aut-rot">AUTORI. PARA ROTURA DE PISTAS Y VEREDAS</a></li>
      </ul>
    </div>

    <!-- Nueva Sección -->
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
      `,
      "licencia-e-ma": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION MODALIDAD A: APROBACION AUTOMATICA CON FIRMA DE PROFESIONALES<br>
        <span style="font-size: 0.5em; color: gray;">(CONSTRUCCIÓN DE UNA
VIVIENDA UNIFAMILIAR DE HASTA 120 M2 CONSTRUIDOS, SIEMPRE QUE CONSTITUYA LA ÚNICA EDIFICACIÓN EN EL LOTE)
  </span></h2>
  <div style="text-align: justify;">
       <ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración jurada, consignando el número de partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>
<p><strong>* Documentación Técnica 3 juegos y archivo digital, compuesta por:</strong></p>
<ol start="4">
  <li>Plano de ubicación.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), de Estructuras, de Instalaciones Sanitarias y de Instalaciones Eléctricas. Solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</li>
  <li>Planos de distribución de la edificación existente</li>
  <li>Plano de cerramiento del predio</li>
  <li>Carta de seguridad de obra</li>
  <li>Memoria descriptiva del proceso de demolición firmada por ingeniero civil</li>
</ol>
<p><strong>Notas:</strong></p>
<ol>
  <li>El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>El administrado puede optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva</li>
  <li>El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>
<p><strong>* No están consideradas en esta modalidad:</strong></p>
<ol start="6">
  <li>Las obras de edificación en bienes inmuebles integrantes del Patrimonio Cultural de la Nación y su área de influencia, declarados por el Ministerio de Cultura e incluidos en el inventario que debe remitir el citado Ministerio, de acuerdo a lo establecido en el 2do párrafo literal f) del numeral 2 del artículo 3 de la Ley.</li>
  <li>Las obras que requieran la ejecución de sótanos o semisótanos, o una profundidad de excavación mayor a 1.50 m y colinden con edificaciones existentes. En dicho caso debe tramitarse la licencia de edificación bajo la modalidad B.</li>
</ol>
</div>
      `,
      "licencia-e-maa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD A : APROBACION AUTOMATICA CON FIRMA DE PROFESIONALES<br>
        <span style="font-size: 0.5em; color: gray;"> (AMPLIACIÓN DE UNA
VIVIENDA UNIFAMILIAR, CUYA EDIFICACIÓN ORIGINAL CUENTE CON LICENCIA DE CONSTRUCCIÓN, DECLARATORIA DE FÁBRICA Y/O
DE EDIFICACIÓN SIN CARGA, Y LA SUMATORIA DEL ÁREA TECHADA DE AMBAS NO SUPERE LOS 200 m2)
  </span></h2>
  <div style="text-align: justify;">
       <ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Copia del documento que acredita la declaratoria de fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del certificado de conformidad o finalización de obra, o la licencia de obra o de edificación de la construcción existente.</li>
</ol>
<p><strong>* Documentación Técnica 3 juegos y archivo digital, compuesta por:</strong></p>
<ol start="5">
  <li>Plano de ubicación.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), de Estructuras, de Instalaciones Sanitarias y de Instalaciones Eléctricas, donde se diferencien las áreas existentes de las ampliadas</li>
</ol>
<p><strong>Notas:</strong></p>
<ol>
  <li>El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>
</div>
      `,
      "licencia-e-maaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD A : APROBACION AUTOMATICA CON FIRMA DE PROFESIONALES<br>
        <span style="font-size: 0.5em; color: gray;">  (LAS AMPLIACIONES Y
REMODELACIONES CONSIDERADAS OBRAS MENORES SEGÚN LO ESTABLECIDO EN LA NORMA TÉCNICA G.040 DEL RNE)
  </span></h2>
  <div style="text-align: justify;">
      <ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Copia del documento que acredita la declaratoria de fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del certificado de conformidad o finalización de obra, o la licencia de obra o de edificación de la construcción existente.</li>
</ol>
<p><strong>* Documentación Técnica 3 juegos y archivo digital, compuesta por:</strong></p>
<ol start="5">
  <li>Plano de ubicación.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), de Estructuras, de Instalaciones Sanitarias y de Instalaciones Eléctricas, donde se diferencien las áreas existentes de las ampliadas y remodeladas</li>
</ol>
<p><strong>Notas:</strong></p>
<ol>
  <li>El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>
</div>
      `,
      "licencia-e-maaaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD A : APROBACION AUTOMATICA CON FIRMA DE PROFESIONALES<br>
        <span style="font-size: 0.5em; color: gray;">(REMODELACIÓN DE UNA
VIVIENDA UNIFAMILIAR, SIN MODIFICACIÓN ESTRUCTURAL, NI CAMBIO DE USO Y/O INCREMENTO DE ÁREA TECHADA)
  </span></h2>
  <div style="text-align: justify;">
      <ol style="list-style-type:none; padding-left:0;">
  <li>1.- FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>2. Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">3. En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>4. Copia del documento que acredita la declaratoria de fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del certificado de conformidad o finalización de obra, o la licencia de obra o de edificación de la construcción existente.</li>
</ol>
<p><strong>* Documentación Técnica 3 juegos y archivo digital, compuesta por:</strong></p>
<ol start="5" style="list-style-type:none; padding-left:0;">
  <li>5. Plano de ubicación.</li>
  <li>6. Planos de Arquitectura (plantas, cortes y elevaciones) de Estructuras, de Instalaciones Sanitarias y de Instalaciones Eléctricas, donde se diferencie la edificación existente de las áreas y elementos remodelados.</li>
</ol>
<p><strong>Notas:</strong></p>
<ol style="list-style-type:none; padding-left:0;">
  <li>1.- El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>2. El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>3. Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>4. El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>
</div>
      `,
      "licencia-e-maaaaa": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD A : APROBACION AUTOMATICA CON FIRMA DE PROFESIONALES<br>
        <span style="font-size: 0.5em; color: gray;"> (CONSTRUCCIÓN DE
CERCOS DE MAS DE 20 M. DE LONGITUD, SIEMPRE QUE EL INMUEBLE NO SE ENCUENTRE BAJO EL RÉGIMEN DE UNIDADES
INMOBILIARIAS DE PROPIEDAD EXCLUSIVA Y DE PROPIEDAD COMÚN)
  </span></h2>
  <div style="text-align: justify;">
      <ol style="list-style-type:none; padding-left:0;">
  <li>1.- FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>2. Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">3. En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<p><strong>* Documentación Técnica 3 juegos y archivo digital, compuesta por:</strong></p>

<ol start="4" style="list-style-type:none; padding-left:0;">
  <li>4. Plano de ubicación.</li>
  <li>5. Planos de las especialidades que correspondan y sus respectivas memorias descriptivas.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol style="list-style-type:none; padding-left:0;">
  <li>1.- El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>2. El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>3. Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>4. El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>
</div>
      `,
      "licencia-e-b": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD B : APROBACION DE PROYECTO CON EVALUACION POR LA MUNICIPALIDAD<br>
        <span style="font-size: 0.5em; color: gray;">(Edificaciones
para fines de vivienda unifamiliar , multifamiliar o condominios de vivienda unifamiliar y/o multifamiliar no mayores a 5 pisos , siempre que el
proyecto tenga un máximo de 3,000 M2 de área construida)
  </span></h2>
  <div style="text-align: justify;">
     <ol style="list-style-type:none; padding-left:0;">
  <li>1.- FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>2. Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">3. En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>4. Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>5. Para proyectos multifamiliares o condominios, la Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
</ol>

<p><strong>* Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>

<ol start="6" style="list-style-type:none; padding-left:0;">
  <li>6. Plano de ubicación y localización del lote.</li>
  <li>7. Planos de arquitectura (planta, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.</li>
  <li style="color: darkgoldenrod;">8. De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el artículo 39 de la Norma Técnica E.050, “Suelos y Cimentaciones” del RNE acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.</li>
  <li>9. Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 del RNE. </li><br>
  <p><strong>* Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</strong></p>
  <li>10. Planos de distribución de la edificación existente.</li>
  <li>11. Plano de cerramiento del predio.</li>
  <li>12. Carta de seguridad de obra.</li>
  <li>13. Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol style="list-style-type:none; padding-left:0;">
  <li>1.- El FUE y la Documentación Técnica se presentan en tres (03) juegos originales</li>
  <li>2. El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen</li>
  <li>3. Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado</li>
  <li>4. El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>

</div>
      `,
      "licencia-e-bb": `
        <h2 style="text-align: center;">"LICENCIA DE EDIFICACION MODALIDAD B : APROBACION DE PROYECTO CON EVALUACION POR LA MUNICIPALIDAD<br>
        <span style="font-size: 0.5em; color: gray;">( Obras de
ampliación o remodelación de una edificación existente con modificación estructural , aumento de área techada o cambio de uso)
  </span></h2>
  <div style="text-align: justify;">
 <ol style="list-style-type:none; padding-left:0;">
  <li>1.- FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>2. Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">3. En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>4. Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>5. Copia del documento que acredite la declaratoria fábrica o de hábiles edificaciones con sus respectivos planos en caso no haya sido expedida por la municipalidad; en su defecto, copia del Certificado de Finalización de Obra o de Conformidad de Obra y Declaratoria de Edificación o, la Licencia de Obra o de Edificación de la construcción existente.</li>
  <li style="color: darkgoldenrod;">6. Para los casos de demoliciones parciales, cuya edificación no pueda acreditarse con la autorización respectiva, el plano de ubicación y localización, así como el plano de planta de la edificación a demoler, diferenciando en el caso de demolición parcial, las áreas a demoler de las remanentes.</li>
  <li style="color: darkgoldenrod;">7. En caso de demoliciones parciales cuya declaratoria de fábrica o de edificación se encuentra inscrita en el Registro de Predios, declaración jurada por parte del administrado, señalando que sobre el bien no recaen cargas y/o gravámenes, en su defecto, acreditar la autorización del titular de la carga o gravamen.</li>
  <li>8. La Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley N° 26790, Ley de Modernización de la Seguridad social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li style="color: darkgoldenrod;">9. En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común se adjunta copia del Reglamento Interno, el plano de independización correspondiente a la unidad inmobiliaria y la autorización de la Junta de Propietarios, siempre que se encuentre inscrita en el Registro de Predios.</li>
</ol>

<p><strong>* Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>

<ol start="10" style="list-style-type:none; padding-left:0;">
  <li>10. Plano de ubicación y localización del lote.</li>
  <li>11. Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados el propietario, adjuntando las memorias descriptivas por especialidad, donde se diferencien la edificación proyectada de la edificación existente, la cual debe contar con licencia de construcción, licencia de edificación, declaratoria de fábrica o conformidad de obra y declaratoria de edificación.</li>
  <li style="color: darkgoldenrod;">12. De ser el caso, Plano de sostenimiento de excavaciones de acuerdo con lo establecido en el artículo 33 de la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.</li>
  <li>13. Estudio de Mecánica de Suelos o Informe Técnico de Suelos, según los casos que establece la Norma Técnica E.050 "Suelos y Cimentaciones" del RNE.</li>
  <li style="color: darkgoldenrod;">14. En caso de demoliciones parciales, memoria descriptiva de los trabajos a realizar y del proceso de demolición a utilizar, donde se consideren las medidas de seguridad contempladas en Norma Técnica G.050 del RNE y demás normas de la materia.</li>
  <li style="color: darkgoldenrod;">15. En caso de demoliciones parciales, carta de seguridad de obra firmada por un ingeniero civil.</li>
</ol>

<p><strong>* Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>

<ol start="5" style="list-style-type:none; padding-left:0;">
  <li>5. Plano de ubicación y localización del lote.</li>
  <li>6. Planos de arquitectura (planta, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.</li>
  <li style="color: darkgoldenrod;">7. De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el artículo 39 de la Norma Técnica E.050, “Suelos y Cimentaciones” del RNE acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.</li>
  <li>8. Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050 del RNE.</li>
</ol>

<p><strong>*Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</strong></p>

<ol style="list-style-type:none; padding-left:0;">
  <li>9. Planos de distribución de la edificación existente.</li>
  <li>10. Plano de cerramiento del predio.</li>
  <li>11. Carta de seguridad de obra.</li>
  <li>12. Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
</ol>

<p><strong>Notas:</strong></p>

<ol style="list-style-type:none; padding-left:0;">
  <li>1.- El administrado puede presentar en el expediente solo un juego del FUE y la Documentación Técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto en todas sus especialidades.</li>
  <li>2. El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>3. Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado.</li>
  <li>4. El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>


</div>
      `,
      "licencia-e-c": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODELIDAD C APROBACION DE PROYECTOS CON EVALUACION PREVIA POR LA COMISION TECNICA<br>
        <span style="font-size: 0.5em; color: gray;">(EDIFICACIONES PARA FINES DE VIVIENDA MULTIFAMILIAR QUINTA O CONDOMINIOS QUE INCLUYAN VIVIENDA MULTIFAMILIAR DE MÁS
DE CINCO (05) PISOS O 3,000 m2 DE ÁREA TECHADA)
  </span></h2>
  <div style="text-align: justify;">
<ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley N° 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Certificación Ambiental aprobado por la entidad correspondiente cuando corresponda.</li>
  <li>Estudio de Impacto Vial aprobado, únicamente en los casos que el RNE lo establezca.</li>
  <li>Copia simple del comprobante de pago por revisión del proyecto.</li>
</ol>

<p><strong>Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>
<ol start="9">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 33 de la Norma E.050 “Suelos y Cimentaciones” del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos complementando con fotos.</li>
  <li>Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder según los casos que establece la Norma Técnica E.050 “Suelos y Cimentaciones” del RNE.</li>
</ol>

<p><strong>Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</strong></p>
<ol start="14">
  <li>Planos de distribución de la edificación existente.</li>
  <li>Plano de cerramiento del predio.</li>
  <li>Carta de seguridad de obra.</li>
  <li>Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
</ol>

<p><strong>En caso se solicite Licencia de Edificación para Remodelación o Ampliación o Demolición parcial para este uso, los requisitos antes señalados se presentan de la siguiente manera:</strong></p>
<ol start="18">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
</ol>

<p>Los cuales se presentan de la siguiente manera:</p>
<ul>
  <li><strong>a) Los planos de arquitectura deben contener:</strong>
    <ul>
      <li>Plano de levantamiento de la edificación existente, que grafique los elementos a eliminar, ampliar y/o remodelar.</li>
      <li>Plano de la edificación resultante.</li>
    </ul>
  </li>
  <li><strong>b) Los planos de estructuras deben diferenciar</strong> los elementos estructurales, los elementos que se van a eliminar y los elementos nuevos, detallando adecuadamente los empalmes.</li>
  <li><strong>c) Los planos de instalaciones deben:</strong>
    <ul>
      <li>Diferenciar claramente las instalaciones que se van a incorporar y las que se eliminan, detallando adecuadamente los empalmes.</li>
      <li>Evaluar la factibilidad de servicios teniendo en cuenta la ampliación de cargas de electricidad y de dotación de agua potable.</li>
    </ul>
  </li>
</ul>

<ol start="20">
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras, Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li>Copia del documento que acredite la declaratoria fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente.</li>
  <li>Para los casos de demoliciones parciales, cuya edificación no pueda acreditarse con la autorización respectiva, el plano de ubicación y localización así como el plano de planta de la edificación a demoler, diferenciando en el caso de demolición parcial, las áreas a demoler de las remanentes.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones parciales cuya declaratoria de fábrica o de edificación se encuentra inscrita en el Registro de Predios, declaración jurada por parte del administrado, señalando que sobre el bien no recaen cargas y/o gravámenes, en su defecto, acreditar la autorización del titular de la carga o gravamen.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común se adjunta copia del Reglamento Interno, el plano de independización correspondiente a la unidad inmobiliaria y la autorización de la Junta de Propietarios, siempre que se encuentre inscrita en el Registro de Predios.</li>
  <li>Memoria descriptiva de los trabajos a realizar y del procedimiento de demolición a utilizar, donde se consideren las medidas de seguridad contempladas en la Norma Técnica G.050 “Seguridad durante la Construcción” del RNE y demás normas de la materia.</li>
  <li>Carta de Seguridad de Obra, firmada por ingeniero civil.</li>
</ol>
</div>
      `,
      "licencia-e-cc": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD C APROBACION DE PROYECTOS CON EVALUACION PREVIA POR LA COMISION TECNICA<br>
        <span style="font-size: 0.5em; color: gray;">(EDIFICACIONES DE USO MIXTO CON VIVIENDA)
  </span></h2>
  <div style="text-align: justify;">
<ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración Jurada, consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley N° 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igualo mayor a la duración del proceso edificatorio.</li>
  <li>Certificación Ambiental aprobado por la entidad correspondiente cuando corresponda.</li>
  <li>Estudio de Impacto Vial aprobado, únicamente en los casos que el RNE lo establezca.</li>
  <li>Copia simple del comprobante de pago por revisión del proyecto.</li>
</ol>

<p><strong>Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>

<ol start="9">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 33 de la Norma E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos complementando con fotos.</li>
  <li>Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponde según los casos que establece la Norma Técnica E.050 Suelos y Cimentaciones del RNE.</li>
</ol>

<p>Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</p>

<ol start="14">
  <li>Planos de distribución de la edificación existente.</li>
  <li>Plano de cerramiento del predio.</li>
  <li>Carta de seguridad de obra.</li>
  <li>Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
</ol>

<p><strong>En caso se solicite Licencia de Edificación para Remodelación o Ampliación o Demolición parcial para este uso, los requisitos antes señalados se presentan de la siguiente manera:</strong></p>

<ol start="18">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
</ol>

<p>Los cuales se presentan de la siguiente manera:</p>
<ul>
  <li><strong>a)</strong> Los planos de arquitectura deben contener:
    <ul>
      <li>Plano de levantamiento de la edificación existente, que grafique los elementos a eliminar, ampliar y/o remodelar.</li>
      <li>Plano de la edificación resultante.</li>
    </ul>
  </li>
  <li><strong>b)</strong> Los planos de estructuras deben diferenciar los elementos estructurales, los elementos que se van a eliminar y los elementos nuevos, detallando adecuadamente los empalmes.</li>
  <li><strong>c)</strong> Los planos de instalaciones deben:
    <ul>
      <li>Diferenciar claramente las instalaciones que se van a incorporar y las que se eliminan, detallando adecuadamente los empalmes.</li>
      <li>Evaluar la factibilidad de servicios teniendo en cuenta la ampliación de cargas de electricidad y de dotación de agua potable.</li>
    </ul>
  </li>
</ul>

<ol start="20">
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras, Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li>Copia del documento que acredite la declaratoria fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente.</li>
  <li>Para los casos de demoliciones parciales, cuya edificación no pueda acreditarse con la autorización respectiva, el plano de ubicación y localización así como el plano de planta de la edificación a demoler, diferenciando en el caso de demolición parcial, las áreas a demoler de las remanentes.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones parciales cuya declaratoria de fábrica o de edificación se encuentra inscrita en el Registro de Predios, declaración jurada por parte del administrado, señalando que sobre el bien no recaen cargas y/o gravámenes, en su defecto, acreditar la autorización del titular de la carga o gravamen.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común se adjunta copia del Reglamento Interno, el plano de independización correspondiente a la unidad inmobiliaria y la autorización de la Junta de Propietarios, siempre que se encuentre inscrita en el Registro de Predios.</li>
  <li>Memoria descriptiva de los trabajos a realizar y del procedimiento de demolición a utilizar, donde se consideren las medidas de seguridad contempladas en la Norma Técnica G.050 "Seguridad durante la Construcción" del RNE y demás normas de la materia.</li>
  <li>Carta de Seguridad de Obra, firmada por ingeniero civil.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El administrado puede presentar en el expediente solo un juego del FUE y la Documentación Técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto en todas sus especialidades.</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
</ol>
</div>
      `,
      "licencia-e-ccc": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD C APROBACION DE PROYECTOS CON EVALUACION PREVIA POR LA COMISION TECNICA<br>
        <span style="font-size: 0.5em; color: gray;">(
EDIFICACIONES PARA LOCALES COMERCIALES, CULTURALES, CENTROS DE DIVERSIÓN Y SALAS DE ESPECTÁCULOS QUE
INDIVIDUALMENTE O EN CONJUNTO CUENTEN CON UN MÁXIMO DE 30,000 m2 DE ÁREA)
  </span></h2>
  <div style="text-align: justify;">
<ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley N° 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igualo mayor a la duración del proceso edificatorio.</li>
  <li>Certificación Ambiental aprobado por la entidad correspondiente cuando corresponda.</li>
  <li>Estudio de Impacto Vial aprobado, únicamente en los casos que el RNE lo establezca.</li>
  <li>Copia simple del comprobante de pago por revisión del proyecto.</li>
</ol>

<p><strong>Documentación Técnica, en tres (03) juegos originales y a excepción del Estudio de Mecánica de suelos en archivo digital, compuesta por:</strong></p>

<ol start="8">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li style="color: darkgoldenrod;">De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 33 de la Norma E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos complementando con fotos.</li>
  <li>Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponde según los casos que establece la Norma Técnica E.050 Suelos y Cimentaciones del RNE.</li>
</ol>

<p>Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia, se presenta también:</p>

<ol start="13">
  <li>Planos de distribución de la edificación existente.</li>
  <li>Plano de cerramiento del predio.</li>
  <li>Carta de seguridad de obra.</li>
  <li>Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
</ol>

<p><strong>En caso se solicite Licencia de Edificación para Remodelación o Ampliación o Demolición parcial para este uso, los requisitos antes señalados se presentan de la siguiente manera:</strong></p>

<ol start="17">
  <li>Plano de ubicación y localización, según formato.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
</ol>

<p>Los cuales se presentan de la siguiente manera:</p>
<ul>
  <li><strong>a)</strong> Los planos de arquitectura deben contener:
    <ul>
      <li>Plano de levantamiento de la edificación existente, que grafique los elementos a eliminar, ampliar y/o remodelar.</li>
      <li>Plano de la edificación resultante.</li>
    </ul>
  </li>
  <li><strong>b)</strong> Los planos de estructuras deben diferenciar los elementos estructurales, los elementos que se van a eliminar y los elementos nuevos, detallando adecuadamente los empalmes.</li>
  <li><strong>c)</strong> Los planos de instalaciones deben:
    <ul>
      <li>Diferenciar claramente las instalaciones que se van a incorporar y las que se eliminan, detallando adecuadamente los empalmes.</li>
      <li>Evaluar la factibilidad de servicios teniendo en cuenta la ampliación de cargas de electricidad y de dotación de agua potable.</li>
    </ul>
  </li>
</ul>

<ol start="19">
  <li>Como parte del proyecto de arquitectura se presenta los planos de seguridad y evacuación. Para las especialidades de Estructuras, Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li>Copia del documento que acredite la declaratoria fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente.</li>
  <li>Para los casos de demoliciones parciales, cuya edificación no pueda acreditarse con la autorización respectiva, el plano de ubicación y localización así como el plano de planta de la edificación a demoler, diferenciando en el caso de demolición parcial, las áreas a demoler de las remanentes.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones parciales cuya declaratoria de fábrica o de edificación se encuentra inscrita en el Registro de Predios, declaración jurada por parte del administrado, señalando que sobre el bien no recaen cargas y/o gravámenes, en su defecto, acreditar la autorización del titular de la carga o gravamen.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común se adjunta copia del Reglamento Interno, el plano de independización correspondiente a la unidad inmobiliaria y la autorización de la Junta de Propietarios, siempre que se encuentre inscrita en el Registro de Predios.</li>
  <li>Memoria descriptiva de los trabajos a realizar y del procedimiento de demolición a utilizar, donde se consideren las medidas de seguridad contempladas en la Norma Técnica G.050 "Seguridad durante la Construcción" del RNE y demás normas de la materia.</li>
  <li>Carta de Seguridad de Obra, firmada por ingeniero civil.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El administrado puede presentar en el expediente solo un juego del FUE y la Documentación Técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto en todas sus especialidades.</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
</ol>

</div>
      `
      ,
      "licencia-e-d": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACION - MODALIDAD D APROBACION CON EVALUACION PREVIA DEL PROYECTO POR LA COMISION TECNICA<br>
        <span style="font-size: 0.5em; color: gray;">(
Edificaciones de locales comerciales , culturales , centros de diversión y sala de espectáculos que individualmente o en conjunto cuenten
con mas de 30,000 m2 de área techada)
  </span></h2>
  <div style="text-align: justify;">
<ol>
  <li>FUE en tres (3) juegos originales, debidamente suscrito por el administrado y en la sección que corresponda, los profesionales responsables, en el que se deba consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar, con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley N° 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>Certificación Ambiental aprobada por la entidad correspondiente cuando corresponda.</li>
  <li>Estudio de Impacto Vial aprobado, únicamente en los casos que el RNE lo establezca.</li>
  
  <strong>Documentación Técnica, en tres (03) juegos originales, compuesta por:</strong><br>
  <li>Copia simple del comprobante de pago por revisión del proyecto.</li>
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad.</li>
  <li>Como parte del proyecto de arquitectura se presentan los planos de seguridad y evacuación. Para las especialidades de Estructuras, Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li>De ser el caso, plano de sostenimiento de excavaciones de acuerdo a lo establecido en el artículo 33 de la Norma E 050 "Suelos y Cimentaciones" del RNE, acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.</li>
  <li>Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder según los casos que establece la Norma Técnica E.050 Suelos y Cimentaciones del RNE.</li>
  
  <strong>Para obras nuevas, solo para el caso que se vaya a ejecutar en predios que cuenten con edificaciones existentes sin licencia, la demolición total se autoriza con la licencia de edificación de obra nueva, sin perjuicio de la multa por ejecutar sin licencia. Se presenta también:</strong><br>
  <li>Planos de distribución de la edificación existente.</li>
  <li>Plano de cerramiento del predio.</li>
  <li>Carta de seguridad de obra.</li>
  <li>Memoria descriptiva del proceso de demolición firmada por ingeniero civil.</li>
  
  <strong style="color: darkgoldenrod;">En caso se solicite Licencia de Edificación para Remodelación o Ampliación o Demolición parcial para este uso, los requisitos antes señalados se presentan de la siguiente manera:</strong><br>
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de Arquitectura (plantas, cortes y elevaciones), Estructuras, Instalaciones Sanitarias, Eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las memorias descriptivas por cada especialidad. Los cuales se presentan de la siguiente manera:</li>
  <ol type="a">
    <li>Los planos de arquitectura deben contener:
      <ul>
        <li>Plano de levantamiento de la edificación existente, que grafique los elementos a eliminar, ampliar y/o remodelar.</li>
        <li>Plano de la edificación resultante.</li>
      </ul>
    </li>
    <li>Los planos de estructuras deben diferenciar los elementos estructurales, los elementos que se van a eliminar y los elementos nuevos, detallando adecuadamente los empalmes.</li>
    <li>Los planos de instalaciones deben:
      <ul>
        <li>Diferenciar claramente las instalaciones que se van a incorporar y las que se eliminan, detallando adecuadamente los empalmes.</li>
        <li>Evaluar la factibilidad de servicios teniendo en cuenta la ampliación de cargas de electricidad y de dotación de agua potable.</li>
      </ul>
    </li>
  </ol>
  <li>Como parte del proyecto de arquitectura se presentan los planos de seguridad y evacuación. Para las especialidades de Estructuras, Sanitarias y Eléctricas o Electromecánicas, se presentan planos de seguridad cuando corresponda.</li>
  <li>Copia del documento que acredite la declaratoria de fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente.</li>
  <li style="color: darkgoldenrod;">Para los casos de demoliciones parciales, cuya edificación no pueda acreditarse con la autorización respectiva, el plano de ubicación y localización, así como el plano de planta de la edificación a demoler, diferenciando en el caso de demolición parcial, las áreas a demoler de las remanentes.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones parciales cuya declaratoria de fábrica o de edificación se encuentra inscrita en el Registro de Predios, declaración jurada por parte del administrado señalando que sobre el bien no recaen cargas y/o gravámenes, en su defecto, acreditar la autorización del titular de la carga o gravamen.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común se adjunta copia del Reglamento Interno, el plano de independización correspondiente a la unidad inmobiliaria y la autorización de la Junta de Propietarios, siempre que se encuentre inscrita en el Registro de Predios.</li>
  <li>Memoria descriptiva de los trabajos a realizar y del procedimiento de demolición a utilizar, donde se consideren las medidas de seguridad contempladas en la Norma Técnica G.050 "Seguridad durante la Construcción" del RNE y demás normas de la materia.</li>
  <li>Carta de Seguridad de Obra, firmada por ingeniero civil.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El FUE y la Documentación Técnica se presentan en tres (03) juegos originales.</li>
  <li>El FUE, así como sus anexos, son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
</ol>
</div>
      `,
      "lic-ed-vi-re": `
        <h2 style="text-align: center;">LICENCIA DE EDIFICACIÓN EN VIAS DE REGULARIZACIÓN
PARA EDIFICACIONES DE MERCADOS<br>
        <span style="font-size: 0.5em; color: gray;"> (Sólo para edificaciones ejecutadas desde el 01 de enero de 2017 hasta el 17 de
septiembre de 2018)"
  </span></h2>
        <div style="text-align: justify;">
 <ol>
  <li>Formulario Único de Regularización, en tres juegos originales debidamente suscritos por el administrado y por el profesional responsable, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Documentación técnica firmada por profesional constatador, compuesta por:
    <ol type="a">
      <li>Plano de Ubicación y Localización según formato</li>
      <li>Planos de Arquitectura (planta, cortes y elevaciones)</li>
      <li>Memoria descriptiva</li>
    </ol>
  </li>
  <li>Carta de seguridad de Obra, debidamente firmada y sellada por un ingeniero civil colegiado.</li>
  <li>Para regularización de remodelaciones, ampliaciones o demoliciones, copia del documento que acredite la declaratoria de fábrica o de edificación con sus respectivos planos, en caso no haya sido expedido por la Municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente que no es materia de regularización.</li>
  <li style="color: darkgoldenrod;">En caso la declaratoria de fábrica o de edificación se encuentre inscrita en el Registro de Predios, declaración jurada por parte del administrado, señalando que sobre el bien no recaigan cargas y/o gravámenes. En su defecto, copia del documento que acredite la autorización del titular de la carga o gravamen.</li>
  <li>Copia del comprobante de pago de la multa por construir sin licencia. El valor de la multa es equivalente al 10% del valor de la obra a regularizar tomando de promedio los valores unitarios oficiales de edificación a la fecha de su ejecución y de la fecha de solicitud de la regularización.</li>
  <li style="color: darkgoldenrod;">En caso que el predio se encuentre sujeto al régimen de propiedad exclusiva y propiedad común, se adjunta la autorización de la Junta de Propietarios, siempre que esta se encuentre inscrita ante el Registro de Predios. De no estar inscrita o no estar actualizada la Junta de Propietarios y siempre que el proyecto no contravenga las normas vigentes, los parámetros urbanísticos y edificatorios, así como las condiciones de seguridad y funcionamiento, se presenta un documento suscrito por mayoría simple de los propietarios autorizando la ejecución de las obras.</li>
  <li>Pago por derecho de revisión al CAP.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El administrado puede presentar en el expediente solo un juego del FUE y la Documentación Técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto en todas sus especialidades.</li>
  <li>El FUE, así como sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable de la misma, así como por el administrado.</li>
  <li>El plano de ubicación y localización se deberá presentar conforme al formato aprobado por el MVCS.</li>
</ol>

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
      "lic-a": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACION URBANA MODALIDAD A</h2>
        <div style="text-align: justify;">
      <ol>
  <li>FUHU, en tres (03) juegos originales debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, según lo dispuesto en el literal b) del numeral 20.1 del artículo 20 del Reglamento.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales (adicionalmente se podrá presentar copia digital), firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel cada metro, de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
    <p>Los planos antes referidos deben estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, y su Reglamento, aprobado por Decreto Supremo N° 005-2006-JUS.</p>
  </li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en los que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento.</li>
  <li>Pago de derecho de trámite.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El FUHU y sus anexos son documentos aprobados por el MVCS, de libre reproducción, mediante los cuales se formalizan los procedimientos administrativos y actos administrativos relacionados con la autorización de ejecución de los proyectos de habilitación urbana; lo suscriben el administrado, así como los profesionales responsables del proyecto; tiene carácter de declaración jurada la información que contiene y los documentos que se presentan. Este formulario tiene mérito de inscripción registral.</li>
  <li>El FUHU y sus anexos son visados en todas sus páginas y, cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
  <li>Los membretes de los planos contienen la información sobre el administrado, los profesionales responsables de los planos, su especialidad y el número de colegiatura; el tipo de obra; el nombre del proyecto y de los planos; la escala; la fecha y la numeración del plano referida al número total de planos por especialidad.</li>
  <li>Para la numeración de los planos se utilizan los siguientes prefijos:
    <ul>
      <li><strong>U</strong> para el plano de ubicación y localización</li>
      <li><strong>PP</strong> para los planos perimétricos</li>
      <li><strong>PT</strong> para los planos topográficos</li>
      <li><strong>PTL</strong> para los planos de trazado y lotización</li>
      <li><strong>PO</strong> para los planos de ornamentación y de parques</li>
      <li><strong>PRL</strong> para los planos de replanteo y lotización</li>
      <li><strong>PA</strong> para los planos de altura de edificación y otros prefijos que permitan identificar la especialidad correspondiente, a criterio del proyectista.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">En caso de contar con Planeamiento Integral Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
  <li>Se adjunta al Expediente de Licencia de Habilitación Urbana en esta modalidad, el Anexo H, de acuerdo al RVAT, para agilizar su suscripción y dar inicio a la obra.</li>
</ol>

        </div>  
      `,
      "lic-b": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACION URBANA MODALIDAD B</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU, en tres (03) juegos originales debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, según lo dispuesto en el literal b) del numeral 20.1 del artículo 20 del Reglamento.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales (adicionalmente se podrá presentar copia digital), firmada por el administrado y los profesionales responsables del diseño, de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, aportes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
    <p>Los planos antes referidos deben estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, en adelante la Ley N° 28294 y su Reglamento, aprobado por Decreto Supremo N° 005-2006-JUS.</p>
  </li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en los que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento.</li>
  <li>Pago de derecho de trámite.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El FUHU y sus anexos son documentos aprobados por el MVCS, de libre reproducción, mediante los cuales se formalizan los procedimientos administrativos y actos administrativos relacionados con la autorización de ejecución de los proyectos de habilitación urbana; lo suscriben el administrado, así como los profesionales responsables del proyecto; tiene carácter de declaración jurada la información que contiene y los documentos que presentan. Este formulario tiene mérito de inscripción registral.</li>
  <li>El FUHU y sus anexos son visados en todas sus páginas y, cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
  <li>Los membretes de los planos contienen la información sobre el administrado, los profesionales responsables de los planos, su especialidad y el número de colegiatura; el tipo de obra; el nombre del proyecto y de los planos; la escala; la fecha y la numeración del plano referida al número total de planos por especialidad.</li>
  <li>Para la numeración de los planos se utilizan los siguientes prefijos:
    <ul>
      <li><strong>U</strong> para el plano de ubicación y localización</li>
      <li><strong>PP</strong> para los planos perimétricos</li>
      <li><strong>PT</strong> para los planos topográficos</li>
      <li><strong>PTL</strong> para los planos de trazado y lotización</li>
      <li><strong>PO</strong> para los planos de ornamentación y de parques</li>
      <li><strong>PRL</strong> para los planos de replanteo y lotización</li>
      <li><strong>PA</strong> para los planos de altura de edificación y otros prefijos que permitan identificar la especialidad correspondiente, a criterio del proyectista.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">En caso de contar con Planeamiento Integral Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
  <li>El cargo de ingreso del expediente constituye la Licencia Temporal para la Habilitación Urbana, la cual está conformada por el FUHU y la documentación técnica, debidamente sellados con la recepción y el número de expediente asignado. La Licencia Temporal para Habilitación Urbana, en la presente modalidad, solo autoriza a las obras que se requieran para implementar la obra previo al proceso de movimiento de tierras y excavación.</li>
</ol>

        </div>  
      `,
      "lic-c": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACION URBANA MODALIDAD C<br>
        <span style="font-size: 0.5em; color: gray;">(Aprobación con evaluación previa del proyecto por la comisión técnica)"
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU, en tres (03) juegos originales debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, según lo dispuesto en el literal b) del numeral 20.1 del artículo 20 del Reglamento.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales (adicionalmente se podrá presentar copia digital), firmada por el administrado y los profesionales responsables del diseño de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, aportes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
    Los planos antes referidos deben estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294 y su Reglamento, aprobado por Decreto Supremo N° 005-2006-JUS.
  </li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en el que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento.</li>
  <li>Copia de los comprobantes de pago por revisión de proyecto.</li>
  <li>Estudio de Impacto Vial en los casos que establezca el RNE.</li>
  <li>Pago de derecho de trámite.</li>
</ol>

<strong><p>Notas:</p></strong>
<ol>
  <li>El FUHU y sus anexos son documentos aprobados por el MVCS, de libre reproducción, mediante los cuales se formalizan los procedimientos administrativos y actos administrativos relacionados con la autorización de ejecución de los proyectos de habilitación urbana; lo suscriben el administrado, así como los profesionales responsables del proyecto; tiene carácter de declaración jurada la información que contiene y los documentos que presentan. Este formulario tiene mérito de inscripción registral.</li>
  <li>El FUHU y sus anexos son visados en todas sus páginas y cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
  <li>Los membretes de los planos contienen la información sobre el administrado, los profesionales responsables de los planos, su especialidad y número de colegiatura; el tipo de obra; el nombre del proyecto y de los planos; la escala; la fecha y la numeración del plano referida al número total de planos por especialidad.</li>
  <li>Para la numeración de los planos se utilizan los siguientes prefijos:
    <ul>
      <li>"U" para el plano de ubicación y localización.</li>
      <li>"PP" para los planos perimétricos.</li>
      <li>"PT" para los planos topográficos.</li>
      <li>"PTL" para los planos de trazado y lotización.</li>
      <li>"PO" para los planos de ornamentación y de parques.</li>
      <li>"PRL" para los planos de replanteo y lotización.</li>
      <li>"PA" para los planos de altura de edificación y otros prefijos que permitan identificar la especialidad correspondiente, a criterio del proyectista.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">En caso de contar con Planeamiento Integral Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
  <li style="color: darkgoldenrod;">En caso de contar con Estudio de Impacto Vial Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
</ol>

        </div>  
      `,
      "lic-d": `
        <h2 style="text-align: center;">LICENCIA DE HABILITACION URBANA MODALIDAD D<br>
        <span style="font-size: 0.5em; color: gray;">(Aprobación con evaluación previa del proyecto por la Comisión Técnica )
  </span></h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU, en tres (03) juegos originales debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Declaración jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica, según lo dispuesto en el literal b) del numeral 20.1 del artículo 20 del Reglamento.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales (adicionalmente se podrá presentar copia digital), firmada por el administrado y los profesionales responsables del diseño de acuerdo a lo siguiente:
    <ul>
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, aportes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ul>
    Los planos antes referidos deben estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, en adelante la Ley N° 28294, y su Reglamento, aprobado por Decreto Supremo N° 005-2006-JUS.
  </li>
  <li style="color: darkgoldenrod;">Para el caso que se requiera Planeamiento Integral y el área por habilitar esté comprendida en el Plan de Desarrollo Urbano y/o zonificación y no colinde con zonas habilitadas, el administrado deberá presentar:
    <ul>
      <li>Plano que contenga la red de vías primarias y locales.</li>
      <li>Plano de usos de la totalidad de la parcela.</li>
      <li>Plano con la propuesta de integración a la trama urbana más cercana, señalando el perímetro y el relieve con curvas de nivel, usos de suelo y aportes normativos, en concordancia con el Plan Urbano aprobado por la Municipalidad.</li>
      <li>Memoria descriptiva.</li>
    </ul>
  </li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento.</li>
  <li>Copia de los comprobantes de pago por revisión de proyecto.</li>
  <li>Estudio de Impacto Vial en los casos que establezca el RNE.</li>
  <li>Pago de derecho de trámite.</li>
</ol>

<strong><p>Notas:</p></strong>
<ol>
  <li>El FUHU y sus anexos son documentos aprobados por el MVCS, de libre reproducción, mediante el cual se formalizan los procedimientos administrativos y actos administrativos relacionados con la autorización de ejecución de los proyectos de habilitación urbana; lo suscriben el administrado, así como los profesionales responsables del proyecto; tiene carácter de declaración jurada la información que contiene y los documentos que presentan. Este formulario tiene mérito de inscripción registral.</li>
  <li>El FUHU y sus anexos son visados en todas sus páginas y, cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
  <li>Los membretes de los planos contienen la información sobre el administrado, los profesionales responsables de los planos, su especialidad y el número de colegiatura; el tipo de obra; el nombre del proyecto y de los planos; la escala; la fecha y la numeración del plano referida al número total de planos por especialidad.</li>
  <li>Para la numeración de los planos se utilizan los siguientes prefijos:
    <ul>
      <li>"U" para el plano de ubicación y localización.</li>
      <li>"PP" para los planos perimétricos.</li>
      <li>"PT" para los planos topográficos.</li>
      <li>"PTL" para los planos de trazado y lotización.</li>
      <li>"PO" para los planos de ornamentación y de parques.</li>
      <li>"PRL" para los planos de replanteo y lotización.</li>
      <li>"PA" para los planos de altura de edificación y otros prefijos que permitan identificar la especialidad correspondiente, a criterio del proyectista.</li>
    </ul>
  </li>
  <li style="color: darkgoldenrod;">En caso de contar con Planeamiento Integral Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
  <li style="color: darkgoldenrod;">En caso de contar con Estudio de Impacto Vial Aprobado, indicar número de Resolución y/o Expediente respectivo.</li>
</ol>

        </div>  
      `,
      "in-par-te": `
        <h2 style="text-align: center;">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU, en tres (03) juegos originales debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li>Declaración Jurada, consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Anexo E del FUHU: Independización de Terreno Rústico / Habilitación Urbana.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica compuesta por (adicionalmente se podrá presentar copia digital):
    <ul>
      <li>Plano de ubicación y localización del terreno matriz con coordenadas UTM.</li>
      <li>Plano del predio rústico matriz indicando el perímetro, linderos, áreas, curvas de nivel y nomenclatura original, según antecedentes registrales.</li>
      <li>Plano de independización, señalando la parcela independizada y la(s) parcela(s) remanente(s), indicando el perímetro, linderos, áreas, curvas de nivel y nomenclatura original, según antecedentes registrales. Cuando corresponda, el plano de independización identifica el número de parcelas con los sufijos del predio matriz.</li>
      <li>Memoria descriptiva, indicando áreas, linderos y medidas perimétricas del predio matriz, del área independizada y del área remanente.</li>
    </ul>
    Los planos son elaborados en forma georreferenciada al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294 y su Reglamento.
  </li>
  <li style="color: darkgoldenrod;">En caso requiera Planeamiento Integral, siempre que el predio se ubique en el área urbanizable inmediata, deberá presentar el plano con la propuesta de integración a la trama urbana más cercana, señalando el perímetro y el relieve con curvas de nivel, usos de suelo y aportes normativos, en concordancia con el Plan de Desarrollo Urbano aprobado por la Municipalidad.</li>
</ol>

<strong><p>Notas:</p></strong>
<ol>
  <li>El FUHU y sus anexos son documentos aprobados por el MVCS, de libre reproducción, mediante el cual se formalizan los procedimientos administrativos y actos administrativos relacionados con la autorización de ejecución de los proyectos de habilitación urbana; lo suscriben el administrado, así como los profesionales responsables del proyecto; tiene carácter de declaración jurada la información que contiene y los documentos que presentan. Este formulario tiene mérito de inscripción registral.</li>
  <li>El FUHU y sus anexos son visados en todas sus páginas y, cuando corresponda, firmados por el administrado y los profesionales que intervienen.</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
</ol>
        </div>  
      `,
      "sub-ur": `
        <h2 style="text-align: center;">SUBDIVISION DE LOTE URBANO</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU por triplicado debidamente suscrito por el administrado y los profesionales responsables en el que se indica el número de recibo y la fecha de pago del trámite de la licencia ante la municipalidad, así como, la copia del recibo del pago efectuado ante los colegios profesionales.</li>
  <li>Declaración Jurada, consignando el número de la Partida Registral y el Asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  <li>Declaración Jurada de habilitación de los profesionales que suscriben la documentación técnica.</li>
  <li>Indicación de número de comprobante de pago de la tasa municipal correspondiente.</li>
  <li>Documentación técnica:
    <ul>
      <li>Plano de ubicación y localización de terreno matriz con coordenadas UTM PSAD 56.</li>
      <li>Plano con la propuesta de integración a la trama urbana más cercana, señalando el perímetro y el relieve con curvas de nivel, usos de suelo y aportes normativos, en concordancia con el Plan de Desarrollo Urbano aprobado por la Municipalidad Distrital correspondiente.</li>
      <li>Plano del predio rústico matriz, indicando perímetro, linderos, área, curvas de nivel y nomenclatura original, según antecedentes registrales.</li>
      <li>Plano de independización, señalando la parcela independizada y las parcelas remanentes, indicando perímetro, linderos, área, curvas de nivel y nomenclatura original, según antecedentes registrales.</li>
      <li>Memoria descriptiva, indicando áreas, linderos y medidas perimétricas del predio matriz, del área independizada y del área remanente.</li>
    </ul>
  </li>
</ol>

<strong><p>Notas:</p></strong>
<ul>
  <li>El Formulario Único de Habilitación Urbana (FUHU) y su Anexo E por duplicado, con el número de Resolución de autorización, conjuntamente con los documentos técnicos de sustento debidamente sellados, firmados y visados, son entregados al administrado para su inscripción en el Registro de Predio.</li>
  <li>Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos, así como por el propietario o solicitante.</li>
  <li style="color: darkgoldenrod;">En caso se solicite la independización y habilitación urbana en forma conjunta, el solicitante deberá presentar los requisitos para el procedimiento de habilitación urbana que corresponda, siendo de aplicación los plazos previstos para dicha modalidad.</li>
  <li>El FUHU y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.</li>
</ul>

        </div>  
      `,
      "re-ha-ej": `
        <h2 style="text-align: center;">REGULARIZACIÓN DE HABILITACIONES URBANAS EJECUTADAS</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUHU por triplicado debidamente suscrito por el administrado y los profesionales responsables, en el que se indica el número de recibo y la fecha de pago del trámite de la licencia ante la municipalidad, así como la copia del recibo del pago efectuado ante los colegios profesionales.</li>
  <li>Declaración jurada consignando el número de la partida registral y el asiento donde se encuentra inscrito el inmueble.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y, de ser el caso, a edificar.</li>
  <li style="color: darkgoldenrod;">En caso el administrado sea una persona jurídica, declaración jurada del representante legal; señalando que cuenta con representación vigente, consignando datos de la Partida Registral y el asiento en el que conste inscrita la misma.</li>
  <li>Declaración jurada de habilitación de los profesionales que suscriben la documentación técnica.</li>
  <li>Anexo G: Regularización de habilitaciones urbanas ejecutadas por triplicado y debidamente suscrito.</li>
  <li>Certificado de zonificación y vías.</li>
  <li>Certificado de alineamiento de vías.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD56.</li>
  <li>Plano de lotización, conteniendo el perímetro del terreno, el diseño de la lotización, de las vías, aceras y bermas; y las áreas correspondientes a los aportes. La lotización deberá estar en concordancia con el Plan de Desarrollo Urbano aprobado por la Municipalidad Distrital.</li>
  <li>Plano que indique los lotes ocupados y las alturas de las edificaciones existentes.</li>
  <li>Memoria descriptiva, indicando las manzanas (de corresponder), las áreas de los lotes, la numeración y los aportes reglamentarios.</li>
  <li>Copia legalizada notarialmente de las minutas y/o copias de los comprobantes del pago por la redención de los aportes reglamentarios que correspondan.</li>
  <li>Declaración jurada suscrita por el administrado y el profesional constatador de obra, en la que indique que se verificó que las obras se ejecutaron total o parcialmente.</li>
  <li style="color: darkgoldenrod;">En caso que se cuente con estudios preliminares aprobados, no corresponde presentar los documentos señalados en los literales a, b y c del presente numeral, debiendo presentar en su reemplazo:
    <ul>
      <li>Resolución y planos de los estudios preliminares aprobados.</li>
      <li>Planos de replanteo de la habilitación urbana, de corresponder.</li>
    </ul>
  </li>
  <li>Resolución y planos de los estudios preliminares aprobados.</li>
  <li>Planos de replanteo de la habilitación urbana, de corresponder.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
  <li>Pago del derecho administrativo.</li>
</ol>
        </div>  
      `,
      "cert-zo-vi": `
        <h2 style="text-align: center;">CERTIFICADOS DE ZONIFICACIÓN Y VÍAS</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Copia de minuta de compra venta o Constancia de Posesión.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>

<ul>
  <li>La documentación técnica deberá ser refrendada por Ingeniero Civil o Arquitecto colegiado.</li>
</ul>
        </div>  
      `,
      "cer-ha": `
        <h2 style="text-align: center;">CERTIFICADO DE HABITABILIDAD</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Declaración jurada de ser el propietario del predio.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Pago por inspección técnica.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal.</li>
</ol>
        </div>  
      `,
      "certi-fin": `
        <h2 style="text-align: center;">CERTIFICADO DE NÚMERACION DE FINCA Y PLACA NUMÉRICA</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56 (copia) o croquis detallado de ubicación en el que se consignará el suministro de energía eléctrica y la distancia a una de las esquinas de la calle próxima.</li>
  <li>Declaración jurada de ser el propietario del bien inmueble.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>
        </div>  
      `,
      "certi-neg": `
        <h2 style="text-align: center;">CERTIFICADO NEGATIVO DE CATASTRO</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Declaración jurada de ser el propietario del bien inmueble.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>
        </div>  
      `,
      "certi-pa-ur": `
        <h2 style="text-align: center;">CERTIFICADO DE PARAMETROS URBANISTICOS Y EDICATORIOS , A SOLICITUD DEL ADMINISTRADO</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización del terreno expresado en coordenadas UTM PSAD 56.</li>
  <li>Declaración jurada de ser el propietario del bien inmueble.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>
        </div>  
      `,
      "cert-comp": `
        <h2 style="text-align: center;">CERTIFICADO DE COMPATIBILIDAD DE USO</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Plano de ubicación y localización, suscrito por profesional habilitado.</li>
  <li>Declaración jurada de ser el propietario del bien inmueble.</li>
  <li>Planos de ubicación a escala 1/500 y de localización a escala 1/10,000, firmados por Ing. Civil o Arquitecto habilitado, expresados en coordenadas UTM PSAD 56.</li>
  <li>Memoria descriptiva en caso de grifos y/o estaciones de servicios, establecimientos con depósito de hidrocarburos para uso propio.</li>
  <li>Plano de distribución en caso de grifos, a escala 1/100, indicando las zonas de instalación de tanques, cercos, estacionamiento, oficinas, etc.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal correspondiente.</li>
</ol>
        </div>  
      `,
      "aut-oc-vi": `
        <h2 style="text-align: center;">AUTORIZACION PARA OCUPACION DE VIA ( VALIDO POR 48 HORAS )"</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde, indicando datos generales del solicitante y pretensión.</li>
  <li>Croquis de ubicación para ocupación de la vía.</li>
  <li>Indicación del número de comprobante de pago de la tasa municipal.</li>
</ol>
        </div>  
      `,
      "aut-rot": `
        <h2 style="text-align: center;">AUTORIZACION PARA ROTURA DE PISTAS Y VEREDAS PARA CONEXION DOMICILIARIA DE AGUA Y DESAGUE</h2>
        <div style="text-align: justify;">
<ol>
  <li>
    Formato de solicitud (distribución gratuita o de libre reproducción) con carácter de declaración jurada, que incluya necesariamente la siguiente información:
    <ul>
      <li>Identificación de la entidad prestadora de servicio (EPS) solicitante y número de RUC.</li>
      <li>Identificación de representante o apoderado de EPS con indicación de su DNI.</li>
    </ul>
  </li>
  <li>Informe de factibilidad de servicio o documento similar, expedido por la EPS.</li>
  <li>Documentación técnica de la obra asociada a la instalación
  <ul>
      <li>Memoria descriptiva de la intervención, detallando las características.</li>
    </ul> </li>
  <li>Indicación de número de comprobante de pago de la tasa municipal correspondiente.</li>
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
