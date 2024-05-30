<?php include("../../partials/form-header.php"); ?>

<div class="viewport-login">
    <div class="container-login">
        <form action="_login.php" method="post">
            <div class="logo-1"></div>

            <div class="f-row relative">
                <div class="icon email"></div>
                <input type="text" name="username" placeholder="enter username"/>
            </div>
            <div class="f-row relative mt-pt25">
                <div class="icon lock"></div>
                <input type="password" name="password" placeholder="enter password"/>
            </div>

            <button name="login" class="bttn-primary2 mt-1"> Sign in </button>
            <p class="size-14 grey-2"> Forgot password? <a href="login.php" class="size-14 grey-2"> Click here </a></p>

            <p class="size-14 grey-2 mt-1"> Don't have an account?</p>
            <button type="button" class="bttn-secondary" onclick="location.href='register.php'"> Register </button>
        </form>

        <div class="poster" style="background: url(../../img/service-1.jpg) center center/cover;"></div>
    </div>
</div>

<?php include("../../partials/form-footer.php") ?>