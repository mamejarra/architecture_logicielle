<?php

class CategoryModel extends Model {
    
    public function getCategories() {
        $stmt = $this->db->query('SELECT * FROM categorie');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoryById($id) {
        $stmt = $this->db->prepare('SELECT * FROM categorie WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
