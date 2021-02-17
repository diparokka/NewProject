<?php
	
	$a=$_POST['pid'];
	$b=$_POST['noa'];
	$c=$_POST['noc'];	
	$d=$_POST['date'];

	$con = mysqli_connect("localhost", "root", "", "TravelAgency");
	if(!$con)
	{
		die ("Error!!");
	}

	$sql="INSERT INTO Book(pid, No_of_Adults,No_of_Children,BDate)
			VALUES('$a','$b','$c','$d')";

	if(mysqli_query($con, $sql))
	{
		echo"<script type='text/Javascript'>
						alert('Thank You For Booking!!');
					</script>";

					include "userpackage.html";	
		
	}		
	

	else{
		 echo "Error!!";
	}
	
