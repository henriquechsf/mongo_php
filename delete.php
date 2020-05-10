<?php

include "./config.php";

$db = new \MongoDB\Driver\BulkWrite;

$filter = ['name' => 'Jon'];

$db->delete($filter);

$manager->executeBulkWrite('raiz.academicos', $db);
