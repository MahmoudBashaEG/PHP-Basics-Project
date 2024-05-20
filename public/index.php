<?php
require '../helpers.php';

require basePath('UploadFilesService.php');

require basePath('Database.php');
require basePath('Router.php');

$router = new Router();
require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->Route($uri, $method);
