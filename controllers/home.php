<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$products = $db->Query('select * from products')->fetchAll();

loadView('home', [
    'products' => $products
]);
