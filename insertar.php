<?php
// Conexión local
include("conexion.php");

$codigo = "123456";
$tipo = "Asiática";
$fecha = "11/9/2001";

// Insertar los datos en la base de datos
$sql = "INSERT INTO info (codigo, tipo, fecha)
        VALUES ('$codigo', '$tipo', '$fecha')";

if ($conn->query($sql) === TRUE) {
  echo "Los datos se insertaron correctamente.";
} else {
  echo "Error al insertar los datos: " . $conn->error;
}


mysqli_close($conn);

?>