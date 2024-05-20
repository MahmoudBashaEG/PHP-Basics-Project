<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id,
];
$product = $db->Query('select * from products where id = :id', $params)->fetch();

loadView('product/details', [
    'product' => $product
]);
