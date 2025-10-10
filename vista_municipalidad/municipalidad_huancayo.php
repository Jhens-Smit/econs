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
        <li><a class="dropdown-item content-link" href="#" data-target="sub-ur">SUBDIVISION DE LOTE URBANO</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="re-ha-ed">REGU. DE HABILI. URBANA Y DE EDIF. EJECUTADAS SIN LICENCIA</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-b-ma">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROBACIÓN DEL PROYECTO CON EVALUACIÓN POR MUNICIPALIDAD</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-c-maa">MODALIDAD C: <span style="font-size: 0.7em; font-weight: bold; color: gray;">LICENCIA DE HABILITACIÓN URBANA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-d-ma">MODALIDAD D: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROB. CON EVAL. PREVIA DEL PROYECTO POR LA COMISIÓN TÉCNICA</span></a></li>
      </ul>
    </div>

    <!-- Botón 2 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Licencias de Edificaciones
      </button>
      <ul class="dropdown-menu">
      <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-ma">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">LIC. DE EDIF. PARA VIVIENDA UNIFAMILIAR DE HASTA 120 M2 CONSTRUIDOS</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">LIC. DE EDIF. PARA DEMOLICIÓN TOTAL 03 PISOS ALTURA</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-e-maaa">MODALIDAD A: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROB. AUTOMÁTICA CON FIRMA DE PROFESIONALES PARA AMPLIACIONES</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="mod-b-aprob">MODALIDAD B: <span style="font-size: 0.7em; font-weight: bold; color: gray;">APROB. DE PROYECT. CON EVA. POR LA MUNI.PARA EDIF. CON FINES DE VIVIENDA UNIFAMILIAR,</span></a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="licencia-re-ed">LICENCIA DE REGULARIZACIÓN DE EDIFICACIÓN</a></li>
        <li><a class="dropdown-item content-link" href="#" data-target="apro-ante-cons">APROB. DE ANTEPROYECTO EN CONSUL. PARA LA MODALIDAD B</a></li>
      </ul>
    </div>
  
    <!-- Botón 3 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Prescripción Adquisitiva
      </button>
      <ul class="dropdown-menu">
       <li><a class="dropdown-item content-link" href="#" data-target="cer-ne-ca">CERTIFICADO NEGATIVO DE CATASTRO</a></li>
       <li><a class="dropdown-item content-link" href="#" data-target="vis-mem">VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA</a></li>
       <li><a class="dropdown-item content-link" href="#" data-target="cer-para">CERTIFICADO DE PARÁMETROS URBANÍSTICOS Y EDIFICATORIOS</a></li>
<li><a class="dropdown-item content-link" href="#" data-target="ex-kit">EXPEDICIÓN DE KIT DE DOCUMENTOS CON FINES DE PRESCRIPCIÓN ADQUISITIVA DE DOMINIO</a></li>
<li><a class="dropdown-item content-link" href="#" data-target="asig-fin">ASIGNACIÓN DE NUMERACIÓN DE FINCA MUNICIPAL</a></li>
      </ul>
    </div>

    <!-- Botón 4 -->
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Planeamiento Urbano
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item content-link" href="#" data-target="zon-vias">CERTIFICADO DE ZONIFICACIÓN Y VÍAS</a></li>
         <li><a class="dropdown-item content-link" href="#" data-target="cer-uso">CERTIFICADO DE COMPATIBILIDAD DE USO</a></li>
          <li><a class="dropdown-item content-link" href="#" data-target="cer-al-vi">CERTIFICADO DE ALINEAMIENTO VIAL</a></li>
      </ul>
    </div>
<div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Otros
      </button>
      <ul class="dropdown-menu">
<li><a class="dropdown-item content-link" href="#" data-target="aut-pi">AUTORIZACIÓN DE ROTURA DE PISTAS Y/O VEREDAS</a></li>
<li><a class="dropdown-item content-link" href="#" data-target="cer-ha">CERTIFICADO DE HABITABILIDAD</a></li>
<li><a class="dropdown-item content-link" href="#" data-target="oc-ar">OCUPACIÓN DE ÁREAS PÚBLICAS CON MATERIA, MAQUINARIA U OTROS CON FINES DE CONSTRUCCIÓN</a></li>
<li><a class="dropdown-item content-link" href="#" data-target="in-par">INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS UBICADOS DENTRO DEL AREA URBANA</a></li>
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
  <li>Exhibir comprobante de pago por revisión de proyecto al CAP, el pago es válido para la evaluación del proyecto hasta en 2
oportunidades</li>
  <li>Pago de aportes reglamentarios, según corresponda</li>
</ol>

<strong>Notas:</strong>
<ol>
  <li>El formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen (Num. 7.1, art. 7 DS N°029-2019-VIV).</li>
  <li>Numeral 7.2, art. 7 DS N°029-2019-VIVIENDA: toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado.</li>
</ol>


        </div>
      `,
             "licencia-e-ma": `
        <h2 style="text-align: center;">
  LICENCIA DE EDIFICACIÓN MODALIDAD A PARA VIVIENDA UNIFAMILIAR DE HASTA 120 M2 CONSTRUIDOS<br>
  <span style="font-size: 0.5em; color: gray;">
    (siempre que constituya la única edificación en el lote). Aprobación automática con firma de profesional
  </span>
</h2>
        <div style="text-align: justify;">
        <strong>VERIFICACIÓN ADMINISTRATIVA</strong><br>
<strong>Requisitos comunes</strong>
<ol>
  <li>Formulario Único de Edificaciones (FUE), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
</ol>

<strong>Documentación Técnica.</strong><br>

