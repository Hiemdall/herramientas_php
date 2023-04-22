<?php
// Conexión local
include("conexion.php");

// Obtener los valores de los campos a actualizar
$codigo = "123456";
$tipo = "Asiática";
$fecha = "12/9/2001";

// Consulta SQL para actualizar los campos
$sql = "UPDATE info SET tipo='$tipo', fecha='$fecha' WHERE codigo='$codigo'";

// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Los datos han sido actualizados correctamente.";
} else {
    echo "Error al actualizar los datos: " . mysqli_error($conn);
}

 // Cerrar la conexión a la base de datos
 mysqli_close($conn);
?>