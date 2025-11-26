<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Econs'peru - Enlaces Navideños</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        /* Estilos generales */
        body {
    /* Ejemplo: Color rojo oscuro navideño */
    background-color: #8B0000; 
    
    /* Asegúrate de mantener estas propiedades de alineación */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    overflow-x: hidden; 
}


        .linktree-container {
            max-width: 400px; 
            width: 100%;
            background-color: rgba(217, 217, 217, 0.95); 
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 10;
            /* CAMBIO: Se eliminó el borde rojo (border: 2px solid #c0392b;) */
        }
        
        /* Logo - CAMBIOS AQUÍ */
        .logo-container {
            width: 150px; /* Hice el contenedor un poco más grande para que el logo respire */
            height: auto;
            margin: 0 auto 15px; 
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent; /* Fondo transparente */
            /* Se eliminaron borde, radius, overflow y shadow para que sea limpio */
        }
        .profile-img {
            width: 100%;
            height: auto; /* Ajuste automático */
            object-fit: contain; 
            /* Opcional: una sombra muy suave al logo mismo para que destaque del fondo gris */
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)); 
        }

        /* Botones Redes */
        .btn-social {
            text-align: left;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 1.1rem;
            color: #333;
            background-color: #f8f9fa; 
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }
        .btn-social:hover {
            background-color: #e9ecef;
            color: #c0392b; 
            transform: translateY(-2px);
        }
        .btn-social i {
            margin-right: 10px;
            font-size: 1.4rem; 
            width: 32px; 
            text-align: center; 
        }

        .linktree-footer a { color: #888; text-decoration: none; margin: 0 5px; font-size: 0.9rem; }
        .dropdown-menu.w-100 { width: 100% !important; }
        .contact-info { font-size: 0.9rem; color: #555; line-height: 1.5; }

        /* Imágenes Laterales PC */
        .side-image { display: none; }
        @media (min-width: 992px) { 
            .side-image {
                display: block; 
                width: 300px; 
                height: 500px; 
                object-fit: cover; 
                border-radius: 15px;
                margin: 0 40px; 
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
                z-index: 10;
                border: 3px solid white;
            }
        }

        /* =========================================
           EFECTO DE NIEVE (CSS)
           ========================================= */
        .snowflake {
            color: #fff;
            font-size: 1.2em; 
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px #000;
            position: fixed;
            top: -10%;
            z-index: 20; /* Nieve por encima del contenido */
            pointer-events: none; /* Nieve no bloquea clicks */
            user-select: none;
            cursor: default;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running;
        }
        @keyframes snowflakes-fall {
            0% { top: -10%; }
            100% { top: 100%; }
        }
        @keyframes snowflakes-shake {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(80px); }
        }
        
        .snowflake:nth-of-type(0) { left: 1%; animation-delay: 0s, 0s; }
        .snowflake:nth-of-type(1) { left: 10%; animation-delay: 1s, 1s; }
        .snowflake:nth-of-type(2) { left: 20%; animation-delay: 6s, .5s; }
        .snowflake:nth-of-type(3) { left: 30%; animation-delay: 4s, 2s; }
        .snowflake:nth-of-type(4) { left: 40%; animation-delay: 2s, 2s; }
        .snowflake:nth-of-type(5) { left: 50%; animation-delay: 8s, 3s; }
        .snowflake:nth-of-type(6) { left: 60%; animation-delay: 6s, 2s; }
        .snowflake:nth-of-type(7) { left: 70%; animation-delay: 2.5s, 1s; }
        .snowflake:nth-of-type(8) { left: 80%; animation-delay: 1s, 0s; }
        .snowflake:nth-of-type(9) { left: 90%; animation-delay: 3s, 1.5s; }
        .snowflake:nth-of-type(10) { left: 25%; animation-delay: 2s, 0s; }
        .snowflake:nth-of-type(11) { left: 65%; animation-delay: 4s, 2.5s; }

        /* =========================================
           ESTILOS VIDEO INTRO (OVERLAY)
           ========================================= */
        #video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 9999; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .video-wrapper {
            position: relative;
            width: 90%;
            max-width: 800px;
            text-align: center;
        }

        #intro-video {
            width: 100%;
            height: auto;
            max-height: 75vh;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .video-controls {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-video {
            padding: 10px 25px;
            font-size: 1rem;
            border-radius: 30px;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-sound {
            background-color: #c0392b; 
            color: white;
        }
        
        .btn-close-custom {
            background-color: #ffffff;
            color: #000;
        }

        .btn-video:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
        
    </style>
</head>
<body> 

<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
</div>

<div id="video-overlay">
    <div class="video-wrapper">
        <video id="intro-video" autoplay loop muted playsinline>
            <source src="../images/1_0.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
        
        <div class="video-controls">
            <button id="btn-sound" class="btn-video btn-sound" onclick="toggleSonido()">
                <i class="fas fa-volume-mute"></i> Activar Sonido
            </button>
            
            <button class="btn-video btn-close-custom" onclick="cerrarVideo()">
                <i class="fas fa-times"></i> Cerrar
            </button>
        </div>
    </div>
</div>

<img src="../images/plano_int.png" class="side-image" alt="Decoración izquierda">

<div class="linktree-container text-center">

    <div class="logo-container">
        <img src="../images/logo_econs_3.png" class="profile-img" alt="Logo de E'cons Perú">
    </div>

    <h2 class="h5 mb-0">econsperu2022@gmail.com</h2>
    <p class="text-muted mb-4">Econs'peru</p>

    <div class="d-grid gap-2">

        <div class="dropdown">
            <button class="btn btn-social dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <i class="fab fa-whatsapp" style="color: #25D366;"></i> 
                    <span>WhatsApp</span>
                </div>
            </button>
            <ul class="dropdown-menu w-100">
                <li><a class="dropdown-item" href="https://wa.me/51920116220?text=Hola%20necesito%20ayuda%20en%20tramites%20municipales" target="_blank">Ayuda en trámites municipales</a></li>
                <li><a class="dropdown-item" href="https://wa.me/51920116220?text=Quisiera%20agendar%20una%20cita" target="_blank">Quisiera agendar una cita</a></li>
                <li><a class="dropdown-item" href="https://wa.me/51920116220?text=Podrian%20ayudarme%20en%20remodelar%20mi%20vivienda" target="_blank">Ayuda para remodelar mi vivienda</a></li>
            </ul>
        </div>
        
        <a href="https://www.instagram.com/econstperu?igsh=Y2Ixb3Rjeng4N3Ay" target="_blank" class="btn btn-social">
            <div class="d-flex align-items-center">
                <i class="fab fa-instagram" style="color: #E1306C;"></i> <span>Instagram</span>
            </div>
            <i class="fas fa-ellipsis-v text-muted" style="width: auto;"></i>
        </a>

        <a href="https://www.facebook.com/profile.php?id=100083054236495" target="_blank" class="btn btn-social">
            <div class="d-flex align-items-center">
                <i class="fab fa-facebook-f" style="color: #1877F2;"></i> <span>Facebook</span>
            </div>
            <i class="fas fa-ellipsis-v text-muted" style="width: auto;"></i>
        </a>
        
        <a href="https://www.tiktok.com/@econstperu" target="_blank" class="btn btn-social">
            <div class="d-flex align-items-center">
                <i class="fab fa-tiktok" style="color: #000;"></i> <span>TikTok</span>
            </div>
            <i class="fas fa-ellipsis-v text-muted" style="width: auto;"></i>
        </a>

        <a href="PORTAFOLIO_ECONST_PERU_2025.pdf" target="_blank" class="btn btn-social">
            <div class="d-flex align-items-center">
                <i class="fas fa-file-pdf" style="color: #c0392b;"></i> <span>Ver Portafolio</span>
            </div>
            <i class="fas fa-ellipsis-v text-muted" style="width: auto;"></i>
        </a>

        <div class="mt-4">
            <p class="contact-info">
                <strong>Contacto:</strong> +51 920116220 - Melissa <br>
                <strong>Dirección:</strong> Calle Real #1060 - Al frente de la municipalidad de El Tambo - Nuevo Palacio Municipal
            </p>
        </div>
        
    </div>
</div>

<img src="../images/fwfw.png" class="side-image" alt="Decoración derecha">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    // Función para activar/desactivar sonido
    function toggleSonido() {
        var video = document.getElementById('intro-video');
        var btn = document.getElementById('btn-sound');
        
        if (video.muted) {
            video.muted = false; // Activa el sonido
            btn.innerHTML = '<i class="fas fa-volume-up"></i> Silenciar';
            btn.style.backgroundColor = "#ffc107"; // Amarillo
            btn.style.color = "#000";
        } else {
            video.muted = true; // Silencia
            btn.innerHTML = '<i class="fas fa-volume-mute"></i> Activar Sonido';
            btn.style.backgroundColor = "#c0392b"; // Rojo Navideño
            btn.style.color = "#fff";
        }
    }

    // Función para cerrar y eliminar el video
    function cerrarVideo() {
        var overlay = document.getElementById('video-overlay');
        var video = document.getElementById('intro-video');
        
        overlay.style.transition = "opacity 0.5s ease";
        overlay.style.opacity = "0";
        
        video.pause(); 

        setTimeout(function() {
            overlay.style.display = 'none';
        }, 500);
    }
</script>

</body>
</html>