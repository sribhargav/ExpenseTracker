<?php 

session_start();
//print_r($_SESSION);
$DOMAIN  = $_SERVER['HTTP_HOST']; //DOMAIN
	define("SITEURL","http://$DOMAIN/ExpenseTracker");
//	define("AABSPATH",ABSPATH."/xome");
	define("ASITEURL",SITEURL);
require "../database/db.php";	
?>

<html>
<head>
   <title>Admin page</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../js/jquery-1.11.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</head>
<style>
    .container,.jumbotron{
        width:100%;
        height:100%;
    }  
    .form-horizontal{
        margin-top: 20px;
       float:left;
        width:600px;
    }
    .col-sm-10,.col-sm-2 control-label{
        width:300px;
    }
</style>
<body >
    <div class="container">
        <div class="jumbotron">
            
            <h1><?php echo "Welcome to " . $_SESSION['display_name']; ?> </h1>
            <div class="col-xs-6 col-md-offset-3" 
                 style="background-color: #dedef8;width:100%;float:right;box-shadow: 
                    inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                <ul class="nav nav-pills">
                    <li ><a href="<?php echo ASITEURL; ?>/presentation/welcome.php">Home</a></li>
                    <li><a href="<?php echo ASITEURL; ?>/registration.php">Add Roomates</a></li>
                    <li class="active"><a href="<?php echo ASITEURL; ?>/presentation/group.php">Add Groups</a></li>

                </ul>
            </div>
         
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
                    </div>
                </div>
            </form>
        </div>
        
    </div>
   


</body>
</html>
<?php

?>