<?php
include('conexion.php');
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirigir al inicio de sesión si el usuario no ha iniciado sesión
}

// Obtener el nombre de usuario de la sesión
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Main</title>
</head>

<body>
    <center>
        <h2>Bienvenido, <?php echo $username; ?>!</h2>
        <br>
        <a href="salir.php"><input style="font-family: 
                                        'Poppins', sans-serif; font-size: 16px; 
                                        font-weight: 600;" 
                                        type="submit" 
                                        value="¡_CERRAR SESION_!"></a>
    </center>
</body>

</html>