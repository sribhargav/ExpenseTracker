<?php

   session_start();

   if(!isset($_SESSION['userId']))
   {
   	   header("Location: ../index.php");
   }
   elseif ($_SESSION['userType'] != '3') {
       
	   switch ($_SESSION['userType']) {
		   	
		   case '2': header("Location: ../manager/home.php");
			         break;
		   
		   case '1': header("Location: ../caller/home.php");
			         break;
	   }
   }
?>