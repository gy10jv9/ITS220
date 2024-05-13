<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $volunteer = [
        "fname" => $_POST["fname"],
        "lname" => $_POST["lname"],
        "contactnum" => $_POST["contactnum"],
        "nationality" => $_POST["nationality"],
        "sex" => $_POST["sex"],
        "cvlstat" => $_POST["cvlstat"],
        "bdate" => $_POST["bdate"],
        "occup" => $_POST["occup"],
        "strtAddress" => $_POST["strtAddress"],
        "city" => $_POST["city"],
        "region" => $_POST["region"],
        "country" => $_POST["country"],
        "sun" => isset($_POST["sun"])? $_POST["sun"] : "0",
        "mon" => isset($_POST["mon"])? $_POST["mon"] : "0",
        "tue" => isset($_POST["tue"])? $_POST["tue"] : "0",
        "wed" => isset($_POST["wed"])? $_POST["wed"] : "0",
        "thu" => isset($_POST["thu"])? $_POST["thu"] : "0",
        "fri" => isset($_POST["fri"])? $_POST["fri"] : "0",
        "sat" => isset($_POST["sat"])? $_POST["sat"] : "0",
        "morning" => isset($_POST["morning"])? $_POST["morning"] : "0",
        "afternoon" => isset($_POST["afternoon"])? $_POST["afternoon"] : "0",
        "evening" => isset($_POST["evening"])? $_POST["evening"] : "0",
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/Volunteer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->add($volunteer);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
}
?>