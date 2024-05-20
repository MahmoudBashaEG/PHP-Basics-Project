<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id,
];
$category = $db->Query('select * from categories where id = :id', $params)->fetch();

loadView('category/details', [
    'category' => $category
]);
