<?php

$aanhef = array(
    "aanhef" => "Beste",
    "persoon" => "klant");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$ondertekening = array(
  "groet" => "Met vriendelijke groet,",
  "naam" => "Pawel Kellner",
  "functie" => "Directeur Webshop beheer"
);

/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */
echo '<pre>';
var_dump($aanhef);
echo '<pre>';
var_dump($korting);
echo '<pre>';
var_dump($ondertekening);
echo '</pre>';


/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */



/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */

$nieuwWoord = str_replace("[[product]]", "Appel", $korting["product"]);
$korting["product"] = $nieuwWoord;

/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */

$mergedArrays = array_merge($aanhef,$korting,$ondertekening);

/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */
echo '<pre>';
var_dump($mergedArrays);