<?php
include("../../partials/form-header.php");

if (isset($_GET['id'])) {
    include("../../classes/Database.php");
    include("../../classes/Volunteer.php");

    $db = new Database();
    $Volunteer = new Volunteer($db);

    $volunteer = $Volunteer->view($_GET['id']);
}
?>

<div class="label-container">
    <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../dashboards/dash-volunteers.php'">
    <p class="label"> View Volunteer Details </p>
</div>
<main>
    <div class="volunteer-primaryInformation">
        <div>
            <div class="profile-picture" style="background: url('../../<?php echo $volunteer["profileImage_url"]?>') center top/cover" alt="profile"></div>
            <p class="mt-1 grey-2"> Fullname: </p>
            <h1 class="size-18"><?php echo isset($volunteer["firstName"]) ? $volunteer["firstName"] : ''; ?> <?php echo isset($volunteer["lastName"]) ? $volunteer["lastName"] : ''; ?></h1>
        </div>
        <div class="fgrow-1 ml-1">
            <p class="grey-2"> Contact Number: </p>
            <p><?php echo isset($volunteer["contactNumber"]) ? $volunteer["contactNumber"] : ''; ?></p>
            <p class="mt-pt25 grey-2"> Nationality: </p>
            <p><?php echo isset($volunteer["nationality"]) ? $volunteer["nationality"] : ''; ?></p>
            <p class="mt-pt25 grey-2"> Sex: </p>
            <p><?php echo isset($volunteer["sexuality_id"]) ? ($volunteer["sexuality_id"] == 0 ? 'Male' : 'Female') : ''; ?></p>
            <p class="mt-pt25 grey-2"> Civil Status: </p>
            <p><?php echo isset($volunteer["civilStatus_id"]) ? ($volunteer["civilStatus_id"] == 1 ? 'Single' : ($volunteer["civilStatus_id"] == 2 ? 'Married' : ($volunteer["civilStatus_id"] == 3 ? 'Divorced' : ($volunteer["civilStatus_id"] == 4 ? 'Widowed' : ($volunteer["civilStatus_id"] == 0 ? '' : ''))))) : ''; ?></p>
            <p class="mt-pt25 grey-2"> Birthdate: </p>
            <p><?php echo isset($volunteer["bdate"]) ? $volunteer["bdate"] : ''; ?></p>
        </div>
        <div class="fgrow-1">
            <p class="grey-2"> Occupation: </p>
            <?php
            $occupation = isset($volunteer["occupation"]) ? $volunteer["occupation"] : '';
            if ($occupation == 0) {
                $occupation = '';
            } elseif ($occupation == 1) {
                $occupation = 'Student';
            } elseif ($occupation == 2) {
                $occupation = 'CEO';
            } elseif ($occupation == 3) {
                $occupation = 'Unemployed';
            }
            ?>
            <p><?php echo $occupation; ?></p>
            <p class="mt-pt25 grey-2"> Address: </p>
            <p><?php echo isset($volunteer["streetAddress"]) ? $volunteer["streetAddress"] : ''; ?> <?php echo isset($volunteer["city"]) ? $volunteer["city"] : ''; ?> <?php echo isset($volunteer["region"]) ? $volunteer["region"] : ''; ?> <?php echo isset($volunteer["country"]) ? $volunteer["country"] : ''; ?></p>
        </div>
    </div>
</main>
<form style="padding: 50px;">
    <h1> Availability of the Volunteer </h1>
    <section class="f-row">
        <div class="fgrow-1">
            <p class="grey-2"> Days of the Week </p> 

            <?php $selected = $volunteer["sun"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="sun" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Sunday </label><br/>

            <?php $selected = $volunteer["mon"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="mon" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Monday </label><br/>

            <?php $selected = $volunteer["tue"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="tue" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Tuesday </label><br/>

            <?php $selected = $volunteer["wed"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="wed" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Wednesday </label><br/>

            <?php $selected = $volunteer["thu"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="thu" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Thursday </label><br/>

            <?php $selected = $volunteer["fri"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>   
            <input type="checkbox" name="fri" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Friday </label><br/>
            
            <?php $selected = $volunteer["sat"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?>
            <input type="checkbox" name="sat" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Saturday </label><br/>
        </div>
        <div class="fgrow-1">
            <p class="grey-2"> Time of the Day </p> 
            
            <?php $selected = $volunteer["morning"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="checkbox" name="morning" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Morning </label><br/>

            <?php $selected = $volunteer["afternoon"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="checkbox" name="afternoon" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Afternoon </label><br/>

            <?php $selected = $volunteer["evening"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="checkbox" name="evening" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Evening </label><br/>
        </div>
        <div class="fgrow-1">
        <p class="grey-2"> Frequency </p> 
            <?php $selected = $volunteer["frequency_id"] == 0? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="radio" name="frequency" value="0" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Daily </label><br/>
            <?php $selected = $volunteer["frequency_id"] == 1? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="radio" name="frequency" value="1" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Weekly </label><br/>
            <?php $selected = $volunteer["frequency_id"] == 2? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="radio" name="frequency" value="2" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Biweekly </label><br/>
            <?php $selected = $volunteer["frequency_id"] == 3? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="radio" name="frequency" value="3" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Monthly </label><br/>
            <?php $selected = $volunteer["frequency_id"] == 4? "checked style='color: black;'" : "style='color: grey; display: none;'"; ?> 
            <input type="radio" name="frequency" value="4" <?php echo $selected;?> disabled>
            <label <?php echo $selected;?>> Occasional </label><br/>
        </div>
    </section>
</form>

<?php include("../../partials/form-footer.php") ?>