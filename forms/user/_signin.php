<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = [
        "username" => $_POST["username"],
        "password" => $_POST["password"]
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/User.php");

        $Database = new Database();
        $User = new User($Database);
        $User->verify($user);

        header("Location: signin.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: register.php");
    exit;
}