<strong>VERIFICACIÓN TÉCNICA (Por una visita de inspección)</strong>
<ol start="3">
  <li>Cronograma de Visitas de Inspección, debidamente suscrito por el responsable de Obra y el Supervisor Municipal.</li>
  <li>Comunicación de la fecha de inicio de la obra.</li>
  <li>Indicación del número de comprobante de pago de la tasa correspondiente a la verificación técnica.</li>
  <li>Pago según acotación Licencia de Obra:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Retiro frontal (en zona consolidada, de acuerdo al PDU) área sin retiro x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU.<br>
          a) Estacionamiento comercial 2.70m x 5.00m = 13.50m² cada est. (m² de déficit de estacionamiento x arancel)<br>
          b) Estacionamiento residencial 2.40m x 5.00m = 12.00m² cada est. (m² de déficit de estacionamiento x arancel)
      </li>
    </ul>
  </li>
</ol>

<strong>Notas:</strong>
<ul>
  a) Todos los documentos serán presentados por duplicado.<br>
  b) El Formulario y sus anexos deben ser visados en todas sus páginas y cuando corresponda, firmados por el propietario o por el solicitante y los profesionales que intervienen.<br>
  c) Todos los planos y documentos técnicos deben estar sellados y firmados por el profesional responsable de los mismos y firmados por el propietario o solicitante.<br>
  d) Se podrá optar por la presentación de un proyecto adquirido en el Banco de Proyectos de la Municipalidad respectiva.<br>
</ul>
        </div>
      `,
             "cer-para": `
        <h2 style="text-align: center;">
  CERTIFICADO DE PARÁMETROS URBANÍSTICOS Y EDIFICATORIOS
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al alcalde.</li>
  <li>Exhibir DNI.</li>
  <li>Plano original de ubicación y localización firmado por el arquitecto o ingeniero civil habilitado.</li>
  <li>Derecho de pago</li>
</ol>
        </div>
      `,
      "licencia-re-ed": `
        <h2 style="text-align: center;">
  LICENCIA DE REGULARIZACIÓN DE EDIFICACIÓN
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único de Regularización, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por el profesional responsable, en el que se debe consignar la información necesaria al procedimiento que se requiere
iniciar, adjuntando copia del recibo del pago efectuado por derecho de revisión al Colegio Profesional.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Documentación técnica, firmada por el profesional constatador, compuesta por:
    <ul>
      a) Plano de ubicación y localización del lote.<br>
      b) Planos de arquitectura (planta, cortes y elevaciones).<br>
      c) Memoria descriptiva.
    </ul>
  </li>
  <li>Carta de seguridad de obra, debidamente sellada y firmada por un ingeniero civil colegiado.</li>
  <li>Para regularización de remodelaciones, ampliaciones o demoliciones, copia del documento que acredite la declaratoria de fábrica o de edificación, con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del Certificado de
Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente que no es materia de
regularización.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones totales o parciales de edificaciones cuya declaratoria de fábrica se encuentre inscrita en el Registro de Predios, se acredita que sobre el bien no recaigan cargas y/o gravámenes; en su defecto, presentar la autorización del titular de la carga
o gravamen.</li>
  <li>Copia del comprobante de pago de la multa por construir sin licencia. El valor de la multa es equivalente hasta el 10% del valor de la obra a regularizar tomando el promedio de los valores unitarios oficiales de edificación a la fecha de su ejecución.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común, se adjunta la autorización de la Junta de Propietarios, siempre que esta se encuentre inscrita ante el Registro de Predios. De no estar inscrita o no estar actualizada la Junta de
Propietarios y siempre que el proyecto no contravenga las normas vigentes, los parámetros urbanísticos y edificatorios, así como las
condiciones de seguridad y funcionamiento, se presenta un documento suscrito por mayoría simple de los propietarios autorizando la
ejecución de las obras. </li>
  <li>Derecho de Pago.</li>
  <li>Pago según acotación de Licencia de Edificación:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Retiro frontal (en zona consolidada, de acuerdo al PDU) área sin retiro x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU.</li>
      <li>Estacionamiento residencial de acuerdo a la norma A.010-Capítulo XI, artículo 65°:
        <ul>
          <li>2 a 3 estacionamientos: ancho 2.40 m cada uno.</li>
          <li>2 estacionamientos continuos: ancho 2.50 m cada uno.</li>
          <li>1 estacionamiento individual: ancho 2.70 m cada uno.</li>
        </ul>
      </li>
      <li>En todos los casos:
        <ul>
          <li>Largo: 5.00 m.</li>
          <li>Alto: 2.10 m.</li>
        </ul>
      </li>
    </ul>
  </li>
</ol>

<p><strong>Notas:</strong></p>
<ul>
  <li>Solo para edificaciones ejecutadas desde el 01 de enero del 2017 hasta el 17 de setiembre del 2018.</li>
</ul>

        </div>
      `,
             "aut-pi": `
        <h2 style="text-align: center;">
 AUTORIZACIÓN DE ROTURA DE PISTAS Y/O VEREDAS
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al alcalde.</li>
  <li>Derecho de Pago</li>
  <li>Identificar DNI del solicitante</li>
  <li>Plano de ubicación del predio firmado por arquitecto ing civil habilitado</li>
  <li>Carta notarial de dejar en iguales condiciones el área intervenida</li>
</ol>
<p><strong>Notas:</strong></p>
<ul>
  <li>Para pavimento rígido o flexible 07 años mínimo de haber sido ejecutada la obra (Art. 40° de la Ley 30225 Ley de Contrataciones del Estado), salvo casos excepcionales de acuerdo a Ley.</li>
</ul>
        </div>
      `,
             "licencia-c-maa": `
        <h2 style="text-align: center;">
  LICENCIA DE HABILITACIÓN URBANA MODALIDAD C<br>
  <span style="font-size: 0.5em; color: gray;">
    (Aprobación con evaluación previa del proyecto por la Comisión Técnica)
  </span>
</h2>
<div style="text-align: justify;">
<ol>
  <li>Formulario Único de Habilitaciones Urbanas - FUHU, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que
