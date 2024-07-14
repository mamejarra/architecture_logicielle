<?php


class ArticleModel extends Model {
    
    public function getArticles() {
        $stmt = $this->db->query('SELECT * FROM article');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticlesByCategory($category) {
        $stmt = $this->db->prepare('SELECT * FROM article WHERE categorie = ?');
        $stmt->execute([$category]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getArticleById($id) {
        $stmt = $this->db->prepare('SELECT * FROM article WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
