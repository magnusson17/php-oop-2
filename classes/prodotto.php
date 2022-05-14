<?php 
 
class prodotto {
    private $tipo;
    private $prezzo;
    private $nome;
    private $animale;

    // construct
    public function __construct( $_tipo, $_prezzo, $_nome, $_animale ) {
        $this -> setTipo($_tipo);
        $this -> setPrezzo($_prezzo);
        $this -> setNome($_nome);
        $this -> setAnimale($_animale);
    }

    // setter
    public function setTipo($_tipo) {
        $this -> tipo = $_tipo;
        return $this;
    }

    public function setPrezzo($_prezzo) {
        $this -> prezzo = $_prezzo;
        return $this;
    }

    public function setNome($_nome) {
        $this -> nome = $_nome;
        return $this;
    }

    public function setAnimale($_animale) {
        $this -> animale = $_animale;
        return $this;
    }

    // getter
    public function getTipo() {
        return $this -> tipo;
    }

    public function getPrezzo() {
        return $this -> prezzo;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function getAnimale() {
        return $this -> animale;
    }
}
?>