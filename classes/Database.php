<?php
class Database{

    public static function connectDB()
    {
        global $con;
        date_default_timezone_set('Asia/Manila');
        try {
            $db_host = 'localhost';  //
            $db_name = 'db_app';     //  databasename
            $db_user = 'root';  //  username
            $user_pw = '';  //  passwords */
       

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $user_pw);
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8
            //echo 'Successfully Connected';

        }
        catch (PDOException $err) {
            echo "<center><h3>You are currently denied access to Database. Contact Web Administrator</h3></center>";
          // echo  $err->getMessage() . "<br/>";
            file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html
            die();  //  terminate connection
        }
    }
}
?>