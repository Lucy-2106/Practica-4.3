<?php
require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {
    private $gradoAcademico;
    private $antiguedad;

    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
                                $departamento, $gradoAcademico, $antiguedad) {
        parent::__construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    public function setGradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function setAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    public function getNombreCompleto() {
        return "{$this->gradoAcademico} {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}

// Crear dos docentes
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matemáticas", "Dr.", 10);

// Mostrar los nombres completos
echo "Docente 1: " . $docente1->getNombreCompleto() . "<br>";
echo "Docente 2: " . $docente2->getNombreCompleto() . "<br>";
?>
