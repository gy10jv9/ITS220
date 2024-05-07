<?php
class Volunteer {
    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function add($firstName) {
        $query = "INSERT INTO `tbl_members2` (firstName) 
                VALUES ('$firstName')";

        $this->db->getConnection()->exec($query);
    }

    public function displayall() {
        $query = "SELECT * FROM `tbl_members2`";

        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }
}
?>

<?php
    // function addprofile($req) {
    //     global $con;
    //     $fname = $req["fname"];
    //     $lname = $req["lname"];
    //     $bdate = date("Y-m-d", strtotime($req["bdate"]));

    //     try {
    //         $sql = "INSERT INTO `tbl_profile`
    //         VALUES (0, '$fname', '$lname', '', '$bdate', 1)";
    //         $con->exec($sql);
    //         echo "Added Successfully";
    //     }
    //     catch(PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //     }
    // }
    // function displayProfiles(){
    //     global $con;
    //     $sql = "SELECT * FROM `tbl_profile` ORDER BY id ";
    
    //     $stmt = $con->prepare($sql);
    //     $stmt->execute();
        
    //     return $stmt->fetchAll(PDO::FETCH_BOTH);
    // }
    // function viewProfile($id = 0){
    //     global $con;
    //     $sql = "SELECT * FROM `tbl_profile` WHERE id = $id ";
    //     $stmt = $con->prepare($sql);
    //     $stmt->execute();
        
    //     return $stmt->fetch(PDO::FETCH_BOTH);
    // }
    // function searchProfile(){

    // }
//
// ?>