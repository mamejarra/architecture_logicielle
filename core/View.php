<?php

class View {
    // Méthode statique pour rendre une vue avec des données
    public static function render($view, $data = []) {
        // Extraire les variables du tableau $data pour les rendre accessibles dans la vue
        extract($data);
        // Inclure le fichier de vue spécifié
        require_once "../views/$view.php";
    }
}
?>
