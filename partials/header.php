<?php
include("./classes/Database.php");
global $DB;
global $con;
$DB = new Database();
$DB->connectDB();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> My First Page </title>
        <link href="css/style.css" rel="stylesheet"/>
    </head>
    <body>