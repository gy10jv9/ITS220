<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $report = [
        "beneficiaryName" => $_POST["beneficiaryName"],
        "location" => $_POST["location"],
        "date" => $_POST["date"],
        "expense" => $_POST["expense"],
        "description" => $_POST["description"],
        "remarks" => $_POST["remarks"]
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/ServiceReport.php");

        $Database = new Database();
        $ServiceReport = new ServiceReport($Database);
        $ServiceReport->add($report);

        header("Location: serviceReport.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: serviceReport.php");
    exit;
}