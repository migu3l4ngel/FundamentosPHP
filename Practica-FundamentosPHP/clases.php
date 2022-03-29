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

    $objAlumno = new Persona(); // Instancia (creación de un objecto)
    $objAlumno->asignarNombre("Ángel"); // Llama al método (acción)
    
    echo $objAlumno->nombre; // Imprime la propiedad

    
    $objAlumno3 = new Persona();
    $objAlumno3->asignarNombre("Johnny");
    ///$objAlumno3->imprimirNombre();
    
    $objAlumno2 = new Persona();
    $objAlumno2->asignarNombre("Salvador");
    $objAlumno2->imprimirNombre();

    echo $objAlumno2->nombre;
    echo $objAlumno2->mostrarEdad();

?>