<?php
    // Declaramos la variable que almacenará el archivo
    $nombreArchivo = "Archivo 3.txt";
    // Almacenamos el contenido del archivo en la variable
    $contenidoArchivo = "Hola, esta es la función FWRITE";
    /* FOPEN abre un fichero o un URL, pero si el fichero 
    no existe se intenta crear.*/
    $archivoACrear = fopen($nombreArchivo, "w");
    /*Función FWRITE escribe dentro de un archivo 
    en modo binario seguro*/
    fwrite($archivoACrear, $contenidoArchivo);
    // Cierra un puntero a un archivo abierto
    fclose($archivoACrear);
?>