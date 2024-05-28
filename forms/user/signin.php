<?php include("../../partials/form-header.php"); ?>

<div class="fullWindow2 centerContent2">
    <form action="_signin.php" method="post">
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="email" placeholder="enter email"/>
        </div>
        <div class="f-row relative">
            <div class="icon lock"></div>
            <input type="password" placeholder="enter password"/>
        </div>
        <button name="signin"> Sign in </button>
        <p> Forgot password? <a href="login.php"> Click here </a></p>
        <p> Don't have an account?</p>
        <button type="button" class="signin" onclick="location.href='register.php'"> Register </button>
    </form>
</div>

<?php include("../../partials/form-footer.php") ?>