<?php
    $nombre = "";
    $radLenguaje = "";
    $boxPhp = "";
    $boxPython = "";
    $boxJavascript = "";
    $lsAnime = "";

    if($_POST) {
        $nombre = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
        $radLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";

        $boxPhp = (isset($_POST["boxPhp"])=="si") ? "checked":"";
        $boxPython = (isset($_POST["boxPython"])=="si") ? "checked":"";
        $boxJavascript = (isset($_POST["boxJavascript"])=="si") ? "checked":"";

        ///print_r($_POST["lsAnime"]);

        ///print_r($_POST);
        ///print_r($radLenguaje);
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
    <form action="valores-input-checkbox.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br/>
        <label for="genero">¿Te gusta?</label><br/>
        PHP 
        <input type="radio" <?= ($radLenguaje == "php")?"checked":""; ?>" name="lenguaje" value="Php" checked><br/>
        Python
        <input type="radio" <?= ($radLenguaje == "python")?"checked":""; ?>" name="lenguaje" value="Python"><br/>
        Javascript 
        <input type="radio" <?= ($radLenguaje == "javascript")?"checked":""; ?>" name="lenguaje" value="Javascript"><br/>

        <label>Estás aprendiendo: </label><br/>
        PHP: 
        <input type="checkbox" <?= $boxPhp ?> name="boxPhp" value="si" id=""><br/>
        Python: 
        <input type="checkbox" <?= $boxPython ?> name="boxPython" value="si" id=""><br/>
        Javascript: 
        <input type="checkbox" <?= $boxJavascript ?> name="boxJavascript" value="si" id=""><br/>

        <input type="submit" value="Enviar">
    </form>
    
    <?php if($_POST) { ?>
    <h1>Hola <?= $nombre; ?></h1>
    <h3>Tu lenguaje favorito es <?= $radLenguaje ?></h3>
    <h4>Estás aprendiendo: </h4><br/>
    <ul>
        <li> <?= ($boxPhp == "checked")?"PHP":""; ?> </li>
        <li> <?= ($boxPython == "checked")?"Python":""; ?> </li>
        <li> <?= ($boxJavascript == "checked")?"Javascript":""; ?> </li>
    </ul>
    <?php } ?>
</body>
</html>