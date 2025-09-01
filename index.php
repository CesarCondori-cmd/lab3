<?php

require_once "Autor.php";
require_once "ImprimirAutor.php";
require_once "Revista.php";
require_once "Libro.php";

$autorElenaWhite = new Autor('Elena G. de White', 'Americana');
echo $autorElenaWhite->getInfo();

$autorCesarCondori = new Autor("Cesar Daniel Condori Malpartida", "Brasilero");
echo $autorCesarCondori->getInfo();

$autorIsaacSurci = new Autor('Isaac Surci', 'Boliviano');
echo $autorIsaacSurci->getInfo();

$autorLuisChura = new Autor('Luis Chura', 'Boliviano');
echo $autorLuisChura->getInfo();

$ImprimirAutor = new ImprimirAutor();
echo $ImprimirAutor->getInfo($autorElenaWhite);

$revistaSpiderMan = new Revista('The Amazing Spider-Man', 2007, $autorCesarCondori, 'Anual');
$revistaTheFlash = new Revista('The Flash', 2000, $autorIsaacSurci, 'Anual');

$libroPrimerosEscritos = new Libro('Primeros Escritos', 1882, $autorElenaWhite);
$libroHarryPotter = new Libro('Harry Potter', 2000, $autorLuisChura);

$publicables = [$revistaSpiderMan, $revistaTheFlash, $libroPrimerosEscritos, $libroHarryPotter];

foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}