<?php
// Datos de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "astorga";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres a utilizar en la comunicación con la base de datos
mysqli_set_charset($conn, "utf8mb4");
?>