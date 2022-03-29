<?php 
    class Persona {
        public $nombre; // Propiedades
        private $edad; // Solo se accede desde la misma clase que lo definió
        protected $altura; // Solo se accede a través de la misma clase y clases heredadas

        //*MÉTODO CONSTRUCTOR */
        function __construct($nuevoNombre) {
            $this->nombre = $nuevoNombre;
        }

        public function asignarNombre($nuevoNombre) { // Métodos (acciones)

            $this->nombre = $nuevoNombre;

        }

        public function imprimirNombre() {

            echo "Hola ".$this->nombre;

        }

        public function mostrarEdad() {

            $this->edad = 20;
            return $this-> edad;

        }
    }

    $objAlumno = new Persona("Miguel"); // Instancia (creación de un objecto)
    ///$objAlumno->asignarNombre("Ángel"); 
    $objAlumno->imprimirNombre();