<?php
require_once 'UsuarioCorreo.php';

class Alumno extends UsuarioCorreo {
    private $promedio;
    private $semestre;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
                                $departamento, $promedio, $semestre) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->promedio = $promedio;
        $this->semestre = $semestre;
    }

    public function setPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }

    public function setSemestre($nuevoSemestre) {
        $this->semestre = $nuevoSemestre;
    }

    public function getNombreCompleto() {
        return "Alumno {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}

// Crear dos alumnos
$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("María", "Gomez", "Perez", 19, "Matemáticas", 8.7, 3);

// Mostrar los nombres completos
echo "Alumno 1: " . $alumno1->getNombreCompleto() . "<br>";
echo "Alumno 2: " . $alumno2->getNombreCompleto() . "<br>";
?>
