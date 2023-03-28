<?php

interface compra {
    public function validar();
}

abstract class Carrito {
    abstract protected function registrar();

    public function mostrar() {
        echo 'Info';
    }

}

class Pokemon {

    const CONSTANTE = 'una constante';
    public $nombre;
    protected $cantidad;
    private $imagen;

    public function __construct( $nom, $can, $img ) {
        $this->nombre = $nom;
        $this->cantidad = $can;
        $this->imagen = $img;
    }

    public function listar() {
        return $this->nombre . $this->cantidad . $this->imagen;
    }
}

class Roca extends carrito implements compra {

    public $nombre;
    protected $cantidad;
    private $imagen;
    public $color;

    public function __construct( $nom, $can, $img, $col ) {
        $this->nombre = $nom;
        $this->cantidad = $can;
        $this->imagen = $img;
        $this->color = $col;
    }

    public function registrar() {
        echo 'registrando';
    }

    function validar() {
        echo 'validando';
    }
}

$onix = new Roca( 'onix', 16, 'img/onix.png', 'negro' );

echo $onix->mostrar();