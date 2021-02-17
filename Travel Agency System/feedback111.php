<?php
	$con=mysqli_connect("localhost","root","","TravelAgency");
	if(!$con){
		die("Connection failed");
	}
	$email=$_POST['email'];
	$text=$_POST['text'];
	
	$sql="INSERT INTO feedback(Email,Comment)VALUES('$email','$text');";
	if(mysqli_query($con,$sql))
	echo"Sucessfully submitted query";
	header('location:index.html');
		exit();
	



?>