se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, compuesta por:
    <ol type="a">
      <li>Plano de ubicación y localización del terreno con coordenadas UTM</li>
      <li>Plano perimétrico y topográfico</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso</li>
      <li>Memoria descriptiva.</li>
    </ol>
  </li>
  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación</li>
  <li>Estudio de Impacto vial, en los casos que establezca el Reglamento Nacional de Edificaciones</li>
  <li>Copia de los comprobantes de pago por revisión efectuados en los Colegios Profesionales; en las instituciones con funciones específicas; o, en las entidades que designan delegados de servicios públicos.</li>
  <li>Derecho de Pago</li>
  <li>Identificar el pago de los aportes reglamentarios (m2 x valor de arancel)</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Los planos son elaborados en forma georreferenciada al Sistema Geodésico Oficial, según lo establecido en la Ley Nº 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, y su Reglamento, aprobado por Decreto
Supremo Nº 005-2006-JUS.</li>
  <li>El administrado puede presentar en el expediente solo un (01) juego del FUHU y de la documentación técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la
aprobación del proyecto de habilitación urbana.
</li>
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF</li>
</ol>
        </div>
      `,
             "licencia-e-maa": `
        <h2 style="text-align: center;">
  LICENCIA DE EDIFICACIÓN MODALIDAD A<br>
  <span style="font-size: 0.5em; color: gray;">
    Aprobación automática con firma de profesionales para la demolición total de edificaciones de hasta 03 pisos de altura, que no cuente con semisotanos, ni sótanos, siempre que no haga uso de explosivos.
  </span>
</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmados y sellados por los profesionales de cada especialidad, compuesta por el plano de ubicación y localización del lote, los planos de arquitectura (planta, cortes y elevaciones), de estructuras, de instalaciones sanitarias y de instalaciones eléctricas. Esta documentación debe ser presentada también en archivo digital.</li>
  <li>Derecho de Pago</li>
  <li>Pago según acotación de Licencia de Edificación:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel</li>
      <li>Copia del documento que acredita la declaratoria de fábrica o de edificación con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del certificado de conformidad o finalización de obra, o la licencia de obra</li>
      <li>Retiro frontal (en zona consolidada, de acuerdo al PDU) área sin retiro x arancel</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU</li>
      <ul>
        <li>a) Estacionamiento comercial 2.70 m. x 5.00 m. = 13.50 m² cada estacionamiento (m² de déficit de estacionamiento x arancel)</li>
        <li>b) Estacionamiento residencial 2.40 m. x 5.00 m. = 12.00 m² cada estacionamiento (m² de déficit de estacionamiento x arancel)</li>
      </ul>
    </ul>
  </li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El administrado puede optar por la presentación de un proyecto adquirido en el banco de proyectos de la Municipalidad.</li>
  <li>No están consideradas en esta modalidad:
    <ul>
      <li>Las obras de edificación en bienes inmuebles integrantes del Patrimonio Cultural de la Nación y su área de influencia, declarados por el Ministerio de Cultura e incluidos en el inventario que debe remitir el citado Ministerio, de acuerdo a lo establecido en el segundo párrafo del literal f) del numeral 2 del artículo 3 de la Ley Nº 29090.</li>
      <li>Las obras que requieran la ejecución de sótanos o semisótanos, o una profundidad de excavación mayor a 1.50 m y colinden con edificaciones existentes. En dicho caso debe tramitarse la Licencia de Edificación bajo la modalidad B.</li>
    </ul>
  </li>
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF</li>
  <li>Se adjunta al expediente de Licencia de Edificación en esta Modalidad, el Anexo H, de acuerdo a lo establecido en el RVAT para agilizar su suscripción y dar inicio a la obra.</li>
</ol>

        </div>
      `,
             "sub-ur": `
        <h2 style="text-align: center;">
 	SUBDIVISION DE LOTE URBANO
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único (FUHU) en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
  <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
</ol>

<p><strong>Documentación Técnica</strong></p>

<ol start="3">
  <li>Anexo F del FUHU: Subdivisión de lote urbano.</li>
  <li>Plano de ubicación y localización del lote materia de subdivisión.</li>
  <li>Plano del lote a subdividir, señalando el área, linderos, medidas perimétricas y nomenclatura, según los antecedentes registrales.</li>
  <li>Plano de la subdivisión señalando áreas, linderos, medidas perimétricas y nomenclatura de cada sublote propuesto resultante, en concordancia con lo establecido en la Norma Técnica GH.020 "Componente del Diseño Urbano" del Reglamento Nacional de Edificaciones RNE.</li>
  <li>Memoria descriptiva, indicando áreas, linderos y medidas perimétricas del lote materia de subdivisión y de los sublotes propuestos resultantes.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol type="a">
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen (Num. 7.1, art. 7 DS N°029-2019-VIV.).</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado. (Numeral 7.2, art. 7 del DS N°029-2019-VIVIENDA).</li>
  <li>En la Memoria Descriptiva indicar el N° de Resolución.</li>
</ol>

        </div>
      `
      ,
             "cer-uso": `
        <h2 style="text-align: center;">
 	CERTIFICADO DE COMPATIBILIDAD DE USO
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde indicando el rubro o giro al que se dedicará el establecimiento, de acuerdo a las actividades y usos compatibles contenidos en el Plan de Desarrollo Metropolitano.</li>
  <li>Exhibir DNI del solicitante.</li>
  <li>Declaración Jurada consignando el número de la Partida Registral y el asiento donde se encuentra inscrito el inmueble, de ser el caso.</li>
  <li>Plano de ubicación y localización firmado por arquitecto o ingeniero civil habilitado.</li>
  <li>Memoria Descriptiva.</li>
  <li>Derecho de Pago.</li>
</ol>

