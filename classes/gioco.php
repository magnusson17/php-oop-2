<?php
require_once __DIR__ . '/prodotto.php';

class gioco extends prodotto {
    private $colore;
    private $peso;

    public function __construct( $_tipo, $_prezzo, $_nome, $_animale, $_colore, $_peso ) {
        
        parent::__construct( $_tipo, $_prezzo, $_nome, $_animale );
        $this -> setColore($_colore);
        $this -> setPeso($_peso);
    }

    // setter
    public function setColore($_colore) {
        $this -> colore = $_colore;
        return $this;
    }

    public function setPeso($_peso) {
        $this -> peso = $_peso;
        return $this;
    }

    // getter
    public function getColore() {
        return $this -> colore;
    }

    public function getPeso() {
        return $this -> peso;
    }
}
?>