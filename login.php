<?php 
session_start();
 require "database/db.php";
error_log(0);
 
 /*$errflag = false;

	if($_POST['username']!= 'admin'||$_POST['username']=="")
	{
        $errmsg_arr[] = 'Please enter correct Username';
        $errflag = true;
    }
	
    if($_POST['password'] == '' || $_POST['password'] != "admin") {
        $errmsg_arr[] = 'Please enter correct password';
        $errflag = true;
    }
	
	 if($errflag) 
	 {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        
        header("Location:index.php");
        exit();
	 }
	 else
	 {
		if(($_POST['username']) && ($_POST['password'])) 
		{
			$result = mysqli_query($conn,"select kzy_username,kzy_password from kzyroommates");
			
			while($row = mysqli_fetch_array($result))
			{
				if(($row['kzy_username'] =="admin") && ($row['kzy_password'] == "admin"))
				{	
				 	$_SESSION['display_name'] = $_POST['username'];
				}
			    
			}
			header("Location:presentation/welcome.php");
 		}	
	}*/
	
	$result = mysqli_query($conn,"select kzy_username,kzy_password from kzyroommates where kzy_username='".$_POST['username']."' and kzy_password='".$_POST['password']."'");
		if(mysqli_num_rows($result)>0){
			$_SESSION['display_name'] = $_POST['username'];
			header("Location:presentation/welcome.php");
		}
			/*while($row = mysqli_fetch_array($result))
			{
				if(($row['kzy_username'] =="admin") && ($row['kzy_password'] == "admin"))
				{	
				 	$_SESSION['display_name'] = $_POST['username'];
				}
			    
			}
			header("Location:presentation/welcome.php");*/
	
?>
