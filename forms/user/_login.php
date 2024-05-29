<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"]) && !empty($_POST["password"])) {
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
    header("Location: login.php");
    exit;
}