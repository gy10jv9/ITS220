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

    public function verify($user) {
        $query = "SELECT * FROM db_redcross.tbl_users WHERE username = ?";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(1, $user["username"], PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_BOTH);

        if ($result) { // if may nakita nga result
            if (password_verify($user["password"], $result["password"])) { // check if equals sa encrypted nga password
                $_SESSION["isvalid"] = 1;
                header("Location: ../../index.php");
                exit;
            } else {
                throw new Exception("Invalid password");
            }
        } else {
            throw new Exception("Invalid username");
        }
    }
}