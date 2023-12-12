<?php 
    include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/listado.css">
</head>
<body>
    <br>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Clave</td>
            <td>Categoria</td>
            <td>Nombre del curso</td>
            <td>Horas</td>
            <td>Division</td>
            <td>Editar Curso</td>
        </tr>
        <br>
        <?php 
        $sql="select * from cursos";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['clave'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['nombre_curso'] ?></td>
            <td><?php echo $mostrar['horas'] ?></td>
            <td><?php echo $mostrar['division'] ?></td>
            <td><?php echo "<a href='editar.php? id=".$mostrar['id']."'><button class='btn-donate'>Editar</button>" ?></td>
        </tr>


        <?php 
        }
        ?>
    </table>
</body>
</html>