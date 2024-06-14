<?php include("../../partials/login-header.php"); ?>

<div class="viewport-login" style="background-color: #eff8ff;">
    <div class="container-login">
        <!-- -----[ Poster ]----- -->
        <div class="poster-left" style="background: url(../../img/service-2.jpg) center center/cover;">
            <div class="overlay-right">
                <div class="column" style="opacity: 25%;"></div>
                <div class="column" style="opacity: 50%;"></div>
                <div class="column"></div>
            </div>
        </div>

        <!-- -----[ Form with Inputs ]----- -->
        <form action="_register.php" method="post" onmouseenter="onformHover()" onmouseleave="onformLeave()">
            <div class="logo-1"></div>

            <div class="container-inputs">
                <div class="f-row relative">
                    <div class="icon email"></div>
                    <input type="text" name="username" placeholder="enter username"/>
                </div>
                <div class="f-row relative mt-pt25">
                    <div class="icon email"></div>
                    <input type="email" name="email" placeholder="enter email"/>
                </div>
                <div class="f-row relative mt-pt25">
                    <div class="icon lock"></div>
                    <input type="password" name="password" placeholder="enter password"/>
                </div>
                <div class="f-row relative mt-pt25">
                    <input type="checkbox" name="requestSuperAdmin" value="1">
                    <label class="size-14 grey-2"> &nbsp; Request Super Admin Role? </label><br/>
                </div>

                <button name="register" class="bttn-primary2 mt-pt25"> Register </button>
                <p class="size-14 grey-2 mt-1"> Already have an account? </p>
                <button type="button" class="bttn-secondary" onclick="location.href='login.php'"> Sign in </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const username = document.querySelector("input[name='username']").value.trim();
        const email = document.querySelector("input[name='email']").value.trim();
        const password = document.querySelector("input[name='password']").value.trim();

        if (!username || !email || !password) {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all the fields.");
        }
    });
    });
</script>

<?php include("../../partials/login-footer.php") ?>