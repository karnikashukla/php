<?php
	include 'connection.php';
	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$mobno = $_POST['mob'];
	$address = $_POST['address'];

	$sql = "INSERT INTO registration (user_name,password,email_id,mobile_number,address)
			VALUES ('$name','$pass','$email','$mobno','$address')";

	if (mysqli_query($conn,$sql)) {
    	echo "<br>New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


?>