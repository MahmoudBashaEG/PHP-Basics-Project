<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$id = $_GET['id'] ?? '';

$params = [
    'id' => $id,
];
$category = $db->Query('delete from categories where id = :id', $params);

header('Location: /category/listing');
