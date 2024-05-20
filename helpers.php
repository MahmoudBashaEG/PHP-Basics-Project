<?php

function basePath($path = '', $isFolder = false)
{
    $fullPath = __DIR__ . '/' . $path;

    if ($isFolder) {
        $fullPath = $fullPath . '/';
    }
    return $fullPath;
}

function loadView($viewName = '', $data = [])
{
    $viewPath = basePath("views/{$viewName}.php");

    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View With the Path: {$viewPath} not found";
    }
}

function loadPartialView($partialViewName = '')
{
    $partialViewPath = basePath("views/partials/{$partialViewName}.php");

    if (file_exists($partialViewPath)) {
        require $partialViewPath;
    } else {
        echo "View With the Path {$$partialViewPath} not found";
    }
}

function Inspet($obj)
{
    echo '<pre>';
    var_dump($obj);
    echo '/<pre>';
}

function InspetAndDie($obj)
{
    echo '<pre>';
    var_dump($obj);
    echo '/<pre>';

    die();
}
