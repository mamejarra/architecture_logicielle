<?php
class CategoryController extends Controller {
    public function index() {
        $categoryModel = $this->model('CategoryModel');
        $categories = $categoryModel->getCategories();
        $this->view('categories/index', ['categories' => $categories]);
    }

    public function show($id) {
        $categoryModel = $this->model('CategoryModel');
        $category = $categoryModel->getCategoryById($id);
        $this->view('categories/show', ['category' => $category]);
    }
}
?>
