<?php
include("./classes/Database.php");

global $con;
global $db;

$db = new Database();
$db->connectDB();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>
    <body>