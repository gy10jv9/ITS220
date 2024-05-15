<?php
include("./partials/header.php");
include("./classes/Database.php");
include("./classes/Donation.php");

$db = new Database();
$Donation = new Donation($db);

$donations = $Donation->displayall();
?>

<div class="container-sideNav">
    <div class="sideNav">
        <ul>
            <li onclick="window.location.href='index.php'"> home </li>
            <li onclick="window.location.href='dashboard.php'"> dashboard </li>
            <li onclick="window.location.href='dash-volunteers.php'"> volunteers </li>
            <li onclick="window.location.href='dash-donations.php'"> donations </li>
            <li onclick="window.location.href='dash-inventory.php'"> inventory </li>
            <li onclick="window.location.href='dash-serviceReport.php'"> services </li>
            <li onclick="window.location.href='index.php'"> profile </li>
            <li> settings </li>
        </ul>
    </div>
</div>

<div class="container-main">
    <main>
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

        <section class="container-list">
            <div class="label-container">
                <img src="img/icon-back.png" class="back-bttn" onclick="location.href='dashboard.php'">
                <p class="label"> Donations </p>
            </div>

            <div class="container-search">
                <input type="text" placeholder="search donation"/>
                <button> Search </button>
            </div>

            <div class="list">
                <button onclick="location.href='forms/donation/form-donation.php'"> add donation </button>

            <!-- /////[ TABLE ]///// -->
            <table cellpadding="5" style="margin: 1rem 0 1rem 0;">
                    <tr style="border: 2px solid #81171b;">
                        <td style="border: 2px solid #81171b;"><h2> Fullname </h2></td>
                        <td style="border: 2px solid #81171b;"><h2> Contact Num </h2></td>
                        <td class="text-center" style="border: 2px solid #81171b;"><h2> Actions </h2></td>
                    </tr>
                    <?php foreach($donations as $donation) { ?>
                        <tr>
                            <td><?php echo $donation["fname"]. " ". $donation["lname"] ?></td>
                            <td><?php echo $donation["contactnum"] ?></td>
                            <td class="text-center">
                                <a href="http://localhost/its220-infoman/forms/volunteer/view-volunteer.php?id=<?= isset($donation['id'])? (int) $donation['id'] : 0?>">
                                    <img src ='img/view.png' width = '16' >
                                </a>
                                <a href="http://localhost/its220-infoman/forms/volunteer/updateForm-volunteer.php?id=<?= isset($donation['id'])? (int) $donation['id'] : 0?>">
                                    <img src ='img/edit.png' width = '16' >
                                </a>
                                <a href="http://localhost/its220-infoman/forms/volunteer/delete-volunteer.inc.php?id=<?= isset($donation['id'])? (int) $donation['id'] : 0?>">
                                    <img src ='img/delete.png' width = '16' alt="Delete">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

                <p class="text-center"> click "Add Donation" to add one </p>
            </div>
        </section>
    </main>
</div>

<div class="container-charts">
    <img src="img/chart1.png"></img>
    <img src="img/chart2.png"></img>
</div>

<?php include("./partials/footer.php") ?>