<p><strong>Notas:</strong></p>
<ul>
  <li><strong>AUTORIZACIÓN DE USO NO CONFORME:</strong> Para los establecimientos que obtuvieron licencia de funcionamiento anteriormente y realizaron inversión en la infraestructura, y a la fecha sea incompatible con la zonificación actual. Siempre que no implique nuevas construcciones de mayor inversión, salvo refacción indispensable por seguridad e higiene; así mismo, que no causen perjuicios a los vecinos ni impactos negativos al medio ambiente. No incluye el cambio de uso o modificación de uso.</li>
</ul>


        </div>
      `,
             "cer-ha": `
        <h2 style="text-align: center;">
 	CERTIFICADO DE HABITABILIDAD
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde.</li>
  <li>Identificar DNI del peticionario.</li>
  <li>Exhibir documento que acredite propiedad.</li>
  <li>Plano de ubicación, localización y distribución, con firma en original del profesional responsable.</li>
  <li>Informe de estabilidad de obra y de cumplimiento con las normas urbanísticas suscrito por Arquitecto o Ingeniero Civil Habilitado (cuando corresponda).</li>
  <li>Derecho de Pago.</li>
</ol>



        </div>
      `,
             "cer-ne-ca": `
        <h2 style="text-align: center;">
 	CERTIFICADO NEGATIVO DE CATASTRO
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde.</li>
  <li>Plano de Ubicación y Localización (en original) firmado por el profesional responsable (Arquitecto o Ingeniero Civil habilitado).</li>
  <li>Exhibir DNI del solicitante.</li>
  <li>Derecho de Pago.</li>
</ol>




        </div>
      `,
             "cer-al-vi": `
        <h2 style="text-align: center;">
 	CERTIFICADO DE ALINEAMIENTO VIAL
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde.</li>
  <li>Exhibir DNI del solicitante.</li>
  <li>Derecho de Pago.</li>
  <li>Plano de ubicación y localización (en original) consignando el N° de Resolución de Habilitación Urbana por las vías locales del sistema vial secundario, firmado por el profesional responsable (Arquitecto o Ingeniero Civil habilitado).</li>
  <li>Exhibir documento que acredita propiedad.</li>
  <li>En zona monumental presentar autorización de la Dirección Desconcentrada de Cultura.</li>
</ol>
        </div>
      `,
             "mod-b-aprob": `
        <h2 style="text-align: center;">
  LICENCIA DE EDIFICACIÓN MODALIDAD B<br>
  <span style="font-size: 0.5em; color: gray;">
    Aprobación de Proyecto con evaluación por la Municipalidad para edificaciones con fines de vivienda
unifamiliar, multifamiliar o condominios de vivienda unifamiliar y/o multifamiliar no mayores a cinco (05) pisos, siempre que el proyecto tenga un
máximo de 3 000 m2 de área techada
  </span>
</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Certificado de Factibilidad de Servicios para proyectos de vivienda multifamiliar o fines diferentes al de vivienda.</li>
  <li>Derecho de Pago</li>
  <li>Documentación técnica, en tres (03) juegos originales, la que debe ser presentada además en archivo digital con excepción del Estudio de Mecánica de Suelos (d). Esta documentación está compuesta por:
    <ul>
      a) Plano de ubicación y localización del lote.<br>
      b) Planos de arquitectura (planta, cortes y elevaciones), estructuras, instalaciones sanitarias, eléctricas y otras, de ser el caso, firmados y sellados por los profesionales responsables del proyecto y por el administrado, adjuntando las correspondientes memorias descriptivas por cada especialidad.<br>
      c) De ser el caso, plano de sostenimiento de excavaciones de acuerdo con lo establecido en el artículo 39 de la Norma Técnica E.050, “Suelos y Cimentaciones” del RNE acompañado de la memoria descriptiva que precise las características de la obra, además de las edificaciones colindantes indicando el número de pisos y sótanos, complementando con fotos.<br>
      d) Estudio de Mecánica de Suelos o Informe Técnico de Suelos, de corresponder, según los casos que establece la Norma Técnica E.050, “Suelos y Cimentaciones” del RNE.
    </ul>
  </li>
  <li>Pago según acotación de Licencia de Edificación:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Retiro frontal (en zona consolidada, de acuerdo al PDU) área sin retiro x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:
        <ul>
          <li>2 a 3 estacionamientos ancho 2.40m. cada uno</li>
          <li>2 estacionamientos continuos ancho 2.50m. cada uno</li>
          <li>1 estacionamiento individual ancho 2.70m. cada uno</li>
          <li>En todos los casos Largo 5.00 m. Alto 2.10 m.</li>
        </ul>
      </li>
    </ul>
  </li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>En la presente modalidad, no están contempladas las obras de edificación en bienes inmuebles integrantes del Patrimonio Cultural de la Nación y su área de influencia, declarados por el Ministerio de Cultura e incluidos en el inventario que debe remitir el citado Ministerio, de acuerdo a lo establecido en el segundo párrafo del literal f) del numeral 2 del artículo 3 de la Ley Nº 29090.</li>
  <li>El administrado puede presentar en el expediente solo un juego del FUE y de la documentación técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto en todas las especialidades.</li>
  <li>Para proyectos multifamiliares o condominios, la Póliza CAR (Todo Riesgo Contratista), según las características de la obra que se vaya a ejecutar con cobertura por daños materiales y personales a terceros y como complemento al Seguro Complementario de Trabajo de Riesgo previsto en la Ley Nº 26790, Ley de Modernización de la Seguridad Social en Salud. Este documento se entrega obligatoriamente a la Municipalidad como máximo el día hábil anterior al inicio de la obra, teniendo una vigencia igual o mayor a la duración del proceso edificatorio.</li>
  <li>La Licencia Temporal para Edificación está constituida por el cargo del FUE y la documentación técnica, debidamente sellados con la recepción y número de expediente asignado. Esta licencia autoriza el inicio de las obras preliminares, incluyendo las obras provisionales, que se requieran para implementar la obra, previo al proceso de excavación.</li>
