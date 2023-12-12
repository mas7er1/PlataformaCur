<?php 

if(!empty($_POST["btningresar"])){
    if(empty($_POST["usuario"])and empty($_POST["password"])){
        echo"Los campos estan vacios";
    }else{
        $usuario=$_POST["usuario"]; //Nombre de los atributos de la BD
        $password=$_POST["password"];//Atributos de la BD
        $sql=$conexion->query("select * from usuarios where usuario='$usuario' and password='$password'");
        if($datos=$sql->fetch_object()){
            header("location:index.php");
        }else{
            echo"Acceso denegado";
        }
    }

}

?>