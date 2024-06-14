<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donation = [
        "fname" => $_POST["fname"],
        "lname" => $_POST["lname"],
        "contactnum" => $_POST["contactnum"],
        "nationality" => $_POST["nationality"],
        "amount" => $_POST["amount"],
        "brand" => $_POST["brand"],
        "item" => $_POST["item"],
        "purchaseDate" => $_POST["purchaseDate"],
        "quant" => $_POST["quant"],
        "distributor" => $_POST["distributor"],
        "streetAddr" => $_POST["streetAddr"],
        "city" => $_POST["city"],
        "region" => $_POST["region"],
        "country" => $_POST["country"],
        "cardnum" => $_POST["cardnum"],
        "expdate" => $_POST["expdate"],
        "ccv" => $_POST["ccv"]
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/Donation.php");

        $db = new Database();
        $Donation = new Donation($db);
        $Donation->add($donation);
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }

    header('Location: ../../dashboards/dash-donations.php');
    exit;
}
?>