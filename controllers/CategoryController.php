<?php

// Le contrôleur pour les catégories gère les actions liées aux catégories (index et show).

// Définition de la classe CategoryController qui hérite de la classe de base Controller
class CategoryController extends Controller {

    // Méthode index qui est généralement le point d'entrée par défaut
    public function index() {
        
        // Chargement du modèle des catégories pour accéder aux données des catégories
        $categoryModel = $this->model('CategoryModel');

        // Récupérer toutes les catégories
        $categories = $categoryModel->getCategories();

        // Afficher la vue 'categories/index' avec les données des catégories
        $this->view('categories/index', ['categories' => $categories]);
    }

    // Méthode show qui affiche les détails d'une catégorie spécifique
    public function show($id) {
        
        // Chargement du modèle des catégories pour accéder aux données des catégories
        $categoryModel = $this->model('CategoryModel');

        // Récupérer les détails de la catégorie en fonction de l'ID fourni
        $category = $categoryModel->getCategoryById($id);

        // Afficher la vue 'categories/show' avec les données de la catégorie
        $this->view('categories/show', ['category' => $category]);
    }
}
?>