</ol>

        </div>
      `,
             "oc-ar": `
        <h2 style="text-align: center;">
 	OCUPACIÓN DE ÁREA PÚBLICA CON MATERIAL, MAQUINARIA U OTROS CON FINES DE CONSTRUCCIÓN
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde identificando Licencia de Edificación y/o dictamen de comisión, en caso de personería jurídica indicar dirección en el cercado de Huancayo.</li>
  <li>Identificar DNI del peticionario.</li>
  <li>Derecho de Pago por día o fracción de día.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Cerco provisional de seguridad (en 25% de vereda)</li>
  <li>Prohibido cerrar más del 50% de la sección de vía</li>
  <li>En zonas y vías principales se laborará sólo en horario nocturno</li>
</ol>

        </div>
      `,
             "licencia-d-ma": `
        <h2 style="text-align: center;">
  LICENCIA DE HABILITACIÓN URBANA MODALIDAD D<br>
  <span style="font-size: 0.5em; color: gray;">
    (Aprobación con evaluación previa del proyecto por la Comisión Técnica)
  </span>
</h2>
<div style="text-align: justify;">
<ol>
  <li>Formulario Único de Habilitaciones Urbanas - FUHU, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, compuesta por:
    <ol type="a">
      <li>Plano de ubicación y localización del terreno con coordenadas UTM.</li>
      <li>Plano perimétrico y topográfico.</li>
      <li>Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.</li>
      <li>Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.</li>
      <li>Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.</li>
      <li>Memoria descriptiva.</li>
    </ol>
  </li>
  <li>Para la aprobación del Planeamiento Integral con fines de integración, en el caso que el área por habilitar esté comprendida en el Plan de Desarrollo Urbano y/o zonificación y no colinde con zonas habilitadas, además se presenta:
    <ol type="a">
      <li>Plano que contenga la red de vías primarias y locales.</li>
      <li>Plano de usos de la totalidad de la parcela.</li>
      <li>Plano con la propuesta de integración a la trama urbana más cercana, señalando el perímetro y el relieve con curvas de nivel, usos de suelo y aportes normativos, en concordancia con el Plan de Desarrollo Urbano aprobado por la Municipalidad Provincial correspondiente.</li>
      <li>Memoria Descriptiva.</li>
    </ol>
  </li>
  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación.</li>
  <li>Estudio de Impacto vial, en los casos que establezca el Reglamento Nacional de Edificaciones.</li>
  <li>Copia de los comprobantes de pago por revisión efectuados en los Colegios Profesionales; en las instituciones con funciones específicas; o, en las entidades que designan delegados de servicios públicos.</li>
  <li>Derecho de Pago.</li>
  <li>Identificar el pago de los aportes reglamentarios (m2 x valor de arancel).</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Los planos son elaborados en forma georreferenciada al Sistema Geodésico Oficial, según lo establecido en la Ley Nº 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, y su Reglamento, aprobado por Decreto Supremo Nº 005-2006-JUS.</li>
  <li>El administrado puede presentar en el expediente solo un (01) juego del FUHU y de la documentación técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto de habilitación urbana.</li>
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF.</li>
</ol>
        </div>
      `,
             "licencia-e-maaa": `
        <h2 style="text-align: center;">
  LICENCIA DE EDIFICACIÓN MODALIDAD A<br>
  <span style="font-size: 0.5em; color: gray;">
    Aprobación Automática con firma de profesionales para ampliaciones y remodelaciones consideradas como obras menores, según lo establecido en la norma técinnica G.040 "Definiciones" del RNE
  </span>
</h2>
<div style="text-align: justify;">
<ol>
  <li>FUE, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmados y sellados por los profesionales de cada especialidad, compuesta por el plano de ubicación y localización del lote, los planos de arquitectura (planta, cortes y elevaciones), de estructuras, de instalaciones sanitarias y de instalaciones eléctricas. Esta documentación debe ser presentada también en archivo digital.</li>
  <li>Derecho de Pago.</li>
  <li>Pago según acotación de Licencia de Edificación:
    <ul>
      <li>Voladizo (área techada fuera de la línea de propiedad) por cada piso x arancel.</li>
      <li>Retiro frontal (en zona consolidada, de acuerdo al PDU) área sin retiro x arancel.</li>
      <li>Déficit de estacionamiento de acuerdo a la zonificación-PDU:</li>
      <ul>
        a) Estacionamiento comercial 2.70 m. x 5.00 m. = 13.50 m² cada estacionamiento (m² de déficit de estacionamiento x arancel).<br>
        b) Estacionamiento residencial 2.40 m. x 5.00 m. = 12.00 m² cada estacionamiento (m² de déficit de estacionamiento x arancel).<br>
      </ul>
    </ul>
  </li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>El administrado puede optar por la presentación de un proyecto adquirido en el banco de proyectos de la Municipalidad.</li>
  <li>No están consideradas en esta modalidad:
    <ul>
      <li>Las obras de edificación en bienes inmuebles integrantes del Patrimonio Cultural de la Nación y su área de influencia, declarados por el Ministerio de Cultura e incluidos en el inventario que debe remitir el citado Ministerio, de acuerdo a lo establecido en el segundo párrafo del literal f) del numeral 2 del artículo 3 de la Ley Nº 29090.</li>
      <li>Las obras que requieran la ejecución de sótanos o semisótanos, o una profundidad de excavación mayor a 1.50 m y colinden con edificaciones existentes. En dicho caso debe tramitarse la Licencia de Edificación bajo la modalidad B.</li>
    </ul>
  </li>
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF.</li>
</ol>

        </div>
      `,
             "licencia-b-ma": `
        <h2 style="text-align: center;">
  LICENCIA DE HABILITACIÓN URBANA MODALIDAD B<br>
  <span style="font-size: 0.5em; color: gray;">
    (Aprobación del proyecto con evaluación por Municipalidad)
  </span>
