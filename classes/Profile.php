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
    function viewProfile() {

    }
    function searchProfile() {
        
    }
    function displayProfile() {
        global $con;
        $sql = "SELECT * FROM `tbl_profile` ORDER BY id";
        $stmt = $con->pre
    }
}
?>