<?php

    if($_POST) {
        print_r($_FILES["archivo"]["name"]);
        /* Función permite subir al servidor archivos
        Recibe 2 parámetros: 
            *Nombre del archivo original
            *Ruta donde se guardará el archivo
        */
        move_uploaded_file($_FILES["archivo"]["tmp_name"], $_FILES["archivo"]["name"]);

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
    <form action="save-file.php" enctype="multipart/form-data" method="post">
        <label for="archivo">Imagen: </label><br/>
        <input type="file" name="archivo" id="archivo"><br/>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>