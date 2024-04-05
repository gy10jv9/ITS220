<?php 
include("partials/header.php");
include("classes/Profile.php");

$profile = new Profile();

if(isset($_REQUEST["btn"])) {
    $profile->addprofile($_REQUEST);
};
?>

        <h1> Registration Form </h1>
        <form method="POST">
            <div>
                <label> Firstname: </label>
                <input type="text" name="fname"/>
            </div><br/>
            <div>
                <label> Lastname: </label>
                <input type="text" name="lname"/>
            </div><br/>
            <div>
                <label> Birthday: </label>
                <input type="date" name="bdate">
            </div><br/>

            <button name="btn"> Register </button>
        </form><br/>

        <a href=""> View All </a>
        
<?php include("partials/footer.php")?>