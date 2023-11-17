<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            include("config.php");

            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                $alumno_id = $_GET['id'];

                // Obtener información del alumno
                $sql = "SELECT * FROM alumnos WHERE id = $alumno_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $alumno = $result->fetch_assoc();
        ?>
                    <h2>Editar Alumno</h2>
                    <form method="post" action="procesar_editar.php">
                        <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>" required><br>

                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" value="<?php echo $alumno['apellido']; ?>" required><br>

                        <label for="edad">Edad:</label>
                        <input type="number" name="edad" value="<?php echo $alumno['edad']; ?>" required><br>

                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?php echo $alumno['email']; ?>" required><br>

                        <input type="submit" value="Guardar Cambios">
                    </form>
        <?php
                } else {
                    echo "Alumno no encontrado";
                }
            } else {
                echo "ID de alumno no válido";
            }

            $conn->close();
        ?>
    </div>
</body>
</html>
