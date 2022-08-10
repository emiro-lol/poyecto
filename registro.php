<?php
    include 'conexion.php';
    $nombre=$_POST['name'];
    $apellido=$_POST['surname'];
    $dni=$_POST['dni'];
    $correo=$_POST['mail'];
    $contrasena=$_POST['pass'];
    if($nombre!==false || $apellido!==false || $dni!==false || $correo!==false || $contrasena!==false){
        if(strlen($nombre)<=3){
            echo '
                <script>
                    window.location="../html/registro.html?data=falied"
                </script>
            ';
        }else{
            echo 'gucci';
        }
    }else{
        echo 'datos vacios';
    }
    $query="INSERT INTO users(nombre,apellido,correo,pass,DNI) 
            VALUES('$nombre', '$apellido' ,'$correo', '$contrasena', '$dni')"; 
    $verificar_dni = mysqli_query($conn, "SELECT * FROM users WHERE DNI='$dni' ");
    if (mysqli_num_rows($verificar_dni)>0){
        echo'
            <script>
                alert("Este DNI ya esta registrado, intenta con otro diferente");
                window.location="../html/registro.html";
            </script>
        ';
        exit();
    }
    $verificar_correo = mysqli_query($conn, "SELECT * FROM users WHERE correo='$correo' ");
    if (mysqli_num_rows($verificar_correo)>0){
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location="../html/registro.html";
            </script>
        ';
        exit();
    }
    $ejecutar=mysqli_query($conn, $query);
    if($ejecutar){
        echo '
            <script>
                alert("Usuario creado")
                window.location="../html/inicio.html"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Ha ocurrido un error intentelo de nuevo")
                window.location="../html/registro.html"
            </script>
        ';
    }
    mysqli_close($conn);
?>