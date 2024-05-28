<?php
class User {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function register($user) {
        $query = "INSERT INTO db_redcross.tbl_users (username, email, password)
                VALUES (?, ?, ?)";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $user["username"], PDO::PARAM_STR);
        $stmt->bindParam(2, $user["email"], PDO::PARAM_STR);
        $stmt->bindParam(3, $user["password"], PDO::PARAM_STR);
        $stmt->execute();
    }
}