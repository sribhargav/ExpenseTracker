<?php 

session_start();
//print_r($_SESSION);
echo "Welcome:".$_SESSION['display_name'];
?>