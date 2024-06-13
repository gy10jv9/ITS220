<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // -----[ FILE UPLOAD ]-----
        $target_dir = "../../img/";
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["profile"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    
        if ($_FILES["profile"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
    
        if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["profile"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

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
        "freq" => isset($_POST["frequency"])? $_POST["frequency"] : "0",
        "profileImage_url" => empty($_FILES["profile"]["name"]) ? $_POST["profile_default"] : "img/". htmlspecialchars(basename($_FILES["profile"]["name"])),
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/Volunteer.php");

        $db = new Database();
        $Volunteer = new Volunteer($db);
        $Volunteer->update($_GET['id'], $volunteer);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
}

header('Location: ../../dashboards/dash-volunteers.php');
exit;
?>