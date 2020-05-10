<?php

include "./config.php";

$db = new \MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery('raiz.academicos', $db);

foreach ($cursor as $c) {
    // usei \n pois usei os comandos php no terminal
    echo $c->name . " - ";
    echo $c->age . "\n";
}
