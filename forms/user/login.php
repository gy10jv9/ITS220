<?php include("../../partials/form-header.php"); ?>

<div class="fullWindow2 centerContent2" style="background-color: #e2e6ec;">
    <div class="container-login">
        <form action="_login.php" method="post">
            <div class="f-row relative">
                <div class="icon email"></div>
                <input type="text" name="username" placeholder="enter username"/>
            </div>
            <div class="f-row relative">
                <div class="icon lock"></div>
                <input type="password" name="password" placeholder="enter password"/>
            </div>

            <button name="login" class="bttn-primary2"> Sign in </button>
            <p> Forgot password? <a href="login.php"> Click here </a></p>
            <p> Don't have an account?</p>
            <button type="button" onclick="location.href='register.php'"> Register </button>
        </form>

        <div class="poster" style="background: url(../../img/service-1.jpg) center center/cover;"></div>
    </div>
</div>

<?php include("../../partials/form-footer.php") ?>