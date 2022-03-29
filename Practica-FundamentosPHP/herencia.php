<?php 
    class Persona {
        public $nombre; // Propiedades
        private $edad; // Solo se accede desde la misma clase que lo definió
        protected $altura; // Solo se accede a través de la misma clase y clases heredadas

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

    class Trabajador extends Persona{
        public $puesto; // Propiedad nueva
        public function presentacion() {
            echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
        }
    }

    $objTrabajador = new Trabajador();
    $objTrabajador->asignarNombre("Ángel R."); 
    $objTrabajador->puesto = "Programador";

    $objTrabajador->presentacion();