<?php
Class Catalogo {

    public array $catalogoFilmin = [];

    public function agregarContenido($contenido) : void {
        $this->catalogoFilmin [] = $contenido;
    }
    public function mostrarCatalogoSeries () : void {
        echo "Te recomendamos las siguientes series de nuestro catálogo: " . PHP_EOL;
        foreach($this->catalogoFilmin as $catalogo) {
            if($catalogo instanceof Serie) {
            echo $catalogo->getNombre() . ", " . $catalogo->getAnyoCreacion() . ", " . $catalogo->getPais() . ", " . $catalogo->getGenero()->value . ", " . $catalogo->getNumTemporadas() . " temporada/s de " . $catalogo->getCapitulos() . " capítulos cada una" . PHP_EOL;
        }
    }
    }
    public function mostrarCatalogoPeliculas () : void {
        echo "También puedes disfrutar de una selección de nuestras mejores películas: " . PHP_EOL;
        foreach($this->catalogoFilmin as $catalogo) {
            if($catalogo instanceof Pelicula) {
            echo $catalogo->getNombre() . " de " . $catalogo->getDirector() . ", " .  $catalogo->getAnyoCreacion() . ", " . $catalogo->getPais() . ", " . $catalogo->getDuracion() . " minutos, " . $catalogo->getGenero()->value . PHP_EOL;
        }
    }
    }
    public function obtenerSerieMasLarga () : void {
    $serieMasLarga = 0;
    $tituloSerieLarga = "";
    foreach ($this->catalogoFilmin as $catalogo) {
        if($catalogo instanceof Serie) {
        if($catalogo->getCapitulos() > $serieMasLarga){
            $serieMasLarga = $catalogo->getCapitulos();
            $tituloSerieLarga = $catalogo->getNombre();
        }
    }
}
    echo "La serie con mayor número de capítulos es " . $tituloSerieLarga . " con un total de " . $serieMasLarga . " episodios". PHP_EOL;
}   
    public function obtenerPeliMasCorta () : void {
    $peliMasCorta = 9999;
    $tituloPeliMasCorta = "";
    foreach ($this->catalogoFilmin as $catalogo) {
        if($catalogo instanceof Pelicula) {
        if($catalogo->getDuracion () < $peliMasCorta){
            $peliMasCorta = $catalogo->getDuracion();
            $tituloPeliMasCorta = $catalogo->getNombre();
        }
    }
}
    echo "La película más corta de nuestro catálogo es " . $tituloPeliMasCorta . " con una duración de  " . $peliMasCorta . " minutos" . PHP_EOL;                  
    }
}
?>