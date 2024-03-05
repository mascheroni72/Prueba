<?php
class Cancion {
    
private string $nombre;
private float $duracion;
private Genero $genero;

private string $autor;

public function __construct (string $nombre, float $duracion, Genero $genero, string $autor) {
    $this->nombre = $nombre;
    $this->duracion = $duracion;
    $this->genero = $genero;
    $this->autor = $autor;
}
public function getNombre() : string {
    return $this->nombre;
}
public function getDuracion() : float {
    return $this->duracion;
}
public function getGenero() : Genero {
    return $this->genero;
}
public function getAutor() : string {
    return $this->autor;
}
}
?>