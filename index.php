<?php
require_once 'Contenidos.php';
require_once 'Serie.php';
require_once 'Pelicula.php';
require_once 'Genero.php';
require_once 'Catalogo.php';


$catalogo = new Catalogo();

$serie1 = new Serie("Almas robadas", 2023, "Suecia", Genero :: Thriller, 1, 6);
$serie2 = new Serie("Autodefensa ", 2022, "España", Genero :: Comedia, 2, 5);
$serie3 = new Serie("Manhunt ", 2019, "Inglaterra", Genero :: Drama, 1, 3);

$pelicula1 = new Pelicula ("Vidas Pasadas", 2023, "Corea del Sur", Genero :: Drama, "Celine Song", 106);
$pelicula2 = new Pelicula ("Caro Diario", 1993, "Italia", Genero :: Comedia, "Nanni Moretti", 100);

$catalogo->agregarContenido($serie1);
$catalogo->agregarContenido($serie2);
$catalogo->agregarContenido($serie3);

$catalogo->agregarContenido($pelicula1);
$catalogo->agregarContenido($pelicula2);

$catalogo->mostrarCatalogoSeries ();
$catalogo->mostrarCatalogoPeliculas ();
$catalogo->obtenerSerieMasLarga ();
$catalogo->obtenerPeliMasCorta ();

?>