<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Econs'peru - Enlaces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJ8u7uB2Gg+22HuwIz4zUj5J5VjYwU2hK5lF3WlU5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Estilos personalizados */
        body {
            background-color: #b69d88; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .linktree-container {
            max-width: 400px; 
            width: 100%;
            background-color: #d9d9d9; 
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        /* Contenedor del logo */
        .logo-container {
            width: 100px; 
            height: 100px; 
            margin: 0 auto 15px; 
            border-radius: 50%; 
            overflow: hidden; 
            border: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* === CAMBIO N° 1 === */
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: fill; /* 'fill' ESTIRA la imagen para llenar el cuadro */
            border-radius: 0; 
        }

        .btn-social {
            text-align: left;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 1.1rem;
            color: #333;
            background-color: #f8f9fa; 
            border: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: background-color 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn-social:hover {
            background-color: #e9ecef;
            color: #333;
        }
        .btn-social i {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        .linktree-footer a {
            color: #888;
            font-size: 0.9rem;
            text-decoration: none;
            margin: 0 5px;
        }
        
        .dropdown-menu.w-100 {
            width: 100% !important; 
        }

        /* --- ESTILOS PARA IMÁGENES LATERALES (SOLO PC) --- */
        
        .side-image {
            display: none; 
        }
        
        @media (min-width: 992px) { 
            .side-image {
                display: block; 
                width: 300px; 
                height: 500px; 
                
                /* === CAMBIO N° 2 === */
                object-fit: fill; /* 'fill' ESTIRA la imagen para llenar el cuadro */
                
                border-radius: 15px;
                margin: 0 40px; 
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
        }
        
    </style>
</head>
<body> 

<img src="../images/plano_int.png" class="side-image" alt="Decoración izquierda">


<div class="linktree-container text-center">

    <div class="logo-container">
        <img src="../images/logo_f.png" class="profile-img" alt="Logo de E'cons Perú">
    </div>

    <h2 class="h5 mb-0">econsperu2022@gmail.com</h2>
    <p class="text-muted mb-4">Econs'peru</p>

    <div class="d-grid gap-2">

        <div class="dropdown">
            <button class="btn btn-social dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span><i class="fab fa-whatsapp"></i> WhatsApp</span>
            </button>
            
            <ul class="dropdown-menu w-100">
                <li>
                    <a class="dropdown-item" href="https://wa.me/51920116220?text=Hola%20necesito%20ayuda%20en%20tramites%20municipales" target="_blank">
                        Ayuda en trámites municipales
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="https://wa.me/51920116220?text=Quisiera%20agendar%20una%20cita" target="_blank">
                        Quisiera agendar una cita
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="https://wa.me/51920116220?text=Podrian%20ayudarme%20en%20remodelar%20mi%20vivienda" target="_blank">
                        Ayuda para remodelar mi vivienda
                    </a>
                </li>
            </ul>
        </div>
        
        <a href="https://www.instagram.com/econstperu?igsh=Y2Ixb3Rjeng4N3Ay" target="_blank" class="btn btn-social">
            <span><i class="fab fa-instagram"></i> Instagram</span>
            <i class="fas fa-ellipsis-v text-muted"></i>
        </a>

        <a href="https://www.facebook.com/profile.php?id=100083054236495" target="_blank" class="btn btn-social">
            <span><i class="fab fa-facebook-f"></i> Facebook</span>
            <i class="fas fa-ellipsis-v text-muted"></i>
        </a>
        
        <a href="https://www.tiktok.com/@econstperu" target="_blank" class="btn btn-social">
            <span><i class="fab fa-tiktok"></i> TikTok</span>
            <i class="fas fa-ellipsis-v text-muted"></i>
        </a>
<div class="mt-4">
            <p class="mb-0">
                <a href="URL_DE_LINKTREE_COMPLETO" class="text-decoration-none text-dark fw-bold">
                    Contacto: +51 920116220 - Melissa <br>
                    Dirección: Calle Real #1060 - Al frente de la municipalidad de El Tambo Nuevo
                </a>
            </p>
        </div>
    </div>
</div>

<img src="../images/fwfw.png" class="side-image" alt="Decoración derecha">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>