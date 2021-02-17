<?php
	$con = mysqli_connect("localhost", "root", "", "TravelAgency");
	if(!$con)
	{
		die ("Error!!");
	}
	$a=$_POST['adminid'];
	$e=$_POST['adminem'];		
	$p=$_POST['pass'];

	// $sql="INSERT INTO Admin(AdminId, Email, Password)
	// 		VALUES('$a','$e','$p')";

	$sql="SELECT Password FROM Admin WHERE Email='$e'";

	if(mysqli_query($con, $sql))
	{
		if($e=="admin@admin.com" && $p=="admin"){
			header('location:adminpackages.html');

		}
		else{
		header('location:admin.php');

		
	}
	}			

	else{
		print "Error!!";
	}

?>	

<!-- $a=joj
if(strcmp($a,$dbkoem)&&strcmp($b,$dbkopw)){
	header('location:package.php');
}
else{
		header('location:admin.php');

}*/
?> -->