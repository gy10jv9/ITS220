<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = [
        "brandName" => $_POST["brandName"],
        "itemName" => $_POST["itemName"],
        "purchaseDate" => $_POST["purchaseDate"],
        "quantity" => $_POST["quantity"],
        "distributorName" => $_POST["distributorName"],
        "description" => $_POST["description"],
        "remarks" => $_POST["remarks"]
    ];

    try {
        include("../../classes/Database.php");
        include("../../classes/Inventory.php");

        $Database = new Database();
        $Inventory = new Inventory($Database);
        $Inventory->add($item);

        header("Location: inventory.php");
        exit;
    } catch (Exception $e) {
        die("Error: ". $e->getMessage());
    }
} else {
    header("Location: register.php");
    exit;
}