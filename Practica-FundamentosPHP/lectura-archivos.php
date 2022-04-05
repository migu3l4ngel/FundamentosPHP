<?php
    //Almacenamos el archivo en una variable
    $archivo = "Archivo 1.txt";
    /*Función FOPEN abre un fichero o un URL, 
    pero si el fichero no existe se intenta crear.*/
    $archivoAbierto = fopen($archivo, "r");
    //Función FREAD lee un fichero en modo binario seguro
    $contenido = fread($archivo, filesize($archivo));

    echo $contenido;
?>