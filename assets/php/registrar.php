<?php

include("bd.php");

if(isset($_POST['register'])){
    $user = trim($_POST['name']);
    $mail = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    $consulta = "SELECT correo FROM usuario WHERE usuario='$mail'";
    $prueba = mysqli_query($connect,$consulta);
    if(!$prueba){
        ?> <script> 
            alert("Usuario ya está en uso"); 
            window.location='../../index.html';
        </script> <?php
    }else{
        
        $consulta = "INSERT INTO usuario(usuario, correo, contraseña) VALUES ('$user','$mail','$pass')";
        $resultado = mysqli_query($connect,$consulta);
        if($resultado){
            ?> <script> 
                alert("Usuario registrado correctamente"); 
                window.location='../../index.html';
            </script> <?php
        }else{
            ?> <script> 
                alert("Hubo un error al registrar al usuario"); 
                window.location='../../index.html';
            </script> <?php
        }
    }
}

?>