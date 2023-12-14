<?php 
    include("conexion.php");
    include("registro_cursos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
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

        <div class="wave-group">
            <input type="text" name="nombre_curso" class="input">
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">N</span>
                <span class="label-char" style="--index: 1">o</span>
                <span class="label-char" style="--index: 2">m</span>
                <span class="label-char" style="--index: 3">b</span>
                <span class="label-char" style="--index: 4">r</span>
                <span class="label-char" style="--index: 5">e</span>
                <span class="label-char" style="--index: 6">d</span>
                <span class="label-char" style="--index: 7">e</span>
                <span class="label-char" style="--index: 9">l</span>
                <span class="label-char" style="--index: 10">C</span>
                <span class="label-char" style="--index: 11">u</span>
                <span class="label-char" style="--index: 12">r</span>
                <span class="label-char" style="--index: 13">s</span>
                <span class="label-char" style="--index: 14">o</span>
                </label><br>
        </div>
        <div class="wave-group">
            <input type="text" name="horas" class="input">
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">H</span>
                <span class="label-char" style="--index: 1">o</span>
                <span class="label-char" style="--index: 2">r</span>
                <span class="label-char" style="--index: 3">a</span>
                <span class="label-char" style="--index: 4">s</span>
                <span class="label-char" style="--index: 5">d</span>
                <span class="label-char" style="--index: 6">e</span>
                <span class="label-char" style="--index: 7">l</span>
                <span class="label-char" style="--index: 8">C</span>
                <span class="label-char" style="--index: 9">u</span>
                <span class="label-char" style="--index: 10">r</span>
                <span class="label-char" style="--index: 11">s</span>
                <span class="label-char" style="--index: 12">o</span>
            </label><br>
        </div>
        <div class="wave-group">
            <input type="text" name="division" class="input">
            <span class="bar"></span>
            <label class="label">
                <span class="label-char" style="--index: 0">D</span>
                <span class="label-char" style="--index: 1">i</span>
                <span class="label-char" style="--index: 2">v</span>
                <span class="label-char" style="--index: 3">i</span>
                <span class="label-char" style="--index: 4">s</span>
                <span class="label-char" style="--index: 5">i</span>
                <span class="label-char" style="--index: 6">o</span>
                <span class="label-char" style="--index: 7">n</span>
            </label> <br>
        </div>
        <input type="submit" value="Registrar" name="registro">
    </form>
    <a href="index.php">Salir</a>
        
</body>
</html>