</h2>
<div style="text-align: justify;">
<ol>
  <li>Formulario Único de Habilitaciones Urbanas - FUHU, en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, consignando los datos del recibo de pago del derecho de tramitación.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación que acredite que cuenta con derecho a habilitar.</li>
  <li>Certificados de Factibilidad de Servicios de agua potable, alcantarillado y de energía eléctrica.</li>
  <li>Declaración Jurada de inexistencia de feudatarios.</li>
  <li>Documentación técnica, en tres (03) juegos originales, firmada por el administrado y los profesionales responsables del diseño, compuesta por:
    <ul>
      a) Plano de ubicación y localización del terreno con coordenadas UTM.<br>
      b) Plano perimétrico y topográfico.<br>
      c) Plano de trazado y lotización con indicación de lotes, vías y secciones de vías, ejes de trazo y habilitaciones urbanas colindantes, en caso sea necesario para comprender la integración con el entorno, con indicación de curvas de nivel por cada metro.<br>
      d) Plano de pavimentos, con indicación de curvas de nivel por cada metro, de corresponder.<br>
      e) Plano de ornamentación de parques, referentes al diseño, ornamentación y equipamiento de las áreas de recreación pública, de ser el caso.<br>
      f) Memoria descriptiva.<br>
      </ul>
  <li>Copia del planeamiento integral aprobado, cuando corresponda.</li>
  <li>Certificación Ambiental, según lo dispuesto en el literal a) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación.</li>
  <li>Certificado de Inexistencia de Restos Arqueológicos en aquellos casos en que el perímetro del área a habilitar se superponga con un área previamente declarada como parte integrante del Patrimonio Cultural de la Nación.</li>
  <li>Estudio de Mecánica de Suelos con fines de pavimentación, de acuerdo a lo previsto en el literal c) del artículo 21 del Reglamento de Licencias de Habilitación Urbana y Licencias de Edificación.</li>
  <li>Derecho de Pago.</li>
  <li>Identificar el pago de los aportes reglamentarios, según corresponda.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol>
  <li>Los planos son elaborados en forma georreferenciada al Sistema Geodésico Oficial, según lo establecido en la Ley Nº 28294, Ley que crea el Sistema Nacional Integrado de Catastro y su Vinculación con el Registro de Predios, y su Reglamento, aprobado por Decreto Supremo Nº 005-2006-JUS.</li>
  <li>No están consideradas en esta modalidad: Las habilitaciones urbanas proyectadas sobre terrenos que constituyan parte integrante del Patrimonio Cultural de la Nación declaradas por el Ministerio de Cultura.</li>
  <li>El administrado puede presentar en el expediente solo un (01) juego del FUHU y de la documentación técnica requerida. En ese supuesto, los otros dos (02) juegos requeridos, son presentados dentro de un plazo de tres (03) días, contado desde la notificación de la aprobación del proyecto de habilitación urbana.</li>
  <li>El cargo de ingreso del expediente constituye la Licencia Temporal para Habilitación Urbana, la cual está conformada por el FUHU y la documentación técnica, debidamente sellados con la recepción y el número del expediente asignado. La Licencia Temporal para Habilitación Urbana, en la presente modalidad, solo autoriza a las obras preliminares que correspondan a los trabajos preparatorios, incluyendo las obras provisionales que se requieran para implementar la obra, previo al proceso de movimiento de tierras y excavación.</li>
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF.</li>
</ol>
        </div>
      `,
             "in-par": `
        <h2 style="text-align: center;">
 	INDEPENDIZACIÓN O PARCELACIÓN DE TERRENOS RÚSTICOS UBICADOS DENTRO DEL ÁREA URBANA
</h2>
        <div style="text-align: justify;">
<ol>
  <li>
    <strong>DERECHO DE TRAMITACIÓN:</strong>
    <ol type="a">
      <li>Formulario Único (FUHU) en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por los profesionales responsables, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, de acuerdo a la modalidad correspondiente.</li>
      <li style="color: darkgoldenrod;">En caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a habilitar y de ser el caso a edificar.</li>
      <li>Anexo E del FUHU: Independización de Terreno Rústico / Habilitación Urbana.</li>
      <li>Declaración Jurada de Inexistencia de Feudatarios.</li>
      <li>
        Documentación técnica compuesta por:
        <ul>
          <li>Plano de ubicación y localización del terreno matriz con coordenadas UTM.</li>
          <li>Plano del predio rústico matriz, indicando perímetro, linderos, áreas, curvas de nivel y nomenclatura original, según antecedentes registrales.</li>
          <li>Plano de Independización, señalando la parcela independizada y la(s) parcela(s) remanente(s), indicando perímetro, linderos, área, curvas de nivel y nomenclatura original según antecedentes registrales.</li>
          <li>Cuando corresponda, el Plano de parcelación identifica el número de parcelas con los sufijos del predio matriz.</li>
          <li>Memoria Descriptiva, indicando áreas, linderos y medidas perimétricas del predio matriz, del área independizada y del área remanente.</li>
        </ul>
      </li>
    </ol>
  </li>
</ol>

<p><strong>Notas:</strong></p>
<ol type="a">
  <li>Los planos deberán estar georreferenciados al Sistema Geodésico Oficial, según lo establecido en la Ley N° 28294.</li>
  <li>El Formulario y sus anexos deben ser debidamente firmados por el administrado y los profesionales que intervienen (Num. 7.1, art. 7 DS N°029-2019-VIV.).</li>
  <li>Toda la documentación técnica es firmada y sellada por el profesional responsable del proyecto, así como por el administrado. (Numeral 7.2, art. 7 del DS N°029-2019-VIVIENDA).</li>
  <li>En caso se solicite la independización de predios rústicos y la habilitación urbana en un solo procedimiento administrativo, el administrado debe presentar, además, los requisitos exigidos para el procedimiento administrativo de habilitación urbana que corresponda.</li>
