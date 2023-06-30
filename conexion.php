<?php 
$servername = "localhost";
$username = "root";
$password = "";
$bd = "login";
// Iniciar sesión (debe colocarse al comienzo del archivo antes de cualquier salida HTML)
// Crear conexión
$conn = new mysqli($servername, $username, $password, $bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}