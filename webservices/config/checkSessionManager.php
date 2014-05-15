<?php

   session_start();

   if(!isset($_SESSION['userId']))
   {
   	   header("Location: ../index.php");
   }
   elseif ($_SESSION['userType'] != '2') {
       
	   switch ($_SESSION['userType']) {
		   	
		   case '1': header("Location: ../caller/home.php");
			         break;
		   
		   case '3': header("Location: ../administrator/home.php");
			         break;
	   }
   }
?>