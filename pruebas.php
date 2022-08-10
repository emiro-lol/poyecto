<?php
    $nombre='ayudaywy';
    $apellido='muercielago';
    if($nombre!==false || $apellido!==false){
        if(strlen($nombre)<=5){
            echo 'string corto';
        }else{
            echo 'gucci';
        }
    }else{
        echo 'datos vacios';
    }
?>