<?php
class Inventory {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function add($item) {
        // search if may ga exist na nga brand name or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_brands WHERE brandName = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $item["brandName"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_brands WHERE brandName = ?";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["brandName"], PDO::PARAM_STR);
            $stmt->execute();
            $brand_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_brands (brandName) VALUES (?)";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["brandName"], PDO::PARAM_STR);
            $stmt->execute();
            $brand_id = $this->db->getConnection()->lastInsertId();
        }


        // search if may ga exist na nga item name or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_items WHERE itemName = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $item["itemName"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_items WHERE itemName = ?";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["itemName"], PDO::PARAM_STR);
            $stmt->execute();
            $item_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_items (itemName) VALUES (?)";
            
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["itemName"], PDO::PARAM_STR);
            $stmt->execute();
            $item_id = $this->db->getConnection()->lastInsertId();
        }


        // search if may ga exist na nga distributor name or wala pa
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_distributors WHERE distributorName = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $item["distributorName"], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchColumn();

        if ($result > 0) {
            $query = "SELECT id FROM db_redcross.tbl_distributors WHERE distributorName = ?";

            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["distributorName"], PDO::PARAM_STR);
            $stmt->execute();
            $distributor_id = $stmt->fetchColumn();
        } else {
            $query = "INSERT INTO db_redcross.tbl_distributors (distributorName) VALUES (?)";
            
            $stmt = $this->db->getConnection()->prepare($query);
            $stmt->bindParam(1, $item["distributorName"], PDO::PARAM_STR);
            $stmt->execute();
            $distributor_id = $this->db->getConnection()->lastInsertId();
        }


        $query = "INSERT INTO db_redcross.tbl_inventory (brand_id, item_id, purchaseDate, quantity, distributor_id, description, remarks)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $brand_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $item_id, PDO::PARAM_INT);
        $stmt->bindParam(3, $item["purchaseDate"], PDO::PARAM_STR);
        $stmt->bindParam(4, $item["quantity"], PDO::PARAM_INT);
        $stmt->bindParam(5, $distributor_id, PDO::PARAM_INT);
        $stmt->bindParam(6, $item["description"], PDO::PARAM_STR);
        $stmt->bindParam(7, $item["remarks"], PDO::PARAM_STR);
        $stmt->execute();
    }
}