<?php

$getRoutes = [
    '/' => 'controllers/home.php',

    '/product/create' => 'controllers/product/create.php',
    '/product/update' => 'controllers/product/update.php',
    '/product/details' => 'controllers/product/details.php',
    '/product/delete' => 'controllers/product/delete.php',


    '/category/listing' => 'controllers/category/listing.php',
    '/category/details' => 'controllers/category/details.php',
    '/category/create' => 'controllers/category/create.php',
    '/category/update' => 'controllers/category/update.php',
    '/category/delete' => 'controllers/category/delete.php',
];

$postRoutes = [

    '/product/create' => 'controllers/product/create.php',
    '/product/update' => 'controllers/product/update.php',

    '/category/create' => 'controllers/category/create.php',
    '/category/update' => 'controllers/category/update.php',
];

$putRoutes = [];

$deleteRoutes = [];

$router->AddGetRoutes($getRoutes);
$router->AddPostRoutes($postRoutes);
$router->AddPutRoutes($putRoutes);
$router->AddDeleteRoutes($deleteRoutes);
