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
   <link href="<?php echo ASITEURL; ?>/css/bootstrap.min.css" rel="stylesheet">
   <script src="<?php echo ASITEURL; ?>/js/jquery-1.11.1.min.js"></script>
   <script src="<?php echo ASITEURL; ?>/js/bootstrap.min.js"></script>
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
    .btn-custom {
				background-color: hsl(202, 100%, 16%) !important;
				background-repeat: repeat-x;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0081cc", endColorstr="#003351");
				background-image: -khtml-gradient(linear, left top, left bottom, from(#0081cc), to(#003351));
				background-image: -moz-linear-gradient(top, #0081cc, #003351);
				background-image: -ms-linear-gradient(top, #0081cc, #003351);
				background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #0081cc), color-stop(100%, #003351));
				background-image: -webkit-linear-gradient(top, #0081cc, #003351);
				background-image: -o-linear-gradient(top, #0081cc, #003351);
				background-image: linear-gradient(#0081cc, #003351);
				border-color: #003351 #003351 hsl(202, 100%, 10%);
				color: #fff !important;
				text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.39);
				-webkit-font-smoothing: antialiased;
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
         
          
        
   



