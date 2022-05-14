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

require __DIR__ . '/classes/utente.php';

$user = new utente( 'Papu', 'Gomez', 'papu-mail@gmail.com', true );

echo "<h3>" . "User" . "</h3>";
echo $user -> getNome() . "<br>";
echo $user -> getCognome() . "<br>";
echo $user -> getMail() . "<br>";
echo $user -> getRegistrato() . "<br>";

require __DIR__ . '/classes/cibo.php';

$croccantini = new cibo( 'cibo', 10, 'GnamGnam cat', 'gatto', 'solida', 'plastica' );

echo "<h3>" . "Croccantini" . "</h3>";
echo $croccantini -> getTipo() . "<br>";
echo $croccantini -> getPrezzo() . "<br>";
echo $croccantini -> getNome() . "<br>";
echo $croccantini -> getAnimale() . "<br>";
echo $croccantini -> getConsistenza() . "<br>";
echo $croccantini -> getScatola() . "<br>";

require __DIR__ . '/classes/gioco.php';

$ossoGomma = new gioco( 'gioco', 20, 'Osso grosso', 'cane', 'bianco', '500g' );

echo "<h3>" . "Pallina" . "</h3>";
echo $ossoGomma -> getTipo() . "<br>";
echo $ossoGomma -> getPrezzo() . "<br>";
echo $ossoGomma -> getNome() . "<br>";
echo $ossoGomma -> getAnimale() . "<br>";
echo $ossoGomma -> getColore() . "<br>";
echo $ossoGomma -> getPeso() . "<br>";
?>