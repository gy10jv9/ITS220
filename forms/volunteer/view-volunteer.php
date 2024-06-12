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
        <img src="../../img/icon-back.png" class="back-bttn" onclick="location.href = '../../dashboards/dash-volunteers.php'">
        <p class="label"> View Volunteer Details </p>
    </div>
    <main>
        <div class="volunteer-primaryInformation">
            <div class="volunteer-profile">
                <div class="profile-picture" style="background: url('../../<?php echo $volunteer["profileImage_url"]?>') center center/cover" alt="profile"></div>
                <p><?php echo isset($volunteer["firstName"]) ? $volunteer["firstName"] : ''; ?> <?php echo isset($volunteer["lastName"]) ? $volunteer["lastName"] : ''; ?></p>
            </div>
            <div class="volunteer-profile">
                <p><?php echo isset($volunteer["contactNumber"]) ? $volunteer["contactNumber"] : ''; ?></p>
                <p><?php echo isset($volunteer["nationality"]) ? $volunteer["nationality"] : ''; ?></p>
                <p><?php echo isset($volunteer["sexuality_id"]) ? ($volunteer["sexuality_id"] == 0 ? 'Male' : 'Female') : ''; ?></p>
                <p><?php echo isset($volunteer["civilStatus_id"]) ? ($volunteer["civilStatus_id"] == 1 ? 'Single' : ($volunteer["civilStatus_id"] == 2 ? 'Married' : ($volunteer["civilStatus_id"] == 3 ? 'Divorced' : ($volunteer["civilStatus_id"] == 4 ? 'Widowed' : ($volunteer["civilStatus_id"] == 0 ? '' : ''))))) : ''; ?></p>
                <p><?php echo isset($volunteer["bdate"]) ? $volunteer["bdate"] : ''; ?></p>
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
                <p><?php echo isset($volunteer["streetAddress"]) ? $volunteer["streetAddress"] : ''; ?> <?php echo isset($volunteer["city"]) ? $volunteer["city"] : ''; ?> <?php echo isset($volunteer["region"]) ? $volunteer["region"] : ''; ?> <?php echo isset($volunteer["country"]) ? $volunteer["country"] : ''; ?></p>
        </div>
    </main>
    <form>
        <h1> Availability of the Volunteer </h1>
        <section class="f-row">
            <div class="fgrow-1">
                <p> Days of the Week </p> 

                <?php $selected = $volunteer["sun"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="sun" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Sunday </label><br/>

                <?php $selected = $volunteer["mon"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="mon" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Monday </label><br/>

                <?php $selected = $volunteer["tue"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="tue" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Tuesday </label><br/>

                <?php $selected = $volunteer["wed"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="wed" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Wednesday </label><br/>

                <?php $selected = $volunteer["thu"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="thu" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Thursday </label><br/>

                <?php $selected = $volunteer["fri"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="fri" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Friday </label><br/>
                
                <?php $selected = $volunteer["sat"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?>   
                <input type="checkbox" name="sat" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Saturday </label><br/>
            </div>
            <div class="fgrow-1">
                <p> Time of the Day </p> 
                
                <?php $selected = $volunteer["morning"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="checkbox" name="morning" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Morning </label><br/>

                <?php $selected = $volunteer["afternoon"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="checkbox" name="afternoon" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Afternoon </label><br/>

                <?php $selected = $volunteer["evening"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="checkbox" name="evening" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Evening </label><br/>
            </div>
            <div class="fgrow-1">
            <p> Frequency </p> 
                <?php $selected = $volunteer["frequency_id"] == 0? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="radio" name="frequency" value="0" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Daily </label><br/>
                <?php $selected = $volunteer["frequency_id"] == 1? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="radio" name="frequency" value="1" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Weekly </label><br/>
                <?php $selected = $volunteer["frequency_id"] == 2? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="radio" name="frequency" value="2" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Biweekly </label><br/>
                <?php $selected = $volunteer["frequency_id"] == 3? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="radio" name="frequency" value="3" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Monthly </label><br/>
                <?php $selected = $volunteer["frequency_id"] == 4? "checked style='color: black;'" : "style='color: grey;'"; ?> 
                <input type="radio" name="frequency" value="4" <?php echo $selected;?> disabled>
                <label <?php echo $selected;?>> Occasional </label><br/>
            </div>
        </section>
    </form>

    <footer>
        <p> The Red Amity Volunteer Services, a humanitarian organization recognized worldwide, operates on the principles of volunteerism and the desire to alleviate human suffering. It is an institution powered by the spirit of selflessness, where individuals contribute their time, energy, and resources to aid those in need. In the Philippines, the Red Amity has a robust volunteer program, Red Amity Cross, which is a community-based network of volunteers who are trained and prepared to respond to disasters and promote health and welfare services. Volunteering with the Red Amity does not only involve emergency response but also encompasses a wide range of activities including blood donation drives, health services, and youth programs. The organization emphasizes that while it does not provide financial compensation, it offers a sense of fulfillment and purpose, as volunteers are integral to the delivery of essential services. Those interested in volunteering can apply online and are required to undergo orientation and training to equip them with the necessary skills for effective service. The Red Amity is a testament to the power of collective human effort and compassion in building resilient communities. </p>
    </footer>       
</div>

<?php include("../../partials/form-footer.php") ?>