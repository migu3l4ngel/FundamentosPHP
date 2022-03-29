<?php     
    $space = "<br/>";
//ARRAY UNIDIMENSIONAL
    $autos_uni = array("Ford", "Toyota", "Honda");
    echo $autos_uni[2].$space;
    array_push($autos_uni, "Tesla");
    echo $autos_uni[3].$space ;
//ARRAY MULTIDIMENSIONAL
    $autos_multi = array(
        array("Ford", 22000, 2018),
        array("Toyota", 42000, 2017),
        array("Honda", 32000, 2016),
        array("Volvo", 23000, 2015),
        array("BMW", 52000, 2020)
    );
    $indiceAuto = 2;
    $indiceDato = 1;
    echo $autos_multi[$indiceAuto][$indiceDato].$space;

    echo '<strong>Auto: </strong>'.$autos_multi[$indiceAuto][0].$space.
    '<strong>Precio: </strong>$'.$autos_multi[$indiceAuto][1].$space.
    '<strong>Modelo: </strong>'.$autos_multi[$indiceAuto][2];
?>