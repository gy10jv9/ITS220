<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"];
    $fname = $_POST["fname"];

    try {
        include("../../classes/Database.php");
        include("../../classes/Volunteer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->update($id, $fname);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
}
?>