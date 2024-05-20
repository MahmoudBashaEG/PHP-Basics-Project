<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method'] === 'put') {
    $categoryTitle = $_POST['title'] ?? '';
    $categoryTitleId = $_POST['id'] ?? '';


    $params = [
        'id' => $categoryTitleId,
        'title' => $categoryTitle,
    ];

    var_dump($params);
    $db->Query('update categories set title = :title where id = :id', $params);

    header('Location: /category/listing');
    exit;
} else {

    $id = $_GET['id'] ?? '';
    $params = [
        'id' => $id,
    ];
    $category = $db->Query('select * from categories where id = :id', $params)->fetch();

    loadView('category/update', [
        'category' => $category,
    ]);
}
