<?php
require __DIR__ . '/../traits/traitUtente.php';

class utente{

    use traitUtente;

    private $registrato;
    private $sconto;

    public function __construct( $_nome, $_cognome, $_mail, $_registrato ) {

        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setMail($_mail);

        $this -> setRegistrato($_registrato);

        $this -> setSconto($_registrato);
    }

    // setter
    public function setRegistrato($_registrato) {
        $this -> registrato = $_registrato;
        return $this;
    }

    public function setSconto($_registrato) {
        if( $_registrato == true ) {
            $this -> sconto = 0.8;
            return $this;
        } else {
            $this -> sconto = 1;
            return $this;
        }
    }

    // getter
    public function getRegistrato() {
        return $this -> registrato;
    }

    public function getSconto() {
        return $this -> sconto;
    }
}
?>