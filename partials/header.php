<?php
session_start();
if (isset($_SESSION["isvalid"]) == 0) {
    echo $_SESSION["isvalid"];
    // header("Location: forms/user/login.php");
}
echo $_SESSION["isvalid"];
?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>
    <body>