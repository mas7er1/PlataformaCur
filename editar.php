<?php 

    include("conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php 
        if(isset( $_POST['actualizar'])){
            $id=$_POST['id'];
            $categoria=$_POST['categoria'];
            $nombre_curso=$_POST['nombre_curso'];
            $horas=$_POST['horas'];
            $division=$_POST['division'];

            $sql="update cursos set categoria='".$categoria."',nombre_curso='".$nombre_curso."', horas='".$horas."',
            division='".$division."' where id='".$id."'";
            $resultado=mysqli_query($conexion,$sql);

            if($resultado){
                echo"Los datos se actualizaron";
            }else{
                echo "No se actualizaron los datos";
            }

        }else{
        $id=$_GET['id'];
        $sql = "select * from cursos where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);
        $mostrar=mysqli_fetch_assoc($resultado);

        $id=$mostrar["id"];
        $categoria=$mostrar["categoria"];
        $nombre_curso=$mostrar["nombre_curso"];
        $horas=$mostrar["horas"];
        $division=$mostrar["division"];
    
        mysqli_close($conexion);
    ?> 
    <h1>Actualizar Cursos</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>categoria:</label>
        <input type="text" name="categoria" value="<?php echo $categoria; ?>"><br>
        <label>Nombre del curos:</label>
        <input type="text" name="nombre_curso" value="<?php echo $nombre_curso; ?>"><br>
        <label>horas:</label>
        <input type="text" name="horas" value="<?php echo $horas; ?>"><br>
        <label>division:</label>
        <input type="text" name="division" value="<?php echo $division; ?>"><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="actualizar" value="Actualizar"><br>
    </form>
    <?php 
        }    
    
    ?>
</body>
</html>