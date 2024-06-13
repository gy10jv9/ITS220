<?php
session_start();
if (isset($_SESSION["isvalid"]) == false && basename($_SERVER["PHP_SELF"]) != "login.php" && basename($_SERVER["PHP_SELF"]) != "register.php") { // kung wala sa login.php or sa register.php
    header("Location: forms/user/login.php");
}
?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/fonts.css">
    </head>
    <body>