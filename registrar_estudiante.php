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
    <title>REGISTRAR ESTUDIANTE</title>
</head>
<body>
    <div>
        <form action="../php/registro_de_Estudiante.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre"><br>
            <input type="text" name="apellido" placeholder="apellido"><br>
            <button type="submit" class="btn btn-primary">Registrar estudiantes</button>
        </form>
    </div>
</body>
</html>