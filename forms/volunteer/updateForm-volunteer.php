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

<div class="form-container">
    <header>
        <div class="logo"></div>
        <div class="container-details">
            <h1> philippine red amity Volunteer Services </h1>
            <p> 123 Rizal Avenue, Barangay Poblacion 5, Bacolod City, Negros Occidental, 6100 </p>
            <hr/>

            <div class="container-socials">
                <div class="social-link">
                    <div class="icon fb" ></div>
                    <p> Red Amity Volunteer PH </p>
                </div>
                <div class="social-link">
                    <div class="icon ig" ></div>
                    <p> @redamityph </p>
                </div>
                <div class="social-link">
                    <div class="icon yt" ></div>
                    <p> Red Amity PH </p>
                </div>
                <div class="social-link">
                    <div class="icon email" ></div>
                    <p> redamityph@gmail.com </p>
                </div>
            </div>
        </div>
    </header>

    <div class="label-container">
        <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../dash-volunteers.php'">
        <p class="label"> Add Volunteer </p>
    </div>
    <main>
        <form action="update-volunteer.inc.php?id=<?= isset($_GET['id'])? (int) $_GET['id'] : 0?>" method="POST">
            <h1> Enter Primary Information </h1>
            <div class="input-container">
                <div class="fgrow-1">
                    <p> First Name </p> 
                    <input type = "text" name="fname" value="<?php echo isset($volunteer["firstName"]) ? $volunteer["firstName"] : ''; ?>">
                </div>
                <div class="fgrow-1">
                    <p> Last Name </p>
                    <input type = "text" name="lname" value="<?php echo isset($volunteer["lastName"]) ? $volunteer["lastName"] : ''; ?>">
                </div>
            </div>
            <div class="input-container">
                <div class="fgrow-2">
                    <p> Contact Number </p> 
                    <input type = "text" value="<?php echo isset($volunteer["contactNumber"]) ? $volunteer["contactNumber"] : ''; ?>">
                </div>
                <div class="fgrow-2">
                    <p> Nationality </p> 
                    <input type = "text" value="<?php echo isset($volunteer["nationality"]) ? $volunteer["nationality"] : ''; ?>">
                </div>
                <div class="select-container fgrow-1">
                    <select name="sex">
                        <option value=""> -- Select Sex -- </option>
                        <?php $selected = $volunteer["sexuality_id"] == 0? 'selected' : ''; ?>
                        <option value="0" <?php echo $selected;?>> Male </option>
                        <?php $selected = $volunteer["sexuality_id"] == 1? 'selected' : ''; ?>
                        <option value="1" <?php echo $selected;?>> Female </option>    
                    <select>
                </div>

                <!-- civil status -->
                <div class="select-container fgrow-1">
                    <select name="cvlstat">
                        <option value=""> -- Select Civil Status -- </option>
                        <?php $selected = $volunteer["sexuality_id"] == 0? 'selected' : ''; ?>
                        <option value="0" <?php echo $selected;?>> Single </option>
                        <?php $selected = $volunteer["sexuality_id"] == 1? 'selected' : ''; ?>
                        <option value="1" <?php echo $selected;?>> Married </option>
                        <?php $selected = $volunteer["sexuality_id"] == 2? 'selected' : ''; ?>
                        <option value="2" <?php echo $selected;?>> Divorced </option>
                        <?php $selected = $volunteer["sexuality_id"] == 3? 'selected' : ''; ?> 
                        <option value="3" <?php echo $selected;?>> Widdowed </option>    
                    <select>
                </div>
            </div>
            <div class="input-container">
                <!-- birthdate -->
                <div class="fgrow-1">
                    <p> Birthdate </p> 
                    <input type = "date" name="bdate"  value="<?php echo isset($volunteer["bdate"]) ? $volunteer["bdate"] : ''; ?>">
                </div>

                <div class="select-container fgrow-1">
                    <select name="occup">
                        <option value=""> -- Select Occuppation -- </option>
                        <?php $selected = $volunteer["occupation"] == 0? 'selected' : ''; ?>    
                        <option value="0" <?php echo $selected;?>> Student </option> 
                        <?php $selected = $volunteer["occupation"] == 1? 'selected' : ''; ?>   
                        <option value="1" <?php echo $selected;?>> CEO </option>
                        <?php $selected = $volunteer["occupation"] == 2? 'selected' : ''; ?> 
                        <option value="2" <?php echo $selected;?>> Unemployed </option>
                        <?php $selected = $volunteer["occupation"] == 3? 'selected' : ''; ?>    
                        <option value="3" <?php echo $selected;?>> Teacher </option>    
                    <select>
                </div>
                <div class="fgrow-1">
                    <p> Profile </p>
                    <input type = "file">
                </div>
            </div>

            <hr/>
            <h1> Enter Primary Address </h1>

            <div class="input-container m-0">
                <div class="fgrow-1">
                    <p> Street Address </p> 
                    <input type = "text" name="strtAddress" value="<?php echo isset($volunteer["streetAddress"]) ? $volunteer["streetAddress"] : ''; ?>">
                </div>
            </div>

            <div class="input-container">
                <div class="fgrow-1">
                    <p> City/Province </p> 
                    <input type = "text" name="city" value="<?php echo isset($volunteer["city"]) ? $volunteer["city"] : ''; ?>">
                </div>

                <div class="fgrow-1">
                    <p> Region </p> 
                    <input type = "text" name="region" value="<?php echo isset($volunteer["region"]) ? $volunteer["region"] : ''; ?>">
                </div>

                <div class="fgrow-1">
                    <p> Country </p> 
                    <input type = "text" name="country" value="<?php echo isset($volunteer["country"]) ? $volunteer["country"] : ''; ?>">
                </div>
            </div>

            <hr/>
            <h1> Indicate Availabilty </h1>
            <section class="f-row">
                <div class="fgrow-1">
                    <p> Days of the Week </p> 

                    <?php $selected = $volunteer["sun"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="sun" value="1" <?php echo $selected;?>>
                    <label> Sunday </label><br/>

                    <?php $selected = $volunteer["mon"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="mon" value="1" <?php echo $selected;?>>
                    <label> Monday </label><br/>

                    <?php $selected = $volunteer["tue"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="tue" value="1" <?php echo $selected;?>>
                    <label> Tuesday </label><br/>

                    <?php $selected = $volunteer["wed"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="wed" value="1" <?php echo $selected;?>>
                    <label> Wednesday </label><br/>

                    <?php $selected = $volunteer["thu"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="thu" value="1" <?php echo $selected;?>>
                    <label> Thursday </label><br/>

                    <?php $selected = $volunteer["fri"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="fri" value="1" <?php echo $selected;?>>
                    <label> Friday </label><br/>
                    
                    <?php $selected = $volunteer["sat"] == 1? 'checked' : ''; ?>   
                    <input type="checkbox" name="sat" value="1" <?php echo $selected;?>>
                    <label> Saturday </label><br/>
                </div>
                <div class="fgrow-1">
                    <p> Time of the Day </p> 
                    
                    <?php $selected = $volunteer["morning"] == 1? 'checked' : ''; ?> 
                    <input type="checkbox" name="morning" value="1" <?php echo $selected;?>>
                    <label> Morning </label><br/>

                    <?php $selected = $volunteer["afternoon"] == 1? 'checked' : ''; ?> 
                    <input type="checkbox" name="afternoon" value="1" <?php echo $selected;?>>
                    <label> Afternoon </label><br/>

                    <?php $selected = $volunteer["evening"] == 1? 'checked' : ''; ?> 
                    <input type="checkbox" name="evening" value="1" <?php echo $selected;?>>
                    <label> Evening </label><br/>
                </div>
                <div class="fgrow-1">
                <p> Frequency </p> 
                    <?php $selected = $volunteer["frequency_id"] == 0? 'checked' : ''; ?> 
                    <input type="radio" name="frequency" value="0" <?php echo $selected;?>>
                    <label> Daily </label><br/>
                    <?php $selected = $volunteer["frequency_id"] == 1? 'checked' : ''; ?> 
                    <input type="radio" name="frequency" value="1" <?php echo $selected;?>>
                    <label> Weekly </label><br/>
                    <?php $selected = $volunteer["frequency_id"] == 2? 'checked' : ''; ?> 
                    <input type="radio" name="frequency" value="2" <?php echo $selected;?>>
                    <label> Biweekly </label><br/>
                    <?php $selected = $volunteer["frequency_id"] == 3? 'checked' : ''; ?> 
                    <input type="radio" name="frequency" value="3" <?php echo $selected;?>>
                    <label> Monthly </label><br/>
                    <?php $selected = $volunteer["frequency_id"] == 4? 'checked' : ''; ?> 
                    <input type="radio" name="frequency" value="4" <?php echo $selected;?>>
                    <label> Occasional </label><br/>
                </div>
            </section>

            <br/>
            <div class="input-container">
                <input type="submit" class="bttn-primary fgrow-1" value="Add Volunteer">
                <button class="bttn-cancel" onclick="event.preventDefault(); location.href = 'index.php'"> Cancel </button>
            </div>
        </form>
    </main>

    <footer>
        <p> The Red Amity Volunteer Services, a humanitarian organization recognized worldwide, operates on the principles of volunteerism and the desire to alleviate human suffering. It is an institution powered by the spirit of selflessness, where individuals contribute their time, energy, and resources to aid those in need. In the Philippines, the Red Amity has a robust volunteer program, Red Amity Cross, which is a community-based network of volunteers who are trained and prepared to respond to disasters and promote health and welfare services. Volunteering with the Red Amity does not only involve emergency response but also encompasses a wide range of activities including blood donation drives, health services, and youth programs. The organization emphasizes that while it does not provide financial compensation, it offers a sense of fulfillment and purpose, as volunteers are integral to the delivery of essential services. Those interested in volunteering can apply online and are required to undergo orientation and training to equip them with the necessary skills for effective service. The Red Amity is a testament to the power of collective human effort and compassion in building resilient communities. </p>
    </footer>       
</div>

<?php include("../../partials/form-footer.php") ?>