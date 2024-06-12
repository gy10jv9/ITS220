<?php
include("../../partials/form-header.php");
?>

<div class="label-container">
    <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../index.php'">
    <p class="label"> add inventory </p>
</div>
<main>
    <form action="_addinventory.php" method="POST">
        <h1> Enter Primary Information </h1>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Brandname </p> 
                <input type = "text" name="brandName">
            </div>
            <div class="fgrow-1">
                <p> Item Name </p>
                <input type = "text" name="itemName">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Date of Purchase </p> 
                <input type = "date" name="purchaseDate">
            </div>
            <div class="quantity-container fgrow-1">
                <p> Quantity </p> 
                <input type = "number" name="quantity">
            </div>
            <div class="fgrow-3">
                <p> Distributor </p> 
                <input type = "text" name="distributorName">
            </div>
        </div>

        <hr/>
        <h1> Enter Other Details </h1>
        <div class="input-container m-0">
            <div class="fgrow-1">
                <p> Description </p> 
                <textarea name="description"></textarea>
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Remarks </p> 
                <textarea name="remarks"></textarea>
            </div>
        </div>

        <br/>
        <div class="input-container">
            <input type="submit" class="bttn-primary fgrow-1" value="Add to Inventory">
            <button class="bttn-cancel" onclick="event.preventDefault(); location.href = '../../index.php'"> Cancel </button>
        </div>
    </form>  
</main>

<?php include("../../partials/form-footer.php") ?>