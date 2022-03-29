<?php
    define("LINEBREAK", "<br/>");

    $fruta_num = array("fresa", "pera", "manzana");
    $fruta_asoc = array("n"=> "naranja", "k"=> "kiwi", "p"=> "plátano");
    ///print_r($fruta_num);
    ///print_r($fruta_asoc);

    echo $fruta_num[1].LINEBREAK;
    echo $fruta_asoc["k"].LINEBREAK;

    echo LINEBREAK;

    foreach($fruta_asoc as $indice => $valor) {
        echo $indice.LINEBREAK;
    }
    
    echo LINEBREAK;

    foreach($fruta_asoc as $indice => $valor) {
        echo $fruta_asoc[$indice].LINEBREAK;
    }

    echo LINEBREAK;

    foreach($fruta_asoc as $indice => $valor) {
        echo $valor.LINEBREAK;
    }

    echo LINEBREAK;

    foreach($fruta_asoc as $indice => $valor) {
        echo "La fruta ".$valor." tiene el índice: ".$indice.".".LINEBREAK;
    }

?>