<?php
    $TITLE = "Fundamentos PHP";
    $edad = 25;
    $esProgramador = true;
    $archivo = 'texto.txt';
    if(isset($_GET['archivo'])) {
        $archivo = $_GET['archivo'];
        if($_GET['accion'] == 'Guardar') {
            file_put_contents($archivo, $_GET['texto']);
        } 
    }
    $texto = file_get_contents($archivo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TITLE?></title>
</head>
<body>
    <h1>Hola <?=$_GET['nombre']?></h1>
    <h3>Este es el curso de Fundamentos de PHP7</h3>
    <hr/>
    <h4>Prueba de PHP7</h4>
    <div class="main">
        <h2>Estructura básica de un link</h2>
        <?php echo "<img src='https://i.ibb.co/tYZbfx8/2022-03-24-22h31-39.png' alt='estructura-url'>";?>
        <?php echo "<img src='https://i.ibb.co/7CGXHRZ/2022-03-24-22h34-44.png' alt='estructura-url'>";?>
    </div>
    <h3>Editar Archivo de Texto</h3>
    <form action="">
        <label for="nombre">Tu nombre:</label>
        <input type="text" name="nombre"><br/>
        <label for="archivo">Nombre de Archivo:</label><br/>
        <input type="text" name="archivo" value="<?=$archivo?>"><br/>
        <textarea name="texto"><?=$texto?></textarea>
        <br/>
        <input type="submit" value="Guardar" name="accion">
        <input type="submit" value="Cargar" name="accion">
    </form>
</body>
</html>
<style>
    textarea {
        margin:0;width:307px;height:184px;
    }
</style>