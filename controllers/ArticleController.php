<?php

class ArticleController extends Controller {

    public function index() {
        
        $categoryModel = $this->model('CategoryModel');

        $articleModel = $this->model('ArticleModel');
       
        $category = isset($_GET['category']) ? intval($_GET['category']) : 0;

        if ($category > 0) {
            $articles = $articleModel->getArticlesByCategory($category);
        } 
        else {
            $articles = $articleModel->getArticles();
        }

        $categories = $categoryModel->getCategories();

        $this->view('articles/index', ['articles' => $articles, 'categories' => $categories]);
    }
}
?>
