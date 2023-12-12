<?php 

if(!empty($_POST["registro"])){
    if(empty($_POST["clave"])){
        echo"Este campo esta vacio";
    }elseif(empty($_POST["categoria"])){
        echo "Este campo esta vacio";
    }elseif(empty($_POST["nombre_curso"])){
        echo "Este campo esta vacio";
    }elseif(empty($_POST["horas"])){
        echo "Este campo esta vacio";
    }elseif(empty($_POST["division"])){
        echo "Este campo esta vacio";
    }elseif(empty($_POST["clave"]) or empty($_POST["categoria"]) or empty($_POST["nombre_curso"]) or empty($_POST["horas"]) or empty($_POST["division"]) ) {
        echo "Uno de los campos estan vacios";
    }else{
        $clave=$_POST["clave"];
        $categoria=$_POST["categoria"];
        $nombre_curso=$_POST["nombre_curso"];
        $horas=$_POST["horas"];
        $division=$_POST["division"];
        $sql=$conexion->query(" insert into cursos (clave,categoria,nombre_curso,horas,division)values('$clave','$categoria','$nombre_curso',' $horas',' $division') ");
        if($sql==1){
            echo "Curso registrado";
        }else{
            echo "Error al registrar el curso";
        }
    }
}


?>