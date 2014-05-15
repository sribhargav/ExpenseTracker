<?php

   session_start();

   if(!isset($_SESSION['userId']))
   {
   	   header("Location: ../index.php");
   }
   elseif ($_SESSION['userType'] != '1') {
       
	   switch ($_SESSION['userType']) {
		   	
		   case '2': header("Location: ../manager/home.php");
			         break;
		   
		   case '3': header("Location: ../administrator/home.php");
			         break;
	   }
   }
?>