

<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];

    // Validar y sanitizar los datos según sea necesario

    $sql = "INSERT INTO alumnos (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', $edad, '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Alumno agregado correctamente";
    } else {
        echo "Error al agregar el alumno: " . $conn->error;
    }

    $conn->close();
}

?>
<!-- Botón para regresar a la lista de alumnos -->
<a href="index.php">Volver a la Lista de Alumnos</a>