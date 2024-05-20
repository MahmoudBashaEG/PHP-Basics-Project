<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);
var_dump($_FILES);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $productTitle = $_POST['title'] ?? '';
    $productDecription = $_POST['description'] ?? '';
    $productCategoryId = $_POST['category'] ?? '';

    $productImage = $_FILES['image'] ?? '';

    if ($productImage['error'] === UPLOAD_ERR_OK) {
        $fileName = uniqid() . '-' . $productImage['name'];
        UploadFile("public/images", $fileName, $productImage['tmp_name']);
        $dbSavingFilePath = '/' . 'images' . '/' . $fileName;

        var_dump($fileName);
        var_dump($dbSavingFilePath);
    } else {
        throw new Exception("Failed To Upload the FIle With the Name {$productImage['name']}");
    }


    $params = [
        'title' => $productTitle,
        'decription' => $productDecription,
        'categoryId' => $productCategoryId,
        'imagePath' =>  $dbSavingFilePath,
    ];
    $category = $db->Query('insert into products (title,description,imagePath,categoryId) 
    Values (:title,:decription,:imagePath,:categoryId)', $params);

    header('Location: /');
    exit;
} else {
    $categories = $db->Query('select * from categories')->fetchAll();

    loadView('product/create', [
        'categories' => $categories,
    ]);
}
