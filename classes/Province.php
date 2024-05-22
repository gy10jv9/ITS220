<?php
class Province {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getProvince() {
        $query = "SELECT * FROM `refprovince`";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
}
?>