<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //* FUNCIÓN INCLUDE*/
        /*inserta en nuestro script un código procedente de otro archivo, 
        si no existe dicho archivo o si contiene algún tipo de error 
        nos mostrará un //!'E_WARNING' 
        por pantalla y el script seguirá ejecutándose.*/
        include "function-include.php";
    ?>
    <?php echo "Estoy en la página principal"; ?>
</body>
</html>