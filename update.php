<?php

include "./config.php";

$db = new \MongoDB\Driver\BulkWrite;

$db->update(['name' => 'Jon'], ['$set' => ['name' => 'Jon Doe']]);

$manager->executeBulkWrite('raiz.academicos', $db);
