<?php
include("../partials/dashboard-header.php");
include("../classes/Database.php");
include("../classes/Donation.php");
include("../partials/dashboard-sidenav.php");

$db = new Database();
$Donation = new Donation($db);

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $donations = $Donation->search($searchTerm);
} else {
    $donations = $Donation->displayall();
}
?>

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
                <img src="../img/icon-back.png" class="back-bttn" onclick="location.href='../index.php'">
                <p class="label"> Donations </p>
            </div>

            <form class="container-search" action="dash-donations.php" method="GET">
                <input type="text" name="search" placeholder="search volunteer"/>
                <button type="submit" value="search"> Search </button>
            </form>

            <div class="list">
                <button onclick="location.href='../forms/donation/form-donation.php'"> add donation </button>

            <!-- /////[ TABLE ]///// -->
            <table cellpadding="5" style="margin: 1rem 0 1rem 0;">
                    <tr style="border: 2px solid #952727;">
                        <td style="border: 2px solid #952727;"><h2> Fullname </h2></td>
                        <td style="border: 2px solid #952727;"><h2> Contact Num </h2></td>
                        <td class="text-center" style="border: 2px solid #952727;"><h2> Actions </h2></td>
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
                                <a href="http://localhost/its220-infoman/forms/volunteer/_delete-volunteer.php?id=<?= isset($donation['id'])? (int) $donation['id'] : 0?>">
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

<?php include("../partials/footer.php") ?>