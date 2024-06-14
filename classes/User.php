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
                $_SESSION["role"] = $result["role_id"];
                header("Location: ../../index.php");
                exit;
            } else {
                throw new Exception("Invalid password");
            }
        } else {
            throw new Exception("Invalid username");
        }
    }

    public function requestSuperAdminRole($user) {
        // kwaun ang id sng user depende sa username
        $query1 = "SELECT id FROM db_redcross.tbl_users WHERE username = ?";

        $stmt = $this->db->getConnection()->prepare($query1);
        $stmt->bindParam(1, $user["username"], PDO::PARAM_STR);
        $stmt->execute();

        // insert value sa tbl_approvalrequests
        $result = $stmt->fetch(PDO::FETCH_BOTH);

        $query2 = "INSERT INTO db_redcross.tbl_approvalrequests (user_id, type_id)
                    VALUES (? , 1)"; // 1 for super admin role

        $stmt = $this->db->getConnection()->prepare($query2);
        $stmt->bindParam(1, $result["id"], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function requestAdminRole($user) {
        // kwaun ang id sng user depende sa username
        $query1 = "SELECT id FROM db_redcross.tbl_users WHERE username = ?";

        $stmt = $this->db->getConnection()->prepare($query1);
        $stmt->bindParam(1, $user["username"], PDO::PARAM_STR);
        $stmt->execute();

        // insert value sa tbl_approvalrequests
        $result = $stmt->fetch(PDO::FETCH_BOTH);

        $query2 = "INSERT INTO db_redcross.tbl_approvalrequests (user_id, type_id)
                    VALUES (? , 2)"; // 2 for admin role
                    
        $stmt = $this->db->getConnection()->prepare($query2);
        $stmt->bindParam(1, $result["id"], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function getuserQuantity() {
        $query = "SELECT COUNT(*) FROM db_redcross.tbl_users";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_BOTH);

        return $result[0];
    }

    public function countallAdmin() {
        $query = "SELECT COUNT(*) 
            FROM `tbl_users`
            WHERE role_id = 2 OR role_id = 3";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
}