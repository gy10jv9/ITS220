<?php 
include("partials/header.php");
include("classes/Profile.php");

$Profile = new Profile();
$profiles = $Profile->displayProfiles();
?>

    <table border="1" cellpadding="5">
        <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Birthday </th>
            <th> Action </th>
        </tr>
    </table>
        
<?php include("partials/footer.php")?>