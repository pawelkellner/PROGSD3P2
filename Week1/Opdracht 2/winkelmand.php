<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand integer</title>
</head>
<body>

<?php
$prijs = 1.25;
echo 'Prijs: ' . $prijs;
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>
    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal">><br><br>
    <input type="submit" name="submit" value="toevoegen" >
</form>
<p>Vul je geen action in dan wordt het formulier verwerkt door de huidige pagina".</p>

<?php

// Controleer of het formulier is verstuurd
if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];


    // Controleer of het aantal > 0 is.
    if ($aantal > 0 && $aantal <= 15) { 
        $finalePrijs = $prijs * $aantal;
        // Maak de berekening van de totaal prijs.
        echo nl2br("Gekozen product en totale prijs \n \n");
        echo nl2br("gekozen product: {$product}\n");
        echo nl2br("aantal producten: {$aantal}\n");
        echo nl2br("totale prijs: {$finalePrijs}\n");
        // Maak de teksten zoals gevraagd wordt.

    }if ($aantal >=16){
        echo "Voer een getal in onder de 16";
    }if ($aantal <0){
        echo "je mag geen getallen onder de min invullen";
    }

    /*
     * Werkt je formulier pas dan het formulier aan zodat je geen
     * negatieve aantallen kunt invullen.
     * Pas ook het formulier aan zodat je maximaal 15 kunt invoeren
     * bij het aantal.
     */

}
?>


</body>
</html>