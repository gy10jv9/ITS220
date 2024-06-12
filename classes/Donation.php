<?php
class Donation {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function add($donation) {
        $query = "INSERT INTO `tbl_donations` (fname, lname, contactnum, nationality, amount, brand, item, purchaseDate, quant, distributor, streetAddr, city, region, country, cardnum, expdate, ccv) 
                VALUES (:fname, :lname, :contactnum, :nationality, :amount, :brand, :item, :purchaseDate, :quant, :distributor, :streetAddr, :city, :region, :country, :cardnum, :expdate, :ccv)";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':fname', $donation["fname"], PDO::PARAM_STR);
        $stmt->bindParam(':lname', $donation["lname"], PDO::PARAM_STR);
        $stmt->bindParam(':contactnum', $donation["contactnum"], PDO::PARAM_STR);
        $stmt->bindParam(':nationality', $donation["nationality"], PDO::PARAM_STR);
        $stmt->bindParam(':amount', $donation["amount"], PDO::PARAM_INT);
        $stmt->bindParam(':brand', $donation["brand"], PDO::PARAM_STR);
        $stmt->bindParam(':item', $donation["item"], PDO::PARAM_STR);
        $stmt->bindParam(':purchaseDate', $donation["purchaseDate"], PDO::PARAM_STR);
        $stmt->bindParam(':quant', $donation["quant"], PDO::PARAM_INT);
        $stmt->bindParam(':distributor', $donation["distributor"], PDO::PARAM_STR);
        $stmt->bindParam(':streetAddr', $donation["streetAddr"], PDO::PARAM_STR);
        $stmt->bindParam(':city', $donation["city"], PDO::PARAM_STR);
        $stmt->bindParam(':region', $donation["region"], PDO::PARAM_STR);
        $stmt->bindParam(':country', $donation["country"], PDO::PARAM_STR);
        $stmt->bindParam(':cardnum', $donation["cardnum"], PDO::PARAM_STR);
        $stmt->bindParam(':expdate', $donation["expdate"], PDO::PARAM_STR);
        $stmt->bindParam(':ccv', $donation["ccv"], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function displayall() {
        $query = "SELECT * FROM `tbl_donations`";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    public function delete($id) {
        $query = "DELETE FROM tbl_donations
            WHERE donation_id = $id";

        $this->db->getConnection()->exec($query);
    }
    public function update($id, $donation) {
        $query = "UPDATE tbl_donations SET fname = :fname WHERE donation_id = :id";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':fname', $donation["fname"], PDO::PARAM_STR);
        $stmt->execute();
    }
    public function view($id) {
        $query = "SELECT * 
                FROM `tbl_members2`
                WHERE donation_id = :id
                LIMIT 1";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function search($searchTerm) {
        $searchTerm = "%$searchTerm%";
        $query = "SELECT * 
                FROM `tbl_donations`
                WHERE fname LIKE :search OR lname LIKE :search OR contactnum LIKE :search";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':search', $searchTerm, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>