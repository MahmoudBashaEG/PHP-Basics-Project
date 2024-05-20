<?php

$dbConfig = require basePath('config/db.php');
$db = new Database($dbConfig);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method'] === 'put') {

    $productId = $_POST['id'] ?? '';
    $productTitle = $_POST['title'] ?? '';
    $productDecription = $_POST['description'] ?? '';
    $productCategoryId = $_POST['category'] ?? '';


    $productImage = $_FILES['image'] ?? '';

    if ($productImage['error'] === UPLOAD_ERR_OK) {
        $fileName = uniqid() . '-' . $productImage['name'];
        UploadFile("public/images", $fileName, $productImage['tmp_name']);
        $dbSavingFilePath = '/' . 'images' . '/' . $fileName;
    } else {
        throw new Exception("Failed To Upload the FIle With the Name {$productImage['name']}");
    }

    $params = [
        'id' => $productId,
        'title' => $productTitle,
        'description' => $productDecription,
        'categoryId' => $productCategoryId,
        'imagePath' => $dbSavingFilePath,
    ];

    $db->Query('update products set title = :title, description = :description, categoryId = :categoryId, imagePath = :imagePath 
    where id = :id', $params);

    header('Location: /');
    exit;
} else {
    $id = $_GET['id'] ?? '';
    $params = [
        'id' => $id,
    ];
    $product = $db->Query('select * from products where id = :id', $params)->fetch();
    $categories = $db->Query('select * from categories')->fetchAll();
    loadView('product/update', [
        'product' => $product,
        'categories' => $categories,
    ]);
}
