<?php

include "./config.php";

$db = new \MongoDB\Driver\BulkWrite;

$db->insert(['name' => 'Jon', 'age' => 25]);

$manager->executeBulkWrite('raiz.academicos', $db);
