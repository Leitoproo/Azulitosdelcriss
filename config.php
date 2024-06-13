<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "registro";
$puerto = "3306";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $puerto);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>