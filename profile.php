<?php 
include("partials/header.php");
include("classes/Profile.php");

$id = $_GET['id'];
$Profile = new Profile();
$profile = $Profile->viewProfile($id);
?>

<p> Name: <?php echo $profile['fname'] ?> </p>
<p> Last Name: <?php echo $profile['lname'] ?> </p>
<p> Birthdate: <?php echo date("F d,Y" , strtotime($profile['bdate']));?> </p>
<p><a href="view.php"> View All </a></p>
        
<?php include("partials/footer.php")?>