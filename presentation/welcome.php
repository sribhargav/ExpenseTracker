<?php 

session_start();
//print_r($_SESSION);
$DOMAIN  = $_SERVER['HTTP_HOST']; //DOMAIN
	define("SITEURL","http://$DOMAIN/ExpenseTracker");
//	define("AABSPATH",ABSPATH."/xome");
	define("ASITEURL",SITEURL);
	
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
                    <li class="active"><a href="<?php echo ASITEURL; ?>/presentation/welcome.php">Home</a></li>
                    <li><a href="<?php echo ASITEURL; ?>/registration.php">Add Roomates</a></li>
                    <li><a href="<?php echo ASITEURL; ?>/presentation/group.php">Add Groups</a></li>

                </ul>
            </div>
         
          
        </div>
        
    </div>
   


</body>
</html>
