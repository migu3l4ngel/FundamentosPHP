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
        //* FUNCIÓN REQUIRE*/
        /*inserta en nuestro script un código procedente de otro archivo,
        pero en caso de no existir el archivo o error en el mismo mostrará 
        un //!'E_COMPILE_ERROR' 
        y el script no se sigue ejecutando*/
        require "function-require.php";
    ?>
    <?php echo "Estoy en la página principal"; ?>
</body>
</html>