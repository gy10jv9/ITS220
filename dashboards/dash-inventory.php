<?php
include("../partials/dashboard-header.php");;
include("../partials/dashboard-sidenav.php");
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
                <button onclick="location.href='add-inventory.php'"> add inventory </button>
                <h2 class="text-center" style="margin-top: 10%;"> No inventory Yet </h2>
                <p class="text-center"> click "Add Inventory" to add one </p>
            </div>
        </section>
    </main>
</div>

<?php include("../partials/footer.php") ?>