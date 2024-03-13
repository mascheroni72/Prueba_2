<?php
Class Contenidos {
 
protected string $nombre;
protected int $anyoCreacion;
protected string $pais;
protected Genero $genero;

public function __construct(string $nombre, int $anyoCreacion, string $pais, Genero $genero){
    $this->nombre = $nombre;
    $this->anyoCreacion = $anyoCreacion;
    $this->pais = $pais;
    $this->genero = $genero;
}
public function getNombre () : string {
    return $this->nombre;
}
public function getAnyoCreacion () : int {
    return $this->anyoCreacion;
}
public function getPais () : string {
    return $this->pais;
}
public function getGenero () : Genero {
    return $this->genero;
}
}
?>