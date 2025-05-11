<?php
abstract class UsuarioCorreo {
private static $contadorID = 1;
private $id;
private $nombre;
private $apellidoPaterno;
private $apellidoMaterno;
private $edad;
private $departamento;
public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad,
$departamento) {
$this->id = self::$contadorID++;
$this->nombre = $nombre;
$this->apellidoPaterno = $apellidoPaterno;
$this->apellidoMaterno = $apellidoMaterno;
$this->edad = $edad;
$this->departamento = $departamento;
}
public function ____Nombre($nuevoNombre) {
$this->nombre = $nuevoNombre;
}
public function ____Edad($nuevaEdad) {
$this->edad = $nuevaEdad;
}
public function ____Departamento($nuevoDepartamento) {
$this->departamento = $nuevoDepartamento;
}
public function ____ID() {
return $this->id;
}
public function ____Edad() {
return $this->edad;
}
public function ____Departamento() {
return $this->departamento;
}
// Método abstracto para forzar que las clases hijas lo implementen
abstract public function obtenerNombreCompleto();
}
?>