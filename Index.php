<?php
require_once 'Discografica.php';
require_once 'Cancion.php';
require_once 'Genero.php';

$discografica = new Discografica();

$cancion1 = new Cancion ("Ahinoa", 180, Genero :: Pop, "Perez");
$cancion2 = new Cancion ("Wadu wadu", 145, Genero :: Rock, "Virus");
$cancion3 = new Cancion ("Una ola", 223, Genero :: Pop, "Perez" );
$cancion4 = new Cancion ("Agujero interior", 174, Genero :: Rock, "Virus");

$discografica->agregarCanciones ($cancion1);
$discografica->agregarCanciones ($cancion2);
$discografica->agregarCanciones ($cancion3);
$discografica->agregarCanciones ($cancion4);

$discografica->devolverAutorCanciones();
$discografica->obtenerCancionMasLarga();

?>