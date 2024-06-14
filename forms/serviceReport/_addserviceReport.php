<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $report = [
        "beneficiaryName" => $_POST["beneficiaryName"],
        "location" => $_POST["location"],
        "date" => $_POST["date"],
        "expenses" => $_POST["expenses"],
        "description" => $_POST["description"],
        "remarks" => $_POST["remarks"]
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/ServiceReport.php");

        $Database = new Database();
        $ServiceReport = new ServiceReport($Database);
        $ServiceReport->add($report);

        header("Location: ../../dashboards/dash-serviceReport.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: ../../dashboards/dash-serviceReport.php");
    exit;
}