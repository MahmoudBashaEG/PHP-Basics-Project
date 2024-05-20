<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id,
];
$db->Query('delete from products where id = :id', $params);

header('Location: /');
