<?php include('./partials/header.php') ?>

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
                <li onclick="<?php session_destroy();?> document.location.href='forms/user/login.php'"> logout </li>
            </ul>
        </div>
    </div>
 
    <div class="container-main v2">
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

            <!-- container na ni dapat ka log in form kaso tamad ko mag ilis class name -->
            <section class="container-list">
                <div class="label-container">
                    <img src="img/icon-back.png" class="back-bttn" onclick="location.href='dashboard.php'">
                    <p class="label"> Login / Register Account </p>
                </div>

                <div class="loginForm">
                    <div class="form login">
                        <d class="f-row relative">
                            <div class="icon email"></div>
                            <input type="email" placeholder="enter email"/>
                        </d>
                        <d class="f-row relative">
                            <div class="icon lock"></div>
                            <input type="password" placeholder="enter password"/>
                        </d>
                        <button onclick="location.href='dashboard.php'"> LOGIN </button>
                    </div>

                    <div class="form register">
                        <d class="f-row relative">
                            <div class="icon email"></div>
                            <input type="email" placeholder="enter email"/>
                        </d>
                        <d class="f-row relative" style="gap: 0.5rem;">
                            <div class="icon lock"></div>
                            <input type="password" placeholder="enter password"/>
                            <input type="password" placeholder="re-enter password"/>
                        </d>
                        <button onclick="location.href='dashboard.php'"> REGISTER </button>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php include('./partials/footer.php') ?>