<?php  
    define("LINEBREAK", "<br/>");
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $division = $valorA / $valorB;
        $multiplicacion = $valorA * $valorB;

        echo "Suma: ".$suma.LINEBREAK.
        "Resta: ".$resta.LINEBREAK.
            "Division: ".$division.LINEBREAK.
            "Multiplicacion: ".$multiplicacion;
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
    <form action="operadores.php" method="post">
        Valor A:
        <input type="text" name="valorA" id=""><br/>
        Valor B:
        <input type="text" name="valorB" id=""><br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>