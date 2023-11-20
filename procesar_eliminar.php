<?php
include("config.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $alumno_id = $_GET['id'];

    $sql = "DELETE FROM alumnos WHERE id = $alumno_id";

    if ($conn->query($sql) === TRUE) {
        // Redireccionar a la página principal después de la eliminación
        header("Location: index.php");
        exit();
    } else {
        echo "Error al eliminar el alumno: " . $conn->error;
    }
} else {
    echo "ID de alumno no válido";
}

$conn->close();




?>

