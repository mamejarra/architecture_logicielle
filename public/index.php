<?php

require_once '../config/config.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../controllers/ArticleController.php';
require_once '../models/ArticleModel.php';
require_once '../models/CategoryModel.php';

$url = $_GET['url'] ?? 'article/index';
$url = explode('/', $url);

$controllerName = ucfirst($url[0]) . 'Controller';
$action = $url[1] ?? 'index';
$param = $url[2] ?? null;

$controller = new $controllerName();
if ($param) {
    $controller->$action($param);
} else {
    $controller->$action();
}


?>
