<?php
    class UnaClase {
        public static function unMetodo() {
            echo "Hola soy un método estático.";
        }
    }

    $obj = new UnaClase();
    $obj->unMetodo();

    //**SOLO PARA MÉTODOS ESTÁTICOS*/
    unaClase::unMetodo(); // Referenciamos a la clase para acceder al método
?>