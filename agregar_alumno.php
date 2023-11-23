
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
    <link rel="icon" href="https://usmp.edu.pe/wp-content/uploads/2022/07/favicon_USMP.png" type="image/jpg">

    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

<div class="contenedor">
    <header> 
            <img src="logo.jpg" alt="Logotipo de Mi Sitio Web"  class="logo"> 
            <h1 class="header-h1"> Conviértete en el profesional que siempre soñaste:</h1>
            <h1 class="header-h1"> ¡La USMP te ayudará a lograrlo!</h1>
    </header>


   <div class="agregar-alumno"> 
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
            
            <div class="anterior">
            <button  onclick="atras()">Anterior</button>
        </div>
            
        </form>
        
    </div>
    

    
   
   <div >
            <footer>
                    <p>
                    JR. LAS CALANDRIAS N° 151 – 291
                    <br>
                    SANTA ANITA, LIMA – PERÚ. 
                    <br>
                    TELÉFONO: (511) 317-2130
                    <br>
                    
                    </p>
                    <p>
                    JR. LAS CALANDRIAS N° 151 – 291
                    <br>
                    SANTA ANITA, LIMA – PERÚ. 
                    <br>
                    TELÉFONO: (511) 317-2130
                    <br>
                    <a class="linkusmp" href="http://www.usmp.edu.pe" target="_blank">WWW.USMP.EDU.PE</a>

                    </p>
            </footer>
    </div>
    <script>
        function atras() {
        window.location.href = 'index.php';
        }
    </script>
 </div>  
 
</body>
</html>
