<?php
/*
//*EJEMPLO 1
    if($_POST) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
    }
*/
//*EJEMPLO 2
    if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        echo "Hola ".$nombre." ".$apellido;
    }
?>
<!--
//*EJEMPLO 1
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hola <?= $nombre ?> (<?= $edad ?>)</h2>
    <form action="metodo-post.php" method="post">
        Nombre:
        <input type="text" name="nombre"><br/>
        Edad:
        <input type="text" name="edad"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
-->
<!DOCTYPE html>
<!-- //*EJEMPLO 2 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="metodo-post.php" method="post">
        Nombre:
        <input type="text" name="nombre"><br/>
        Apellido:
        <input type="text" name="apellido"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>