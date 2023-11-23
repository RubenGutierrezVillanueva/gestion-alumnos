<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://usmp.edu.pe/wp-content/uploads/2022/07/favicon_USMP.png" type="image/jpg">

    <title>Resultados de la Búsqueda</title>
    <link rel="stylesheet" href="style.css">

</head>


<body class="bodybuscar">
    





<?php


// Configuración de la conexion a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gestion_alumnos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexion
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>

<div class="resultado-container">





    <header class="headerbuscando">
        <img src="logo.jpg" alt="Logotipo de Mi Sitio Web"  class="logo"> 
            <h1 class="header-h1"> Conviértete en el profesional que siempre soñaste:</h1>
            <h1 class="header-h1"> ¡La USMP te ayudará a lograrlo!</h1>
    </header>
    <h1 class="resultadosbusqueda">Resultados de la Búsqueda</h1>

        <?php
    if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

            // Realizar la consulta SQL para buscar alumnos por nombre
            $sql = "SELECT * FROM alumnos WHERE nombre LIKE '%$nombre%'";
            $result = $conn->query($sql);

            // Mostrar los resultados
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Correo</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    // Imprimir informacion del alumno en una fila de la tabla
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["apellido"] . "</td>";
                    echo "<td>" . $row["edad"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>No se encontraron resultados para la búsqueda: $nombre</p>";
            }
        } else {
            echo "<p>Por favor, ingrese un nombre para realizar la búsqueda.</p>";
        }


        
        ?>

<?php


// Boton para volver a la vista principal
echo '<div class="volver-btn">';
echo '<a href="index.php"><button>Volver a la Vista Principal</button></a>';
echo '</div>';
?>
    </div>

    <!-- Cerrar la conexion a la base de datos -->
    <?php $conn->close(); ?>
</body>

</html>

