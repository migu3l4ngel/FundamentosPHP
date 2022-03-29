<?php 
    define("LINEBREAK", "<br/>");

    $frutas = array("Fresa", "Pera", "Manzana");

    //* ERROR SYNTAX */
    //echo $frutas."<br/>";
    //print($frutas)."<br/>";
    //* CORRECT */
    //print_r($frutas);*/ // Imprimme => Array ( [0] => Fresa [1] => Pera [2] => Manzana )

    for ($i = 0; $i < count($frutas); $i++) {
        echo $frutas[$i].LINEBREAK;
    }

    for ($i = 0; $i < count($frutas); $i++) {
        echo $i.": ".$frutas[$i].LINEBREAK;
    }

    for ($i = 0; $i < count($frutas); $i++) {
        echo ($i+1).": ".$frutas[$i].LINEBREAK;
    }
?>