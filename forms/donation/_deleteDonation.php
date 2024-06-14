<?php
if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/Donation.php");

    $db = new Database();
    $Donation = new Donation($db);

    $Donation->delete($_GET['id']);
    header('Location: ../../dashboards/dash-donations.php');
    exit;
}