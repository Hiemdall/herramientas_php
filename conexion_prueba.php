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


//************************************************
// Sentencia SQL para hacer una consulta
$sql = "SELECT * FROM info";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $sql);

// Verificar si la consulta se ejecutó correctamente
if (!$resultado) {
    die("La consulta falló: " . mysqli_error($conn));
}

// Recorrer los resultados de la consulta
while ($fila = mysqli_fetch_assoc($resultado)) {
    // hacer algo con los datos de cada fila
    echo $fila["id"] . " " . $fila["codigo"]. " " . $fila["tipo"] ." " . $fila["fecha"] . "\r\n\n";
}

// Liberar los resultados de la consulta
mysqli_free_result($resultado);
//************************************************

// Establecer el conjunto de caracteres a utilizar en la comunicación con la base de datos
mysqli_set_charset($conn, "utf8mb4");



//************************************************
mysqli_close($conn);
//************************************************