<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    try {
        include("../../classes/Database.php");
        include("../../classes/Voluntereer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->add($fname);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
}

// if ($_SERVER["REQUEST_METHOD" == "POST"]) {
//     $fname = $_POST["fname"];
//     $lname = $_POST["lname"];

//     echo htmlspecialchars($fname);

//     try {
//         include("../../classes/Voluntereer.php");

//         $Volunteer = new Volunteer();
//         $Volunteer->add($fname);
//     } catch (PDOException $e) {
//         die("POST Query Failed: " . $e->getMessage());
//     }
// } else {
//     header("Location: form-volunteer.php");
// }

// try {
//     $Volunteer = new Volunteer();
//     $Volunteer->add();
// } catch (PDOException $e) {
//     die("POST Query Failed: " . $e->getMessage());
// }
?>