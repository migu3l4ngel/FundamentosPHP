<?php
    $nombre = "";
    if($_POST) {
        $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="valores-input-text.php" method="post">
        <input type="text" name="nombre" id="">
        <input type="submit" value="Enviar"><br/>
        <!-- value mantendrá en el input el valor que hayamos enviado al servidor
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <input type="submit" value="Enviar"> -->
    </form>
    
    <?php if($_POST) { ?>
    <h1>Hola <?= $nombre; ?></h1>
    <?php } ?>
</body>
</html>