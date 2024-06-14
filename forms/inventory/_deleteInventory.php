<?php
if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/Inventory.php");

    $db = new Database();
    $Inventory = new Inventory($db);

    $Inventory->delete($_GET['id']);
    header('Location: ../../dashboards/dash-inventory.php');
    exit;
}