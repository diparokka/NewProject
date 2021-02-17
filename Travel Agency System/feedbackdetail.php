<!DOCTYPE html>
<html>
<head>
	<title> AshuTosh Travel and Tours Pvt. Ltd </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<style type="text/css">

header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img6.jpg);
	height: 50vh;
	background-size: cover;
	background-position: center;
}

.title h2{
	color: #fff;
	font-size: 30px;
	margin-bottom: 190px;
	padding-bottom: 60px;
}

.container{ position: relative; width: 960px; margin: 0 auto; padding: 0; }
.container{
	margin-top: 30px;
    border-style: solid;
    border-radius: 1px;
    border-color: #f2f2f2;
    height: 50vh;

}

.btn {
    background-color: #bfbfbf;
    border: none;
    color: white;
    text-align: center;
    font-size: 12px;
    cursor: pointer;
    border: 1px solid #fff;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    transition: 0.6s ease;
}

.btn:hover{
    background-color: #fff;
    color: #000;

}
table {
	margin-top: 6px;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #94b8b8;
  color: white;
}

</style>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li><a href="#down">Package Details</a></li>
                <li><a href="bookingdetail.php">Booking Details</a></li>
                <li><a href="userdetail.php">User Details</a></li>
                <li><a href="feedbackdetail.php">FeedBack</a></li>
				
				<li><a href="login.html">Logout</a></li>

			</ul>		
		</div>
			
		<div class="title">
			<h2>FeedBack Detail</h2>
		</div>
	</header>
<?php
	$con = mysqli_connect("localhost", "root", "", "TravelAgency");
	if(!$con)
	{
		die ("Error!!");
	}

	$sql =" SELECT * FROM Feedback";
	$result =mysqli_query($con, $sql);
	echo "<div class='container'>";
		print "<table border= '1'> ";
		print " <tr>
				<th>Email</th>
		        <th>Comment</th>
		        
		       
		        </tr>";
	if(mysqli_num_rows($result)>0)
	{
		
	 while($row=mysqli_fetch_assoc($result))
	 {
	 	echo "<tr><td>".$row['Email']."</td><td>".$row['Comment']."</td></tr>";
	 }
	 	echo "</table>";
	 	echo "</div>";	        
	}

	else{
		echo "No record !!";
	}
?>