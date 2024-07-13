<?php

// Le modèle pour les catégories interagit avec la table des catégories dans la base de données.

class CategoryModel extends Model {
    
    // Récupère toutes les catégories de la table 'categorie'
    public function getCategories() {
        // Exécute une requête SQL pour sélectionner toutes les catégories
        $stmt = $this->db->query('SELECT * FROM categorie');
        // Retourne tous les résultats sous forme de tableau associatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère une catégorie spécifique par son ID
    public function getCategoryById($id) {
        // Prépare une requête SQL pour sélectionner une catégorie par son ID
        $stmt = $this->db->prepare('SELECT * FROM categorie WHERE id = ?');
        // Exécute la requête avec le paramètre d'ID fourni
        $stmt->execute([$id]);
        // Retourne le résultat sous forme de tableau associatif
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
