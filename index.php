<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

L'e-commerce vende prodotti per gli animali.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->

<?php 
 
class Prodotto {
    private $tipo;
    private $prezzo;
    private $nome;
    private $registrato;
    private $carta;
    
    private $sconto;
    private $pagamento;

    // construct
    public function __construct( $_tipo, $_prezzo, $_nome, $_registrato, $_carta ) {
        $this -> setTipo($_tipo);
        $this -> setPrezzo($_prezzo);
        $this -> setNome($_nome);
        $this -> setRegistrato($_registrato);
        $this -> setRegistrato($_carta);
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

    public function setRegistrato($_registrato) {
        $this -> registrato = $_registrato;
        return $this;
    }

    public function setcarta($_carta) {
        $this -> carta = $_carta;
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

    public function getRegistrato() {
        return $this -> registrato;
    }

    public function getcarta() {
        return $this -> carta;
    }

    // functions

    // 1) sconto
    public function setSconto() {
        if( $this -> registrato = true ) {
            $this -> sconto = 0.2;
        } else {
            $this -> sconto = 1;
        }
        return $this;
    }

    public function getSconto() {
        return $this -> sconto;
    }

    // 2) carta valida/scaduta
    public function setPagamento() {
        if( $this -> carta = true) {
            $this -> pagamento = true;
        } else {
            $this -> pagamento = false;
        }
        return $this;
    }

    public function getPagamento() {
        return $this -> pagamento;
    }
}

$prova = new Prodotto ( 'qualsiasi', 30, 'prova', true, false );
$prova -> setSconto();
echo $prova -> getSconto();
?>