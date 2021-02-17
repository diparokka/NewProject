<?php
	// $pid = $_POST['pid'];
	// $pname = $_POST['pname'];
	// $tdu = $_POST['td'];
	// $des = $_POST['desti'];
	// $desc = $_POST['descr'];
	// $am = $_POST['amt'];
	// $aim = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	$con=mysqli_connect("localhost","root","", "travelagency");
	
	if (isset($_POST['insert'])){
		$paid = $_POST['pid'];
		$pname = $_POST['pname'];
		$tdu = $_POST['td'];
		$des = $_POST['desti'];
		$desc = $_POST['descr'];
		$am = $_POST['amt'];
		echo $paid;
		//$aim = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$aim=$_POST["image"];
		$sql="INSERT INTO pacakge(Pid, PName, Travel_Duration, Destination, Description, Amount, Image)
						   VALUES(".$paid.",'".$pname."','".$tdu."','".$des."','".$desc."',".$am.",'".$aim."')";
		if(mysqli_query($con, $sql))
		{
			
			echo '<script>alert("Inserted data successfully")</script>';
		}
		else
		{
			echo "Error!!!";
		}
	}
?>	