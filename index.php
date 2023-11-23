<?php
include("config.php");

$sql = "SELECT * FROM alumnos";
$result = $conn->query($sql);
?>

<?php




// Pagination variables
$records_per_page = 10; // Ajusta según sea necesario
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($page - 1) * $records_per_page;

// Fetch data with pagination
$sql = "SELECT * FROM alumnos LIMIT $start_from, $records_per_page";
$result = $conn->query($sql);


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>
    <link rel="icon" href="https://usmp.edu.pe/wp-content/uploads/2022/07/favicon_USMP.png" type="image/jpg">
    <title>Universidad San Martín de Porres</title>

</head>
<body>
    
<div class="contenedor">
        <header> 
            <img src="logo.jpg" alt="Logotipo de Mi Sitio Web"  class="logo"> 
            <h1 class="header-h1"> Conviértete en el profesional que siempre soñaste:</h1>
            <h1 class="header-h1"> ¡La USMP te ayudará a lograrlo!</h1>
        </header>
        
    <!-- Buscar Alumnos -->
<form action="buscar_alumnos.php" method="get" id="formBusqueda">
    <label for="nombre">Buscar Alumno:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre del Alumno">
    <button  type="submit" id="btnBuscar">Buscar</button>
</form>


  
    <!-- Lista de alumnos -->

    <div class="lista-alumnos">  

        <h2>Lista de Alumnos</h2>
        <table>
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


        <div class="pagination">
            <?php
            $sql = "SELECT COUNT(id) AS total FROM alumnos";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $total_pages = ceil($row["total"] / $records_per_page);

            for ($i = 1; $i <= $total_pages; $i++) {
                
                echo "<a href='index.php?page=$i'>$i</a> ";
            }      
            ?>
        </div>

        <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    
        .pagination a {
            padding: 8px 16px;
            margin: 0 5px;
            text-decoration: none;
            color: #333;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
    
        .pagination a:hover {
            background-color: #ddd;
        }
    
        .pagination a.active {
            background-color: #007BFF;
            color: white;
        }
    </style>
       





        <div class="boton">   
            <button onclick="window.location.href='agregar_alumno.php'">Agregar Alumno</button>
            
        </div>

    </div>
    

    <div class="footer">
                <footer>
                        <p>
                        JR. LAS CALANDRIAS N° 151 – 291
                        <br>
                        SANTA ANITA, LIMA – PERÚ. 
                        <br>
                        TELÉFONO: (511) 317-2130
                        <br>
                        <br>
                        </p>
                        <p>
                        JR. LAS CALANDRIAS N° 151 – 291
                        <br>
                        SANTA ANITA, LIMA – PERÚ. 
                        <br>
                        TELÉFONO: (511) 317-2130
                        <br>
                        <br>
                        <a class="linkusmp" href="http://www.usmp.edu.pe" target="_blank">WWW.USMP.EDU.PE</a>

                        </p>
                </footer>
    </div>
    
    
    
</div>

    



</body>


</html>
