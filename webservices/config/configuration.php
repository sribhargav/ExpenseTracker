<?php

    $con = mysqli_connect('localhost','root','horcrux','callsheet');
	
	if(mysqli_connect_error())
	{
		die("Could not connect to database..Require");
	}

?>