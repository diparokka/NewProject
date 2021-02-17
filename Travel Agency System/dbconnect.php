<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die ("Connection Failed");
	}
	$sql="CREATE DATABASE TravelAgency";
	if(mysqli_query($con, $sql))
	{
		
		echo "Successfully created Database";
	}
		else
		{
				echo "Error!!!";
		}
?>	