<?php
session_start();
if (isset($_SESSION["isvalid"]) == 0) {
    header("Location: ../forms/user/login.php");
}


?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/fonts.css">
    </head>
    <body>