<?php
include("classes/Database-copy.php");
include("classes/Province.php");

$db = new Database();
$Province = new Province($db);
?>

<select name = 'province' class="form-control" required='required'>
         <?php
            $province = $Province->getProvince();
            foreach($province as $prt){ ?>
            <option value = '<?php echo $prt['id'];?>'><?php echo $prt['provDesc'];?></option>
            <?php } 
        ?>
 </select>