<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location:../html/inicio.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTUDIANTES</title>
    <link rel="stylesheet" type="text/css" href="../estilos/estudiantes.css">
</head>
<body>
    <nav class="barra-superior">
        <ul>
            <li class="nombre-usuario">
                NOMBRE:
                <?php
                    include 'conexion.php';
                    $correo=$_SESSION["login"];
                    if ($datos=mysqli_query($conn,"SELECT * FROM users WHERE correo='$correo'")){
                        $row=$datos->fetch_array(MYSQLI_ASSOC);
                        echo $row['nombre']." ".$row['apellido'];
                    }
                ?>
            </li>
            <li class="cerrar-session">
                <a href="cierre.php">Cerrar Sesion</a>
            </li>
        </ul> 
    </nav>
    <p>
        <table class="tabla" border="1" bgcolor='pink'>
            <tr>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>MATRICULA</td>
                <td>
                    <button type="button">
                        <a href="registrar_estudiante.php">
                            <img src="../media/plus.png" alt="plus_simbol" width="10px" height="10px" >
                        </a>
                    </button>
                </td>
                </div>
            </tr>
        </table>
    </p>
</body>
</html>