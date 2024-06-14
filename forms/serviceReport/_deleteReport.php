<?php
if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/ServiceReport.php");

    $db = new Database();
    $ServiceReport = new ServiceReport($db);

    $ServiceReport->delete($_GET['id']);
    header('Location: ../../dashboards/dash-serviceReport.php');
    exit;
}