</ol>
        </div>
      `,
             "ex-kit": `
        <h2 style="text-align: center;">
 	EXPEDICIÓN DE KID DE DOCUMENTOS CON FINES DE PRESCRIPCIÓN ADQUISITIVA DE DOMINIO
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde firmada por el titular del trámite.</li>
  <li>Memoria Descriptiva indicando el trámite suscrito por Arquitecto o Ingeniero Civil habilitado (Dos juegos en original).</li>
  <li>Planos de Localización, Ubicación y Perimétrico, suscrito por Arquitecto o Ingeniero Civil habilitado (Dos juegos en original).</li>
  <li>Identificar DNI de los supuestos posesionarios.</li>
  <li>Declaración Jurada Notarial de los solicitantes de posesionar el terreno durante 10 años mediante la posesión continua, pacífica y pública (documentación con una antigüedad no mayor a 90 días calendario).</li>
  <li>Declaración Jurada Notarial de tres (3) vecinos cercanos al predio (máximo una cuadra a la redonda), que acrediten la posible posesión del bien por el solicitante durante 10 años en forma continua, pacífica y pública (documento con una antigüedad no mayor a noventa (90) días calendario).</li>
  <li>Exhibir DNI de los tres (3) vecinos cercanos al predio.</li>
  <li>Copia fedateada del recibo de autoevalúo (10 años como mínimo).</li>
  <li>
    Pago de derechos:
    <ol type="a">
      <li>Asignación de Numeración Municipal por cada número solicitado.</li>
      <li>Certificado de Numeración Municipal por cada número solicitado.</li>
      <li>Certificado Negativo de Catastro.</li>
      <li>Certificado de Parámetros Urbanísticos y Edificatorios.</li>
      <li>Constancia de Posesión.</li>
      <li>Visación de planos y memoria descriptiva - Hasta 250.00 m².</li>
      <li>Visación de planos y memoria descriptiva - Entre 251.00 m² hasta 500.00 m².</li>
      <li>Visación de planos y memoria descriptiva - Mayor a 500 m².</li>
    </ol>
  </li>
</ol>

        </div>
      `,
             "vis-mem": `
        <h2 style="text-align: center;">
 	VISACIÓN DE PLANOS Y MEMORIA DESCRIPTIVA
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud dirigida al Alcalde (especificando la finalidad u objetivo de la visación).</li>
  <li>Identificar DNI del solicitante.</li>
  <li>Escritura Pública Notarial y/o Copia Literal de Dominio actual (especificar la finalidad u objetivo de la visación).</li>
  <li>Memoria descriptiva firmada por Arquitecto o Ingeniero Civil habilitado, dos juegos en original (especificando la finalidad u objetivo de la visación).</li>
  <li>Plano de Localización y Ubicación - Plano Perimétrico (acorde a Formato Ley N° 29090), dos juegos en original (especificando la finalidad u objetivo de la visación).</li>
  <li>Derecho de Pago.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol type="a">
  <li>El presente procedimiento administrativo se atiende en el marco de la base legal que se hace referencia.</li>
  <li>La visación de planos se realiza en el marco del Plan de Desarrollo Metropolitano o el Plan de Desarrollo Urbano respetando la sección de vía normada.</li>
</ol>
        </div>
      `,
             "re-ha-ed": `
        <h2 style="text-align: center;">
 	REGULARIZACIÓN DE HABILITACIÓN URBANA Y DE EDIFICACIONES EJECUTADAS SIN LICENCIA
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Formulario Único de Regularización (FUHU más FUHU - Recepción de Obras), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por el profesional responsable, en el que se consigne la información necesaria al procedimiento que se requiere iniciar, adjuntando copia del recibo del pago efectuado en el colegio profesional por derecho de revisión. El pago de tramitación de la licencia y los pagos por derecho de revisión se encuentran comprendidos en la determinación del derecho de tramitación, de acuerdo a lo establecido en el TUO de la Ley Nº 27444.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, la documentación con la que acredite que cuenta con derecho a realizar una habilitación urbana.</li>
  <li>Documentación técnica, firmada por el profesional constatador, compuesta por:
    <ol type="a">
      <li>Plano de ubicación con la localización del terreno con coordenadas UTM.</li>
      <li>Plano de lotización, conteniendo el perímetro del terreno; el diseño de la lotización, de las vías, ceras y bermas; y, las áreas correspondientes a los aportes. La lotización debe estar en concordancia con el Plan de Desarrollo Urbano - PDU aprobado por la Municipalidad Provincial correspondiente.</li>
      <li>Plano perimétrico y topográfico del terreno, incluyendo la referencia topográfica a la vía urbanizada más cercana existente o con aprobación de proyectos.</li>
      <li>Plano que indique los lotes ocupados y las alturas de las edificaciones existentes.</li>
      <li>Memoria descriptiva, indicando las manzanas de corresponder, las áreas de los lotes, la numeración y los aportes reglamentarios.</li>
    </ol>
  </li>
  <li>Copia del comprobante de pago de la multa por habilitar sin licencia. El valor de la multa es equivalente hasta el 10% del valor de la obra a regularizar tomando el promedio de los valores unitarios oficiales de edificación a la fecha de su ejecución y de la fecha de solicitud de la regularización.</li>
  <li style="color: darkgoldenrod;">En caso que se cuente con estudios preliminares aprobados, no corresponde presentar el plano de ubicación con la localización del terreno y el plano de lotización, debiendo presentar en su reemplazo:
    <ol type="a">
      <li>Resolución y planos de los estudios preliminares aprobados.</li>
      <li>Planos de Replanteo de la habilitación urbana, de corresponder.</li>
    </ol>
  </li>
