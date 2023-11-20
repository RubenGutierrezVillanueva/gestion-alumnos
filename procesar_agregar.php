
<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $email = $_POST["email"];

    // Valida los datos

   
    $sql = "INSERT INTO alumnos (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', $edad, '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Alumno agregado correctamente";
    } else {
        echo "Error al agregar el alumno: " . $conn->error;
    }
    header("Location: index.php");

    $conn->close();
} 

?>

        
        