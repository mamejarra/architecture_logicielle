<?php
// controllers : Contient les contrôleurs pour gérer les requêtes HTTP
// Le contrôleur pour les articles gère les actions liées aux articles (index et show).


// Définition du contrôleur des articles qui hérite de la classe de base Controller
class ArticleController extends Controller {

    // Méthode index qui est généralement le point d'entrée par défaut
    public function index() {
        
        // Chargement du modèle des catégories pour accéder aux données des catégories
        $categoryModel = $this->model('CategoryModel');

        // Chargement du modèle des articles pour accéder aux données des articles
        $articleModel = $this->model('ArticleModel');

        // Vérification si un paramètre de catégorie est passé dans l'URL
        // Si oui, conversion de ce paramètre en entier
        $category = isset($_GET['category']) ? intval($_GET['category']) : 0;

        // Si une catégorie valide est sélectionnée (ID > 0), récupérer les articles de cette catégorie
        if ($category > 0) {
            $articles = $articleModel->getArticlesByCategory($category);
        } 
        // Sinon, récupérer tous les articles
        else {
            $articles = $articleModel->getArticles();
        }

        // Récupérer toutes les catégories pour afficher dans la vue
        $categories = $categoryModel->getCategories();

        // Afficher la vue 'articles/index' avec les données des articles et des catégories
        $this->view('articles/index', ['articles' => $articles, 'categories' => $categories]);
    }
}
?>
