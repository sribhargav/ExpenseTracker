<?php
require '../database/db.php';
if($_POST['kzy_GroupName']){
    $sql = "INSERT INTO kzygroup (kzy_GroupName)VALUES('".$_POST['kzy_GroupName']."')";
    $query = mysqli_query($conn, $sql);
    if($query){
        $kzyGroupID = mysqli_insert_id($conn);
       
        foreach ($_POST['cs'] as $value) {
            $sql = "INSERT INTO kzygrouproommatemapping (kzy_GroupId,kzy_RoommateId)VALUES('".$kzyGroupID."','".$value."')";
            $query = mysqli_query($conn, $sql); 
            if($query){
                echo 'Records successfully inserted';
            }
        }
           
    }
}
?>
