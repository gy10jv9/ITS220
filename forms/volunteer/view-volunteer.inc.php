<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        include("../../classes/Database.php");
        include("../../classes/Voluntereer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->displayall();
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
// }
?>