<?php
include("config.php");

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="tabla">

    <h2>Lista de Alumnos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
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
                    <td><a href='editar_alumno.php?id=" . $row['id'] . "'>Editar</a> | <a href='procesar_eliminar.php?id=" . $row['id'] . "'> Eliminar </a></td>;

                 </tr>";
        }
       
       
        ?>
    </table>
    <div class="boton">   
        <button onclick="window.location.href='agregar_alumno.php'">Agregar Alumno</button>
        
        <form action="procesar_eliminar.php" method="post">
                <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
        </form>
        
    </div>

</div>


</body>
</html>
