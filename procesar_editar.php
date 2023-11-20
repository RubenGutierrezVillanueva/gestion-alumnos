<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumno_id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];

    // Valida los datos

    $sql = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', edad=$edad, email='$email' WHERE id=$alumno_id";

    if ($conn->query($sql) === TRUE) {
        echo "Alumno actualizado correctamente";
    } else {
        echo "Error al actualizar el alumno: " . $conn->error;
    }
} else {
    echo "Método de solicitud no válido";
}

header("Location: index.php");

$conn->close();
?>
