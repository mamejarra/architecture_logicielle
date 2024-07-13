<?php
class Model {
    protected $db;

    // Constructeur de la classe Model
    public function __construct() {
        // Inclure le fichier de configuration pour établir la connexion à la base de données
        require '../config/config.php';
        // Assigner l'objet PDO (connexion à la base de données) à la propriété protégée $db
        $this->db = $pdo;
    }
}
