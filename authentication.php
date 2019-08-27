<?php
	include 'connection.php';
	$message="";
	$name = 
	if(count($_POST)>0) 
	{
		$result = mysqli_query($conn,"SELECT * FROM registration WHERE user_name='" . $_POST["uname"] . "' and password = '". $_POST["pass"]."'");
		$count  = mysqli_num_rows($result);
		if($count==0) 
		{
			$message = "Invalid Username or Password!";
		}	 
		else 
		{
			$message = "You are successfully authenticated!";
		}
	}
?>