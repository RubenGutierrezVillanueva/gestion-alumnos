<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];

    $sql = "INSERT INTO alumnos (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', $edad, '$email')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Alumno</title>
</head>
<body>
    <h2>Agregar Alumno</h2>
    <form method="post" action="procesar_agregar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Agregar Alumno">
    </form>
    
</body>
</html>
