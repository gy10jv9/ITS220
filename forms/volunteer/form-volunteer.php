<?php
include("../../partials/form-header.php");
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
        <img src="img/icon-back.png" class="back-bttn" onclick="location.href = 'dash-volunteers.php'">
        <p class="label"> Add Volunteer </p>
    </div>
    <main>
        <form action="_add-volunteer.inc.php" method="POST">
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
                    <select name="occ">
                        <option value=""> -- Select Occuppation -- </option>    
                        <option value="0"> Student </option>    
                        <option value="1"> CEO </option>    
                        <option value="2"> Unemployed </option>    
                        <option value="3"> Teacher </option>    
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
                    <input type="checkbox">
                    <label> Sunday </label><br/>
                    <input type="checkbox">
                    <label> Monday </label><br/>
                    <input type="checkbox">
                    <label> Tuesday </label><br/>
                    <input type="checkbox">
                    <label> Wednesday </label><br/>
                    <input type="checkbox">
                    <label> Thursday </label><br/>
                    <input type="checkbox">
                    <label> Friday </label><br/>
                    <input type="checkbox">
                    <label> Saturday </label><br/>
                </div>
                <div class="fgrow-1">
                    <p> Time of the Day </p> 
                    <input type="checkbox">
                    <label> Morning </label><br/>
                    <input type="checkbox">
                    <label> Afternoon </label><br/>
                    <input type="checkbox">
                    <label> Evening </label><br/>
                </div>
                <div class="fgrow-1">
                    <p> Frequency </p> 
                    <input type="radio" name="frequency">
                    <label> Daily </label><br/>
                    <input type="radio" name="frequency">
                    <label> Weekly </label><br/>
                    <input type="radio" name="frequency">
                    <label> Biweekly </label><br/>
                    <input type="radio" name="frequency">
                    <label> Monthly </label><br/>
                    <input type="radio" name="frequency">
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