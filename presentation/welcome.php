<?php 

session_start();
//print_r($_SESSION);
$DOMAIN  = $_SERVER['HTTP_HOST']; //DOMAIN
	define("SITEURL","http://$DOMAIN/ExpenseTracker");
//	define("AABSPATH",ABSPATH."/xome");
	define("ASITEURL",SITEURL."/registration.php");
	
?>

<html>
<head>
   <title>Try Bootstrap Online</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <script src="../js/jquery-1.11.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row" >
        <div class="col-xs-6 col-md-offset-3" 
             style="background-color: #dedef8;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <p><?php echo "Welcome:" . $_SESSION['display_name']; ?> </p>

            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?php echo ASITEURL; ?>">Add Roomates</a></li>
                
            </ul>
        </div>

    </div>


</body>
</html>
