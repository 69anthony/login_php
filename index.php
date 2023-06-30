<?php
include('conexion.php');
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    header('Location: main.php'); // Redirigir a la página principal si el usuario ha iniciado sesión
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores del formulario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consulta SQL para verificar las credenciales
        $sql = "SELECT * FROM login WHERE user = '$username' AND pass = '$password'";
        $result = $conn->query($sql);

        // Verificar si se encontraron resultados
        if ($result->num_rows === 1) {
            // Inicio de sesión exitoso, almacenar el nombre de usuario en la variable de sesión
            $_SESSION['username'] = $username;
            header('Location: main.php'); // Redirigir a la página principal después del inicio de sesión exitoso
        } else {
            echo "Credenciales inválidas. Por favor, inténtalo nuevamente.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="login-box">
        <h2 style="text-align: center; 
                font-family: 'Poppins', sans-serif; 
                color: #000000d0;">Sign Inc</h2>
        <br>
        <form action="" method="POST">
            <label for="username"></label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <input style="font-family: 'Poppins', sans-serif; 
                        font-size: 16px; 
                        font-weight: 600;" type="submit" value="Login">
        </form>
        <div class="login-links">
            <a href="#">Forgot Password</a>
            <span class="spacer"></span>
            <a href="#">Sign Up</a>
        </div>

    </div>
</body>

</html>
