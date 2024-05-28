<?php
include("../../partials/form-header.php");

// -----[ BUTTON FUNTIONS ]-----
if (isset($_POST['register'])) {
    header("Location: register.php");
    exit;
}
?>

<div class="fullWindow centerContent2">
    <form method="post">
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="email" placeholder="enter email"/>
        </div>
        <div class="f-row relative">
            <div class="icon lock"></div>
            <input type="password" placeholder="enter password"/>
        </div>
        <button name="login"> Sign in </button>
        <p> Forgot password? <a href="login.php"> Click here </a></p>
        <p> Don't have an account?</p>
        <button name="register"> Register </button>
    </form>
</div>

<?php include("../../partials/form-footer.php") ?>