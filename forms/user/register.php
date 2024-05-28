<?php
include("../../partials/form-header.php");
?>

<div class="fullWindow centerContent2">
    <form method="post">
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="firstname" placeholder="first name"/>
        </div>
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="lastname" placeholder="last name"/>
        </div>
        <div class="f-row relative">
            <div class="icon email"></div>
            <input type="email" placeholder="enter email"/>
        </div>
        <div class="f-row relative">
            <div class="icon lock"></div>
            <input type="password" placeholder="enter password"/>
        </div>
        <div class="f-row relative">
            <div class="icon lock"></div>
            <input type="confirm" placeholder="confirm password"/>
        </div>
        <button> Register </button>
        <p> Already have an account?</p>
        <button> Sign in </button>
    </form>
</div>

<?php include("../../partials/form-footer.php") ?>