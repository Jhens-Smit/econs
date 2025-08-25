<?php
session_start();      // Inicia la sesión para poder destruirla
session_unset();      // Elimina todas las variables de sesión
session_destroy();    // Destruye la sesión completamente
header("Location: ../index.php"); // Redirige al login
exit();
?>
