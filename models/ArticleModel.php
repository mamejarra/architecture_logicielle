<?php

// Le modèle pour les articles interagit avec la table des articles dans la base de données.

class ArticleModel extends Model {
    
    // Récupère tous les articles de la table 'article'
    public function getArticles() {
        // Exécute une requête SQL pour sélectionner tous les articles
        $stmt = $this->db->query('SELECT * FROM article');
        // Retourne tous les résultats sous forme de tableau associatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère les articles d'une catégorie spécifique
    public function getArticlesByCategory($category) {
        // Prépare une requête SQL pour sélectionner les articles d'une catégorie spécifique
        $stmt = $this->db->prepare('SELECT * FROM article WHERE categorie = ?');
        // Exécute la requête avec le paramètre de catégorie fourni
        $stmt->execute([$category]);
        // Retourne tous les résultats sous forme de tableau associatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Récupère un article spécifique par son ID
    public function getArticleById($id) {
        // Prépare une requête SQL pour sélectionner un article par son ID
        $stmt = $this->db->prepare('SELECT * FROM article WHERE id = ?');
        // Exécute la requête avec le paramètre d'ID fourni
        $stmt->execute([$id]);
        // Retourne le résultat sous forme de tableau associatif
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
