<?php 

session_start();
//print_r($_SESSION);
$DOMAIN  = $_SERVER['HTTP_HOST']; //DOMAIN
	define("SITEURL","http://$DOMAIN/ExpenseTracker");
//	define("AABSPATH",ABSPATH."/xome");
	define("ASITEURL",SITEURL);
        require '../template/header.php';
        require '../template/footer.php';
?>

