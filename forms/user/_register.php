<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = [
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/User.php");

        $Database = new Database();
        $User = new User($Database);
        $User->register($user);

        header("Location: signin.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: register.php");
    exit;
}