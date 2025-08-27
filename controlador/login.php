<?php
session_start();
include '../bd/conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM credenciales WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Si usas contraseñas en texto plano (NO recomendado):
    if (trim($password) === trim($user['password'])) {
        // Guardar sesión del usuario
        $_SESSION['usuario'] = $user['email']; // o $user['nombre'] si lo tienes
        header("Location: ../login.php");
        exit();
    } else {
        $_SESSION['error_login'] = "Contraseña incorrecta";
        header("Location: ../index.php");
        exit();
    }
} else {
    $_SESSION['error_login'] = "Usuario no encontrado";
    header("Location: ../index.php");
    exit();
}

$stmt->close();
$conn->close();
?>
