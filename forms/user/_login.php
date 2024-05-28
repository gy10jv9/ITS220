<?php
session_start();

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
        $user = $User->verify($user);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: register.php");
    exit;
}