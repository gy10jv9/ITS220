<?php
include("../../partials/form-header.php");
?>

<div class="label-container">
    <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../dashboards/dash-volunteers.php'">
    <p class="label"> Add Volunteer </p>
</div>
<main>
    <form action="_add-volunteer.php" method="POST" enctype="multipart/form-data">
        <h1> Enter Primary Information </h1>
        <div class="input-container">
            <div class="fgrow-1">
                <p> First Name </p> 
                <input type = "text" name="fname">
            </div>
            <div class="fgrow-1">
                <p> Last Name </p>
                <input type = "text" name="lname">
            </div>
        </div>
        <div class="input-container">
            <div class="fgrow-2">
                <p> Contact Number </p> 
                <input type = "text" name="contactnum">
            </div>
            <div class="fgrow-2">
                <p> Nationality </p> 
                <input type = "text" name="nationality">
            </div>
            <div class="select-container fgrow-1">
                <select name="sex">
                    <option value=""> -- Select Sex -- </option>    
                    <option value="0"> Male </option>
                    <option value="1"> Female </option>    
                <select>
            </div>

            <!-- civil status -->
            <div class="select-container fgrow-1">
                <select name="cvlstat">
                    <option value=""> -- Select Civil Status -- </option>    
                    <option value="0"> Single </option>    
                    <option value="1"> Married </option>    
                    <option value="2"> Divorced </option>    
                    <option value="3"> Widdowed </option>    
                <select>
            </div>
        </div>
        <div class="input-container">
            <!-- birthdate -->
            <div class="fgrow-1">
                <p> Birthdate </p> 
                <input type = "date" name="bdate">
            </div>

            <div class="select-container fgrow-1">
                <select name="occup">
                    <option value=""> -- Select Occuppation -- </option>    
                    <option value="0"> Student </option>    
                    <option value="1"> CEO </option>    
                    <option value="2"> Unemployed </option>    
                    <option value="3"> Teacher </option>    
                <select>
            </div>
            <div class="fgrow-1">
                <p> Profile </p>
                <input type="file" name="profile" accept="image/png, image/jpeg">
            </div>
        </div>

        <hr/>
        <h1> Enter Primary Address </h1>

        <div class="input-container m-0">
            <div class="fgrow-1">
                <p> Street Address </p> 
                <input type = "text" name="strtAddress">
            </div>
        </div>

        <div class="input-container">
            <div class="fgrow-1">
                <p> City/Province </p> 
                <input type = "text" name="city">
            </div>

            <div class="fgrow-1">
                <p> Region </p> 
                <input type = "text" name="region">
            </div>

            <div class="fgrow-1">
                <p> Country </p> 
                <input type = "text" name="country">
            </div>
        </div>

        <hr/>
        <h1> Indicate Availabilty </h1>
        <section class="f-row">
            <div class="fgrow-1">
                <p> Days of the Week </p> 

                <input type="checkbox" name="sun" value="1">
                <label> Sunday </label><br/>

                <input type="checkbox" name="mon" value="1">
                <label> Monday </label><br/>

                <input type="checkbox" name="tue" value="1">
                <label> Tuesday </label><br/>

                <input type="checkbox" name="wed" value="1">
                <label> Wednesday </label><br/>

                <input type="checkbox" name="thu" value="1">
                <label> Thursday </label><br/>

                <input type="checkbox" name="fri" value="1">
                <label> Friday </label><br/>
                
                <input type="checkbox" name="sat" value="1">
                <label> Saturday </label><br/>
            </div>
            <div class="fgrow-1">
                <p> Time of the Day </p> 
                
                <input type="checkbox" name="morning" value="1">
                <label> Morning </label><br/>

                <input type="checkbox" name="afternoon" value="1">
                <label> Afternoon </label><br/>

                <input type="checkbox" name="evening" value="1">
                <label> Evening </label><br/>
            </div>
            <div class="fgrow-1">
            <p> Frequency </p> 
                <input type="radio" name="frequency" value="0">
                <label> Daily </label><br/>
                <input type="radio" name="frequency" value="1">
                <label> Weekly </label><br/>
                <input type="radio" name="frequency" value="2">
                <label> Biweekly </label><br/>
                <input type="radio" name="frequency" value="3">
                <label> Monthly </label><br/>
                <input type="radio" name="frequency" value="4">
                <label> Occasional </label><br/>
            </div>
        </section>

        <br/>
        <div class="input-container">
            <input type="submit" class="bttn-primary fgrow-1" value="Add Volunteer">
            <button class="bttn-cancel" onclick="event.preventDefault(); location.href = '../../index.php'"> Cancel </button>
        </div>
    </form>
</main>

<?php include("../../partials/form-footer.php") ?>