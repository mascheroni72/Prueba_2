<?php
Class Serie extends Contenidos {

    protected int $numTemporadas;
    protected int $capitulos;
    
public function __construct ($nombre, $anyoCreacion, $pais, $genero, int $numTemporadas, int $capitulos) {
    parent::__construct($nombre, $anyoCreacion, $pais, $genero);
    $this->numTemporadas = $numTemporadas;
    $this->capitulos = $capitulos;
}
public function getNumTemporadas () : int {
    return $this->numTemporadas;
}  
public function getCapitulos () : int {
    return $this->capitulos;
}
}
?>