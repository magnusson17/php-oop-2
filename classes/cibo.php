<?php
require_once __DIR__ . '/prodotto.php';

class cibo extends prodotto {
    private $consistenza;
    private $scatola;

    public function __construct( $_tipo, $_prezzo, $_nome, $_animale, $_consistenza, $_scatola ) {
        
        parent::__construct( $_tipo, $_prezzo, $_nome, $_animale );
        $this -> setConsistenza($_consistenza);
        $this -> setScatola($_scatola);
    }

    // setter 
    public function setConsistenza($_consistenza) {
        $this -> consistenza = $_consistenza;
        return $this;
    }

    public function setScatola($_scatola) {
        $this -> scatola = $_scatola;
        return $this;
    }

    // getter
    public function getConsistenza() {
        return $this -> consistenza;
    }

    public function getScatola() {
        return $this -> scatola;
    }
}
?>