</ol>

<p><strong>Para obtener Regularización de Edificaciones:</strong></p>

<ol start="6">
  <li>Formulario Único de Regularización (FUE más FUE - Conformidad de Obra y Declaratoria de Edificación), en tres (03) juegos originales, debidamente suscritos por el administrado y, en la sección que corresponda, por el profesional responsable, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar, adjuntando copia del recibo del pago efectuado por derecho de revisión al Colegio Profesional.</li>
  <li style="color: darkgoldenrod;">En el caso que el administrado no sea el propietario del predio, debe presentar la documentación que acredite que cuenta con derecho a edificar.</li>
  <li>Documentación técnica, firmada por el profesional constatador, compuesta por:
    <ol type="a">
      <li>Plano de ubicación y localización del lote.</li>
      <li>Planos de arquitectura (planta, cortes y elevaciones).</li>
      <li>Memoria descriptiva.</li>
    </ol>
  </li>
  <li>Carta de seguridad de obra, debidamente sellada y firmada por un ingeniero civil colegiado.</li>
  <li>Para regularización de remodelaciones, ampliaciones o demoliciones, copia del documento que acredite la declaratoria de fábrica o de edificación, con sus respectivos planos en caso no haya sido expedido por la Municipalidad; en su defecto, copia del Certificado de Conformidad o Finalización de Obra, o la Licencia de Obra o de Edificación de la construcción existente que no es materia de regularización.</li>
  <li style="color: darkgoldenrod;">En caso de demoliciones totales o parciales de edificaciones cuya declaratoria de fábrica se encuentre inscrita en el Registro de Predios, se acredita que sobre el bien no recaigan cargas y/o gravámenes; en su defecto, presentar la autorización del titular de la carga o gravamen.</li>
  <li>Copia del comprobante de pago de la multa por construir sin licencia. El valor de la multa es equivalente hasta el 10% del valor de la obra a regularizar tomando el promedio de los valores unitarios oficiales de edificación a la fecha de su ejecución y de la fecha de solicitud de la regularización.</li>
  <li style="color: darkgoldenrod;">En el caso que el predio esté sujeto al régimen de propiedad exclusiva y propiedad común, se adjunta la autorización de la Junta de Propietarios, siempre que esta se encuentre inscrita ante el Registro de Predios. De no estar inscrita o no estar actualizada la Junta de Propietarios y siempre que el proyecto no contravenga las normas vigentes, los parámetros urbanísticos y edificatorios, así como las condiciones de seguridad y funcionamiento, se presenta un documento suscrito por mayoría simple de los propietarios autorizando la ejecución de las obras.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol type="a">
  <li>Se recomienda que la presentación de la documentación técnica en archivo digital se realice en formato PDF.</li>
  <li>La resolución de Regularización que expida la municipalidad debe aprobar la Habilitación Urbana y la Recepción de Obras, así como la Edificación y la Conformidad de Obra y Declaratoria de Edificación, en conjunto.</li>
  <li>La Regularización de Edificaciones es aplicable cuando se trate de bienes integrantes del Patrimonio Cultural de la Nación, siempre que cumplan con la normativa vigente sobre la materia a la fecha de su construcción o, en caso que sea más favorable, con la normativa vigente.</li>
</ol>

        </div>
      `,
             "apro-ante-cons": `
        <h2 style="text-align: center;">
 	APROBACIÓN DE ANTEPROYECTO EN CONSULTA PARA LA MODALIDAD B - EVALUACIÓN PREVIA POR LA COMISIÓN TÉCNICA
</h2>
        <div style="text-align: justify;">
<ol>
  <li>FUE, en dos (02) juegos originales, debidamente suscrito por el administrado y, en la sección que corresponda, por el profesional proyectista, en el que se debe consignar la información necesaria al procedimiento que se requiere iniciar.</li>
  <li>Copia del recibo del pago efectuado por derecho de revisión al Colegio Profesional.</li>
  <li>Plano de ubicación y localización del lote.</li>
  <li>Planos de arquitectura (plantas, cortes y elevaciones) en escala 1/100.</li>
  <li>Plano de seguridad, que contenga las consideraciones de distancias de recorrido, aforo, anchos de pasillo y señalización correspondiente a la evacuación, de acuerdo a la modalidad de aprobación que corresponda. La revisión del plano de seguridad es efectuada por el delegado de la especialidad de Arquitectura de la Comisión Técnica.</li>
  <li>Memoria Descriptiva.</li>
</ol>

<p><strong>Notas:</strong></p>
<ol type="a">
  <li>La revisión del plano de seguridad es efectuada por el delegado de la especialidad de Arquitectura de la Comisión Técnica.</li>
  <li>La Municipalidad, a requerimiento del administrado, puede aprobar un Anteproyecto en Consulta bajo los alcances de una modalidad superior a la que corresponda al proyecto, debiendo exigirse el derecho de revisión respectivo.</li>
</ol>
        </div>
      `,
             "asig-fin": `
        <h2 style="text-align: center;">
 	ASIGNACIÓN DE NUMERACIÓN DE FINCA MUNICIPAL
</h2>
        <div style="text-align: justify;">
<ol>
  <li>Solicitud simple indicando los ingresos a la edificación y a las unidades inmobiliarias resultantes del proyecto aprobado, señalando el número de recibo y la fecha del pago efectuado por el derecho de trámite correspondiente.</li>
  <li>Identificar DNI del propietario.</li>
  <li>Pago por derecho de asignación de número por cada puerta.</li>
  <li>Copia del título de propiedad, o solo para casos excepcionales de instalación de servicios básicos se acreditará con Certificado de Posesión otorgado por la Municipalidad Provincial de Huancayo, la misma que será de carácter provisional.</li>
  <li>Plano de ubicación y localización debidamente firmado por el profesional responsable.</li>
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
