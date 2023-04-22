<?php
// Conexión local
include("conexion.php");

$codigo = "123456";

// preparar la consulta para eliminar el registro
$stmt = $conn->prepare('DELETE FROM info WHERE codigo = ?');
$stmt->bind_param('s', $codigo);
$stmt->execute();

// ver si se eliminó el registro
if ($stmt->affected_rows > 0) {
  header("Location: index.html");
  exit();
} else {
  echo "No hay registro para eliminar"; 
  $error = "Error: No se pudo eliminar el registro";
}
mysqli_close($conn);


?>