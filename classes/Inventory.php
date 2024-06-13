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

    public function displayall() {
        $query = "SELECT tbl_inventory.id, tbl_brands.brandName, tbl_items.itemName, tbl_inventory.purchaseDate, tbl_inventory.quantity, tbl_distributors.distributorName, tbl_inventory.description, tbl_inventory.remarks
                FROM tbl_inventory
                INNER JOIN tbl_brands ON tbl_inventory.brand_id = tbl_brands.id
                INNER JOIN tbl_items ON tbl_inventory.item_id = tbl_items.id
                INNER JOIN tbl_distributors ON tbl_inventory.distributor_id = tbl_distributors.id";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
}