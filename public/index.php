<?php

// Le point d'entrée principal de notre application.

require_once '../config/config.php';
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../controllers/ArticleController.php';
require_once '../models/ArticleModel.php';
require_once '../models/CategoryModel.php';

// Récupère l'URL et la traite
$url = $_GET['url'] ?? 'article/index';
$url = explode('/', $url);

// Détermine le nom du contrôleur et l'action à exécuter
$controllerName = ucfirst($url[0]) . 'Controller';
$action = $url[1] ?? 'index';
$param = $url[2] ?? null;

// Instancie le contrôleur et appelle l'action appropriée
$controller = new $controllerName();
if ($param) {
    $controller->$action($param);
} else {
    $controller->$action();
}

?>
