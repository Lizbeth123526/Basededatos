<?php
$servername = "localhost";
$username = "id22199903_taks_12";
$password = "Agabriel2.0";
$dbname = "id22199903_tabla";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
