<?php
class Database {
    private $con;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        try {
            $db_host = 'localhost';
            $db_name = 'db_redcross';
            $db_user = 'root';
            $user_pw = '';

            $this->con = new PDO('mysql:host='. $db_host. '; dbname='. $db_name, $db_user, $user_pw);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->exec("SET CHARACTER SET utf8");
            echo "<script> console.log('[server]: Successfully connected to database!') </script>";
        } catch (PDOException $err) {
            die('[server]: Database connection failed: '. $err->getMessage());
        }
    }

    public function getConnection() {
        return $this->con;
    }
}
?>