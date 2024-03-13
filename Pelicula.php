<?php
class Pelicula extends Contenidos {

    protected string $director;
    protected int $duracion;


    public function __construct ($nombre, $anyoCreacion, $pais, $genero,string $director, int $duracion ) {
        parent::__construct($nombre, $anyoCreacion, $pais, $genero); //Hereda las propiedades de la superclase Contenidos       
        $this->director = $director;
        $this->duracion = $duracion;
    }
    public function getDirector () : string {
        return $this->director;
    }   
    public function getDuracion () : int {
        return $this->duracion;
    }   
}
?>