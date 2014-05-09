<?php
require "../database/db.php";

	if(isset($_POST['submit'])){
		$roommate_name	= $_POST['kzyRoommateName'];
		$contact_number	=$_POST['kzyRoommateContactNumber'];
		$username =$_POST['username'];
		$password = $_POST['password'];
	if(!empty($roommate_name)&&(!empty($contact_number)&&(!empty($username)&&(!empty($password))))){
		$sql = "Insert into kzyroommates(kzy_RoommateName,kzy_RoommateContactNumber,kzy_username,kzy_password) values('".$roommate_name."', '".$contact_number."', '".$username."', '".$password."')";
		$result = mysqli_query($conn,$sql);
		if($result){
			echo "Records Inserted";
			header("Location:../presentation/user.php");
		}
		else{
			echo "try again";
		}
	}
		else{
			
			header("Location:../registration.php");
		}
	}
?>