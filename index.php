<?php
include("config.php");

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Lista de Alumnos</title>
</head>
<body>

<div>  

    <h2>Lista de Alumnos</h2>
    <table border="1">
        <tr>
            <th class="id">ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>


        <?php
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido']}</td>
                    <td>{$row['edad']}</td>
                    <td>{$row['email']}</td>
                    <td><a href='editar_alumno.php?id=" . $row['id'] . "' class='estilo-editar'> <i class='fas fa-edit'></i> </a> | <a href='procesar_eliminar.php?id=" . $row['id'] . "' class='estilo-eliminar' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\")'> <i class='fas fa-trash-alt'></i> </a></td>
                 </tr>";
        }

       
       
        ?>
    </table>

    <div class="boton">   
        <button onclick="window.location.href='agregar_alumno.php'">Agregar Alumno</button>
        
    </div>

</div>


</body>
</html>
