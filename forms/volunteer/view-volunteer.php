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

    <main>
        <p><?php echo isset($volunteer["firstName"]) ? $volunteer["firstName"] : ''; ?></p>
        <p><?php echo isset($volunteer["lastName"]) ? $volunteer["lastName"] : ''; ?></p>
        <p><?php echo isset($volunteer["contactNumber"]) ? $volunteer["contactNumber"] : ''; ?></p>
    </main>

    <footer>
        <p> The Red Amity Volunteer Services, a humanitarian organization recognized worldwide, operates on the principles of volunteerism and the desire to alleviate human suffering. It is an institution powered by the spirit of selflessness, where individuals contribute their time, energy, and resources to aid those in need. In the Philippines, the Red Amity has a robust volunteer program, Red Amity Cross, which is a community-based network of volunteers who are trained and prepared to respond to disasters and promote health and welfare services. Volunteering with the Red Amity does not only involve emergency response but also encompasses a wide range of activities including blood donation drives, health services, and youth programs. The organization emphasizes that while it does not provide financial compensation, it offers a sense of fulfillment and purpose, as volunteers are integral to the delivery of essential services. Those interested in volunteering can apply online and are required to undergo orientation and training to equip them with the necessary skills for effective service. The Red Amity is a testament to the power of collective human effort and compassion in building resilient communities. </p>
    </footer>       
</div>

<?php include("../../partials/form-footer.php") ?>