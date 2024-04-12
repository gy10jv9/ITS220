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
            <th> Address </th>
            <th> Birthday </th>
            <th> Status </th>
            <th> Action </th>
        </tr>

        <?php foreach($profiles as $prof){ ?>

        <tr>
            <td><?php echo $prof['id'];?></td>
            <td><a href = "profile.php?id=<?php echo $prof['id']; ?>"><?php echo $prof['fname'];?> </a></td>
            <td><?php echo $prof['lname'];?></td>
            <td><?php echo $prof['address'];?></td>
            <td><?php echo date("F d,Y" , strtotime($prof['bdate']));?></td>
            <td><?php echo $prof['status'];?></td>
            <td>
                <img src ='images/view.png' width = '16' >
                <img src ='images/edit.png' width = '16' >
                <img src ='images/delete.png' width = '16' >
            </td>
        </tr>

         <?php } ?>
    </table>
        
<?php include("partials/footer.php")?>