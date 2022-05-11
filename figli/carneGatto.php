<!-- private $tipo;
    private $prezzo;
    private $nome;
    private $registrato;
    private $carta;
    
    private $sconto;
    private $pagamento; -->

<?php
require __DIR__ . '/../index.php';

class CarneGatto extends Prodotto {
    private $gusto;
    private $animale;

    public function __construct(  ) {

    }
    parent::__construct( $_tipo, $_prezzo, $_nome, $_registrato, $_carta );
}
?>