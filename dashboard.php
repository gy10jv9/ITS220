<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fonts.css">
    </head>
    <body>
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

        <div class="container-main container-dashboard">
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
                <img src="img/chart3.png" class="lineGraph"></img>
            </main>

            <div class="otherDetails">
                <div class="list summary">
                    <h2 class="text-center" style="margin-top: 8%;"> No Volunteers Yet </h2>
                    <p class="text-center"> click "View All Volunteers" to view dashboard </p>
                    <button onclick="location.href='dash-volunteers.php'" style="margin-bottom: 10%;"> View All Volunteers </button>
                </div>
                <div class="list summary">
                    <h2 class="text-center" style="margin-top: 8%;"> No Donations Yet </h2>
                    <p class="text-center"> click "View All Donations" to view dashboard </p>
                    <button onclick="location.href='dash-donations.php'" style="margin-bottom: 10%;"> View All Donations </button>
                </div>
                <div class="list summary">
                    <h2 class="text-center" style="margin-top: 8%;"> No Inventory Yet </h2>
                    <p class="text-center"> click "View All Inventory" to view dashboard </p>
                    <button onclick="location.href='dash-inventory.php'" style="margin-bottom: 10%;"> View All Inventory </button>
                </div>
                <div class="list summary">
                    <h2 class="text-center" style="margin-top: 8%;"> No Services Yet </h2>
                    <p class="text-center"> click "View All Services" to view dashboard </p>
                    <button onclick="location.href='dash-serviceReport.php'" style="margin-bottom: 10%;"> View All Services </button>
                </div>
            </div>
        </div>
    </body>
</html>