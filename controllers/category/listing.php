<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

$categories = $db->Query('select * from categories')->fetchAll();

loadView('category/listing', [
    'categories' => $categories
]);
