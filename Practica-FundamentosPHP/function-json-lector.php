<?php
    //* SIMULACIÓN FORMATO JSON */
    $json = '[
        {"nombre":"Miguel", "apellido":"Hurtado"},
        {"nombre":"Sol", "apellido":"Salazar"},
        {"nombre":"Cielo", "apellido":"López"}
    ]';

    //* FUNCIÓN DE LECTURA DE ARCHIVOS .JSON */
    $resultado = json_decode($json);
    ///print_r($resultado); // Imprime como array la variable resultado

    foreach ($resultado as $persona) {
        //print_r($persona); // Imprime el contenido del array, es decir los objetos
        print_r($persona->nombre); // Imprime el valor del parámetro especificado
    }
?>