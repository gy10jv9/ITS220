<?php
include("../partials/dashboard-header.php");
include("../partials/dashboard-sidenav.php");
include("../classes/Inventory.php");

$db = new Database();
$Inventory = new Volunteer($db);

$inventory = $Inventory->displayall();
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
                <p class="label"> Inventory </p>
            </div>

            <div class="container-search">
                <input type="text" placeholder="search volunteer"/>
                <button> Search </button>
            </div>

            <div class="list">
                <button onclick="location.href='../forms/inventory/inventory.php'"> add inventory </button>

                <!-- /////[ TABLE ]///// -->
                <table cellpadding="5" style="margin-top: 1rem;">
                    <tr style="border: 2px solid #952727;">
                        <td style="border: 2px solid #952727;"><h2> Brandname </h2></td>
                        <td style="border: 2px solid #952727;"><h2> Item </h2></td>
                        <td class="text-center" style="border: 2px solid #952727;"><h2> Actions </h2></td>
                    </tr>
                    <?php foreach($inventory as $item) { ?>
                        <tr>
                            <td><?php echo $item["brandName"]. " ". $vol["lastName"] ?></td>
                            <td><?php echo $item["itemName"] ?></td>
                            <td class="text-center">
                                <a href="http://localhost/its220-infoman/forms/volunteer/view-volunteer.php?id=<?= isset($vol['volunteer_id'])? (int) $vol['volunteer_id'] : 0?>">
                                     <img src ='../img/view.png' width = '16' >
                                </a>
                                <a href="http://localhost/its220-infoman/forms/volunteer/updateForm-volunteer.php?id=<?= isset($vol['volunteer_id'])? (int) $vol['volunteer_id'] : 0?>">
                                    <img src ='../img/edit.png' width = '16' >
                                </a>
                                <a href="http://localhost/its220-infoman/forms/volunteer/_delete-volunteer.php?id=<?= isset($vol['volunteer_id'])? (int) $vol['volunteer_id'] : 0?>">
                                    <img src ='../img/delete.png' width = '16' alt="Delete">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>

                <p class="text-center"> click "Add Inventory" to add one </p>
            </div>
        </section>
    </main>
</div>

<?php include("../partials/footer.php") ?>