<?php
class Request {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getallRoleRequests() {
        $query = "SELECT * FROM db_redcross.tbl_approvalrequests 
                    WHERE type_id IN (1, 2)";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_BOTH);
    }
}