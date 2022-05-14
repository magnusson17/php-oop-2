<?php

trait traitUtente {
    private $nome;
    private $cognome;
    private $mail;

    // setter
    public function setNome($_nome) {
        $this -> nome = $_nome;
        return $this;
    }

    public function setCognome($_cognome) {
        $this -> cognome = $_cognome;
        return $this;
    }

    public function setMail($_mail) {
        $this -> mail = $_mail;
        return $this;
    }

    // getter
    public function getNome() {
        return $this -> nome;
    }

    public function getCognome() {
        return $this -> cognome;
    }

    public function getMail() {
        return $this -> mail;
    }
}
?>