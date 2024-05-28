<?php include("../../partials/form-header.php"); ?>

<div class="fullWindow2 centerContent2">
    <form action="_register.php" method="post">
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="text" name="username" placeholder="enter username"/>
        </div>
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="email" name="email" placeholder="enter email"/>
        </div>
        <div class="f-row relative">
            <div class="icon lock"></div>
            <input type="password" name="password" placeholder="enter password"/>
        </div>

        <button name="register"> Register </button>
        <p> Already have an account?</p>
        <button type="button" class="login" onclick="location.href='login.php'"> Sign in </button>
    </form>
</div>

<?php include("../../partials/form-footer.php") ?>