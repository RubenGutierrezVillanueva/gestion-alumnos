<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];

    // Realiza la eliminación del estudiante en la base de datos
    $sql = "DELETE FROM students WHERE id = ?";
    
    // Utiliza una sentencia preparada para evitar SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    
    if ($stmt->execute()) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al intentar eliminar el registro.";
    }

    $stmt->close();
}

// Redirecciona de nuevo a la página principal
header("Location: index.php");
exit();
?>

