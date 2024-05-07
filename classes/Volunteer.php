<?php
class Volunteer {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function add($firstName) {
        $query = "INSERT INTO `tbl_members2` (firstName) 
                VALUES ('$firstName')";

        $this->db->getConnection()->exec($query);
    }
    public function displayall() {
        $query = "SELECT * FROM `tbl_members2`";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    public function delete($id) {
        $query = "DELETE FROM tbl_members2
            WHERE volunteer_id = $id";

        $this->db->getConnection()->exec($query);
    }
    public function update($id, $fname) {
        $query = "UPDATE tbl_members2 SET firstName = :fname WHERE volunteer_id = :id";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function view($id) {
        $query = "SELECT * 
                FROM `tbl_members2`
                WHERE volunteer_id = :id
                LIMIT 1";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>