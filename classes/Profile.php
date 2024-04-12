<?php
class Profile {
    function addprofile($req) {
        global $con;
        $fname = $req["fname"];
        $lname = $req["lname"];
        $bdate = date("Y-m-d", strtotime($req["bdate"]));

        try {
            $sql = "INSERT INTO `tbl_profile`
            VALUES (0, '$fname', '$lname', '', '$bdate', 1)";
            $con->exec($sql);
            echo "Added Successfully";
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function displayProfiles(){
        global $con;
        $sql = "SELECT * FROM `tbl_profile` ORDER BY id ";
    
        $stmt = $con->prepare($sql);
        $stmt->execute();
       
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
    function viewProfile(){

    }
    function searchProfile(){

    }
}
?>