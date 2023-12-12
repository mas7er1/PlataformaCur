<?php 
        include("conexion.php");
        include("registro_cursos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/cur_styles.css">
</head>
<body>
    <h1>Cursos</h1>
    <form action="" method="post">
        <div class="wave-group">
            <input type="text" name="clave" class="input">
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">C</span>
            <span class="label-char" style="--index: 1">l</span>
            <span class="label-char" style="--index: 2">a</span>
            <span class="label-char" style="--index: 3">v</span>
            <span class="label-char" style="--index: 4">e</span>
            </label><br>
        </div>

        <div class="wave-group">
            <input type="text" name="categoria" class="input">
            <span class="bar"></span>
            <label class="label">
            <span class="label-char" style="--index: 0">C</span>
            <span class="label-char" style="--index: 1">a</span>
            <span class="label-char" style="--index: 2">t</span>
            <span class="label-char" style="--index: 3">e</span>
            <span class="label-char" style="--index: 4">g</span>
            <span class="label-char" style="--index: 5">o</span>
            <span class="label-char" style="--index: 6">r</span>
            <span class="label-char" style="--index: 7">i</span>
            <span class="label-char" style="--index: 8">a</span>
            </label> <br>
        </div>
        <input type="text" placeholder="Nombre del curso" name="nombre_curso">
        <input type="text" placeholder="Horas del curso" name="horas">
        <input type="text" placeholder="Division" name="division">



        <input type="submit" value="Registrar" name="registro">
    </form>
    <a href="index.php">Salir</a>
        
</body>
</html>