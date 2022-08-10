<?php
    try {
        $base=new PDO("mysql:host=localhost; dbname=proyecto","root","");
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM users WHERE correo=:login and pass=:password ";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["usuario_login"]));
        $pass=htmlentities(addslashes($_POST["pass_login"]));
        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$pass);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if($numero_registro==1){
            session_start();
            $_SESSION['login']=$_POST["usuario_login"];
            header("location:estudiantes.php");
        }else{
            header("location:../html/inicio.html");
        }
    } catch (PDOException $e) {
        echo'ERROR EN LA BASE DE DATOS',$e->getMessage();
    }
?>