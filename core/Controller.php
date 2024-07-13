<?php
class Controller {
    // Méthode protégée pour charger un modèle et créer une instance de celui-ci
    protected function model($model) {
        // Inclure le fichier du modèle spécifié
        require_once '../models/' . $model . '.php';
        // Retourner une nouvelle instance du modèle
        return new $model();
    }

    // Méthode protégée pour charger une vue et y passer des données
    protected function view($view, $data = []) {
        // Extraire les données du tableau associatif en tant que variables individuelles
        extract($data);
        // Inclure le fichier de la vue spécifiée
        require_once '../views/' . $view . '.php';
    }
}
