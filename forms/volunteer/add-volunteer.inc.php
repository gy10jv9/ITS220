<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    try {
        include("../../classes/Database.php");
        include("../../classes/Volunteer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->add($fname);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
}
?>