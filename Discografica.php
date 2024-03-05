<?php
class Discografica {
private array $cancionero = [];

public function agregarCanciones(Cancion $cancion) : void {
    $this->cancionero [] = $cancion;
}
public function devolverAutorCanciones() : void {
        echo "Los autores y las canciones son: " . PHP_EOL;
        foreach ($this->cancionero as $cancion) {
        echo "Nombre autor: " .  $cancion->getAutor() . " Canción: " . $cancion ->getNombre() . PHP_EOL; 
        }
        }
public function obtenerCancionMasLarga () : void {
    $cancionLarga = 0;
    $nombreLargo = "";
    foreach ($this->cancionero as $cancion) {
       if($cancion->getDuracion() > $cancionLarga) {
       $cancionLarga = $cancion->getDuracion();  
        $nombreLargo = $cancion->getNombre();
    }
    }
echo "La canción más larga es: " . $nombreLargo. " con una duración de " . $cancionLarga. " segundos" . PHP_EOL;
}
}
?>