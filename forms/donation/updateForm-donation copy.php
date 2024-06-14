<?php
include("../../partials/form-header.php");

if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/Donation.php");

    $db = new Database();
    $Donation = new Donation($db);

    $donation = $Donation->view($_GET['id']);
}
?>

<div class="label-container">
    <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../dashboards/dash-donations.php'">
    <p class="label"> Edit donation </p>
</div>
<main>
    <form action="_updateDonation.php?id=<?= isset($_GET['id'])? (int) $_GET['id'] : 0?>" method="POST">
        <h1> Enter Primary Information </h1>
        <div class="input-container">
            <div class="fgrow-1">
                <p> First Name </p> 
                <input type = "text" name="fname" value="<?php echo isset($volunteer["fname"]) ? $volunteer["fname"] : ''; ?>">
            </div>
            <div class="fgrow-1">
                <p> Last Name </p>
                <input type = "text" name="lname" value="<?php echo isset($volunteer["lname"]) ? $volunteer["lname"] : ''; ?>">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-2">
                <p> Contact Number </p> 
                <input type = "text" name="contactnum" value="<?php echo isset($volunteer["contactnum"]) ? $volunteer["contactnum"] : ''; ?>">
            </div>
            <div class="fgrow-2">
                <p> Nationality </p> 
                <input type = "text" name="nationality" value="<?php echo isset($volunteer["nationality"]) ? $volunteer["nationality"] : ''; ?>">
            </div>
            <div class="fgrow-2">
                <p> Donation Amount (PHP) </p> 
                <input type = "number" name="amount" value="<?php echo isset($volunteer["amount"]) ? $volunteer["amount"] : ''; ?>">
            </div>
        </div>

        <hr/>
        <h1> Enter Non-Cash Donation Details </h1>
        <div class="input-container m-0">
            <div class="fgrow-1">
                <p> Brandname </p> 
                <input type = "text" name="brand" value="<?php echo isset($volunteer["brand"]) ? $volunteer["brand"] : ''; ?>">
            </div>
            <div class="fgrow-1">
                <p> Item Type </p>
                <input type = "text" name="item" value="<?php echo isset($volunteer["item"]) ? $volunteer["item"] : ''; ?>">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Date of Purchase </p> 
                <input type = "date" name="purchaseDate" value="<?php echo isset($volunteer["purchaseDate"]) ? $volunteer["purchaseDate"] : ''; ?>">
            </div>
            <div class="quantity-container fgrow-1">
                <p> Quantity </p> 
                <input type = "number" name="quant" value="<?php echo isset($volunteer["quant"]) ? $volunteer["quant"] : ''; ?>">
            </div>
            <div class="fgrow-3">
                <p> Distributor </p> 
                <input type = "text" name="distributor" value="<?php echo isset($volunteer["distributor"]) ? $volunteer["distributor"] : ''; ?>">
            </div>
        </div>

        <hr/>
        <h1> Enter Billing Address </h1>
        <div class="input-container m-0">
            <div class="fgrow-1">
                <p> Street Address </p> 
                <input type = "text" name="streetAddr" value="<?php echo isset($volunteer["streetAddr"]) ? $volunteer["streetAddr"] : ''; ?>">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-1">
                <p> City/Province </p> 
                <input type = "text" name="city" value="<?php echo isset($volunteer["city"]) ? $volunteer["city"] : ''; ?>">
            </div>
            <div class="fgrow-1">
                <p> State/Region </p> 
                <input type = "text" name="region" value="<?php echo isset($volunteer["region"]) ? $volunteer["region"] : ''; ?>">
            </div>
            <div class="fgrow-1">
                <p> Country </p> 
                <input type = "text" name="country" value="<?php echo isset($volunteer["country"]) ? $volunteer["country"] : ''; ?>">
            </div>
        </div>

        <hr/>
        <h1> Enter Card Details </h1>
        <div class="input-container m-0">
            <div class="fgrow-3">
                <p> Card Number </p> 
                <input type = "text" name="cardnum" value="<?php echo isset($volunteer["cardnum"]) ? $volunteer["cardnum"] : ''; ?>">
            </div>
            <div class="fgrow-1">
                <p> Expiration Date </p> 
                <input type = "date" name="expdate" value="<?php echo isset($volunteer["expdate"]) ? $volunteer["expdate"] : ''; ?>">
            </div>
            <div class="quantity-container">
                <p> CCV </p> 
                <input type = "text" name="ccv" value="<?php echo isset($volunteer["ccv"]) ? $volunteer["ccv"] : ''; ?>">
            </div>
        </div>

        <br/>
        <div class="input-container">
            <input type="submit" class="bttn-primary fgrow-1" value="Confirm Donation">
            <button class="bttn-cancel" onclick="event.preventDefault(); location.href = '../../index.php'"> Cancel </button>
        </div>
    </form>
</main>       

<?php include("../../partials/form-footer.php") ?>