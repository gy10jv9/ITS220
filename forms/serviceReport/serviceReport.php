<?php
include("../../partials/form-header.php");
?>

<div class="label-container">
    <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../index.php'">
    <p class="label"> add service report </p>
</div>
<main>
    <form action="_addserviceReport.php" method="POST">
        <h1> Enter Primary Information </h1>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Beneficiary Name </p> 
                <input type = "text" name="beneficiaryName">
            </div>
            <div class="fgrow-1">
                <p> Location </p>
                <input type = "text" name="location">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-1">
                <p> Date of Work </p> 
                <input type = "date" name="date">
            </div>
            <div class="fgrow-2">
                <p> Total Expenses (PHP) </p> 
                <input type = "number" name="expenses">
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
            <input type="submit" class="bttn-primary fgrow-1" value="Add Service Report">
            <button class="bttn-cancel" onclick="event.preventDefault(); location.href = '../../index.php'"> Cancel </button>
        </div>
    </form>  
</main>
            
<?php include("../../partials/form-footer.php") ?>