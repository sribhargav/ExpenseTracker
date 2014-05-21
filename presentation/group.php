<?php 

        require '../template/header.php';
require "../database/db.php";	
?>


<script>
//    $(document).ready(function(){
//    $("#showList").click(function(){
//        $(".form-group").hide();
//       $.ajax({
//                type:"GET",
//                url:"<?php echo ASITEURL; ?>/ajaxCall/groupList.php/getGroupList", 
//                data:"",
//                success:function(data1) {
//                    $("#groupList").html(data1);
//                }
//    });
//   });
//   });
</script>
          <form class="form-horizontal" role="form" action="../process/group_process.php" method="post">
                <div class="form-group">
                    <label for="Group Name" class="col-sm-3 control-label">Group Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name ="kzy_GroupName" 
                               placeholder="Enter Group Name">
                    </div>
                </div>
              
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        
                           
                            <?php
                           require "../database/db.php"; 
                            $result =  "SELECT * FROM kzyroommates WHERE kzy_RoommateId != 1";
                              
                                    $query = mysqli_query($conn, $result);
                                   while ($row = mysqli_fetch_array($query)) {

                                        $kzyRoommateID = $row['kzy_RoommateId'];
                                        $kzyRoommateName = $row['kzy_RoommateName'];?>
                                        <div class="checkbox">
                                     <?php  
                                     if(!isset($kzyRoommateID)){
                                         $checked = "checked=''";
                                     }
                                     else{
                                         $checked ="checked='checked'";
                                     }
                                     echo "<input type='checkbox' name='cs[]' value='$kzyRoommateID' $checked/>" . $kzyRoommateName;?>
                                        </div>
                            <?php        }
                             ?>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg">Add</button>
                        <a href="<?php echo ASITEURL; ?>/list/list_group.php"<button type="button" class="btn btn-primary btn-lg" id="showList">Show List</button></a>
                    
                    </div>
              
                </div>
              
            </form>

<!--</body>
</html>-->
<?php
 require '../template/footer.php';
?>