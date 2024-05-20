<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dbConfig = require basePath('config/db.php');
    $db = new Database($dbConfig);

    $categoryTitle = $_POST['title'] ?? '';

    $params = [
        'title' => $categoryTitle,
    ];
    $category = $db->Query('insert into categories (title) Values (:title)', $params);

    header('Location: /category/listing');
    exit;
} else {
    loadView('category/create');
}
