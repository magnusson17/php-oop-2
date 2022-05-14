<?php
require __DIR__ . '/../traits/traitUtente.php';

class carta {

    use traitUtente;

    private $valida;

    public function __construct( $_nome, $_cognome, $_mail, $_scadenza ) {

        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setMail($_mail);

        $this -> setRegistrata($_scadenza);
    }

    // setter
    public function setRegistrata($_scadenza) {
        if( $_scadenza < 2022 ) {

            $this -> valida = true;
            return $this;
        } else {
            $this -> valida = false;
            return $this;
            throw new Exeption('Carta scaduta');
        }
    }

    // getter
    public function getRegistrata() {
        return $this -> valida;
    }
}
?>