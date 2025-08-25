<?php
session_start();
$error_message = '';
$show_login_directly = false;

if (isset($_SESSION['error_login'])) {
    $error_message = $_SESSION['error_login'];
    unset($_SESSION['error_login']);
    $show_login_directly = true; // Activar login directo si hubo error
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Iniciar sesión</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style/index.css">
</head>
<body class="bg-dark text-white d-flex align-items-center justify-content-center min-vh-100">

  <!-- Pantalla de video centrado -->
  <div id="intro-video-container" class="text-center <?= $show_login_directly ? 'd-none' : '' ?>">
    <video id="intro-video" autoplay muted width="400" height="auto" style="border-radius: 15px;">
      <source src="images/vid_1.mp4" type="video/mp4">
      Tu navegador no soporta video.
    </video>
  </div>

  <!-- Contenedor del login -->
  <main id="login-container" class="container <?= $show_login_directly ? '' : 'd-none' ?>">
    <div class="card login-card p-4 p-md-5 bg-white text-dark mx-auto" style="max-width: 400px;">
      <div class="text-center mb-4">
        <div class="brand-circle mx-auto mb-2">
          <img src="images/logo_f.png" alt="Logo" class="img-fluid">
        </div>
        <h1 class="h4 mb-1">E'CONST PERU</h1>
        <p class="text-secondary mb-0">Inicia sesión para continuar</p>
      </div>

      <form class="needs-validation" action="controlador/login.php" method="POST" novalidate>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="email" required />
          <label for="email">Correo electrónico</label>
        </div>

        <div class="mb-2 position-relative">
          <div class="form-floating">
            <input type="password" class="form-control pe-5" name="password" id="password" required />
            <label for="password">Contraseña</label>
            
            <button class="btn position-absolute top-50 end-0 translate-middle-y me-2 p-0 border-0"
              type="button" id="togglePassword" style="width: 40px; height: 40px;">
              <i class="bi bi-eye" id="toggleIcon" aria-hidden="true"></i>
            </button>
          </div>
          <?php if (!empty($error_message)): ?>
            <div class="text-danger mt-1"><?= $error_message ?></div>
          <?php endif; ?>
        </div>

        <div class="d-grid gap-2">
          <button class="btn btn-primary btn-lg" type="submit">Iniciar sesión</button>
        </div>
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const hasError = <?= $show_login_directly ? 'true' : 'false' ?>;

    if (!hasError) {
      const video = document.getElementById('intro-video');
      const introContainer = document.getElementById('intro-video-container');
      const loginContainer = document.getElementById('login-container');
      video.playbackRate = 2.5;
      video.onended = () => {
        introContainer.style.display = 'none';
        loginContainer.classList.remove('d-none');
      };
    }

    const toggleBtn = document.getElementById('togglePassword');
    const pwdInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    toggleBtn.addEventListener('click', () => {
      const isPassword = pwdInput.getAttribute('type') === 'password';
      pwdInput.setAttribute('type', isPassword ? 'text' : 'password');
      toggleIcon.classList.toggle('bi-eye');
      toggleIcon.classList.toggle('bi-eye-slash');
    });
  </script>
</body>
</html>
