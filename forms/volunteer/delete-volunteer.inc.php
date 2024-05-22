<?php
if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/Volunteer.php");

    $db = new Database();
    $Volunteer = new Volunteer($db);

    $Volunteer->delete($_GET['id']);
    header('Location: ../../dash-volunteers.php');
    exit;
}
?>