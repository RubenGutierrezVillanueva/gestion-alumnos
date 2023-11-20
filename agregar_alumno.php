
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

    $conn->close();

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

   <div> 
    <h2>Agregar Alumno</h2>
   
    <form method="post" action="procesar_agregar.php"   onsubmit="return confirm('¿Estás seguro de guardar los cambios?')">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <input type="submit" value="Agregar Alumno" >
        
        
        
    </form>
        <div class="anterior">
        <button  onclick="atras()">Anterior</button>
        </div>
    </div>
    

    <script>
        function atras() {
            window.location.href = 'index.php';
        }
    </script>
   
</body>
</html>
