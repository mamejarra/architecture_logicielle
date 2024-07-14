
<?php
class Model {
    protected $db;

    public function __construct() {
        require '../config/config.php';
        $this->db = $pdo;
    }
}
