<?php require "../database/db.php";
require '../template/header.php';
?>
<style>
    .form-control{
        width:auto !important;
    }
</style>
<script>
//    $(document).ready(function(){
//        $(".btn btn-primary").click(function(){
//             $(".form-control").attr('disabled','false');
//        });
//    });
function getEditValue(obj){
    
    var editID = $(obj).attr('id');
   
        if($(obj).text('Save')){
          $('.form-control').each(function(){
//              alert($(this).attr('id'));
//              alert(editID);
               if(editID ==  $(this).attr('id')){
                    $('.form-control').attr('disabled',false);
               }
           });
        }
        
    
//    alert(editID);
}
</script>
<?php

$sql = "Select * from kzygroup";
$query = mysqli_query($conn, $sql);

echo "<table class='table table-hover' height='auto'>";
echo"<thead>";
echo "<tr>";
echo "<th>Group Name</th>";
echo"<th>Roomate name</th>";

echo"</tr>";
echo "</thead>";
while ($row = mysqli_fetch_array($query)) {

    echo "<tbody>";

    $sql2 = 'SELECT * FROM kzygrouproommatemapping WHERE kzy_GroupId=' . $row['kzy_GroupId'];
    $query2 = mysqli_query($conn, $sql2);
    while ($row2 = mysqli_fetch_array($query2)) {
        echo "<tr>";
        echo "<td><input type='text' class='form-control'  name='kzy_GroupName' id= 'groupId_".$row['kzy_GroupId']."' value= ".$row['kzy_GroupName']." disabled></td>";
        $sql3 = 'SELECT * FROM kzyroommates WHERE kzy_RoommateId=' . $row2['kzy_RoommateId'];
        $query3 = mysqli_query($conn, $sql3);
        while ($row3 = mysqli_fetch_array($query3)) {
            echo "<td><input type='text' class='form-control'  name='kzy_GroupName' id= 'roomId_".$row2['kzy_RoommateId']."' value= ". $row3['kzy_RoommateName']." disabled></td>";
            echo"<td><button type='submit' value='Edit' class='btn btn-primary'id= 'groupId_".$row['kzy_GroupId']."' onclick = 'getEditValue(this);'>Edit</button></td>";
        }
        echo"</tr>";
    }
    echo "</tbody>";
}
echo "</table>";
require '../template/footer.php';
?>