<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = [
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => password_hash($_POST["password"], PASSWORD_BCRYPT), // Bcrypt nga algorythm. gamit password_verify()
        "requestSuperAdmin" => $_POST["requestSuperAdmin"],
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/User.php");

        $Database = new Database();
        $User = new User($Database);
        $User->register($user);

        // if nag request super admin nga role
        if ($user["requestSuperAdmin"] == 1) {
            $User->requestSuperAdminRole($user);
        } else {
            $User->requestAdminRole($user);
        }

        header("Location: login.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: register.php");
    exit;
}