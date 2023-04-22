<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar datos de la base de datos en una tabla HTML</title>
</head>
<body>



<?php
// Conexión local
include("conexion.php");

// Sentencia SQL para hacer una consulta especifica

$sql = "SELECT * FROM info WHERE tipo = 'América'";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $sql);

// Verificar si la consulta se ejecutó correctamente
if (!$resultado) {
    die("La consulta falló: " . mysqli_error($conn));
}

// Crear una tabla HTML para mostrar los datos
echo "<table>";
echo "<tr><th>ID</th><th>Código</th><th>Tipo</th><th>Fecha</th></tr>";

// Recorrer los resultados de la consulta y agregarlos a la tabla HTML
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["codigo"] . "</td><td>" . $fila["tipo"] . "</td><td>" . $fila["fecha"] . "</td></tr>";
}

echo "</table>";

// Liberar los resultados de la consulta
mysqli_free_result($resultado);

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

</body>
</html>
