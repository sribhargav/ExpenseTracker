<?php 

$conn = mysqli_connect('localhost','root','','expensetracker');
if(!$conn){
	echo "My sql error inconnection".mysql_error();
}
//
?>