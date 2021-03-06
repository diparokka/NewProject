<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> AshuTosh Travel and Tours Pvt. Ltd </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img14.jpg);
	height: 35vh;
	background-size: cover;
	background-position: center;
}


.title h1{
	color: #fff;
	font-size: 40px;
	margin-bottom: 450px;
}

.container{ position: relative; width: 960px; margin: 0 auto; padding: 0; }

.pack{
    margin-top: 20px;
    height: 60vh;
}

.container{

    border-style: solid;
    border-radius: 1px;
    border-color: #f2f2f2;
    height: 70vh;

}


.container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 35%;
  height: 20%; /* Full width */
  margin: 500px;
  padding: 40px; 
  padding-left: 40px; 
}

textarea{
        height:100%;
        width:50%;
    }

form input[type=submit] {
        background-color:#666666;
        width : 20%;
        height :40px;
        border : none;
        color : white;
        font-size: 20px;
        font-family: 'WildWest';
    
    }
    form input[type=reset] {
        background-color:#666666;
        width : 20%;
        height :40px;
        border : none;
        color : white;
        font-size: 20px;
        font-family: 'WildWest';
    
    }

form input[type=radio]
{
  margin-top: 13px;
}

h2 b{
	margin-top: 150px;
        width : 960px;
        height :60px;
        border : none;
        color : black;
	    font-size: 28px;
	   font-family: 'WildWest';
}

h3{
	margin-top: 20px;
	font-size: 24px;
	font-family: 'WildWest';
}


footer {
	display: block;
    padding: 0px 0 60px;
    color: #a3afba;
    font-family: 'Open Sans', sans-serif;
    margin-top: 40px;
}
.socials {
    padding-top: 33px;
    float: right;
}

.socials a {
    background: url(time_bg.png) 0 center repeat-x;
    float: left;
    display: block;
    font-size: 20px;
    width: 40px;
    height: 37px;
    color: #e5e5e5;
    text-align: center;
    line-height: 37px;
    border-radius: 7px;
}

.socials a:hover {
    background-position: 0 -100px;
    background-color: #F0F3F5;
    color: #d84a45;
}

.socials a +a {
    margin-left: 10px;
}


.copy {
    float: left;
    padding-top: 44px;
    font-size: 10px;
    line-height: 18px;
    text-align: left;
    text-transform: uppercase;
}

    .container_12{ position: relative; width: 960px; margin: 0 auto; padding: 0; }
.grid_12
	{ float: left; display: inline; margin-left: 10px; margin-right: 10px; }
	.container_12 .alpha               { margin-left: 0; }
     .container_12 .omega               { margin-right: 0; }
     .container_12 .grid_12			{ width: 940px; }
     @media only screen and (min-width: 768px) and (max-width: 995px) {
        .container_12                                  { width: 768px; }
        .grid_12
		{ margin-left: 10px; margin-right: 10px;  }
		.container_12 .alpha               { margin-left: 0;}
         .container_12 .omega               { margin-right: 0;
		.container_12 .grid_12			{ width: 748px; }
		 @media only screen and (max-width: 767px) {
        .container_12{width: 300px;}
        .grid_12{margin: 0;}
 .container_12 .grid_12{width: 300px;}
}

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container_12 { width: 420px; }
        .grid_12{margin: 0;}
        .container_12 .grid_12{width: 420px;}
    }
    .container_12:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; }
 .fa {
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

    .fa-twitter:before {
  content: "\f099";
}
.fa-facebook:before {
  content: "\f09a";
}
.btn {

  margin-right: 20px;
    background-color: #555;
    border: none;
    color: white;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    border: 1px solid #fff;
  padding: 10px 30px;
  color: #fff;
  text-decoration: none;
  transition: 0.6s ease;
}
.input-group{
  margin-top: 15%;
}

.input-group label{
  text-align: left;

}

.input-group input{
  height: 25px;
  width: 93%;
  padding: 5px 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid grey;
}



</style>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="packages.html">Packages</a></li>
				<li><a href="AboutUs.html">About Us</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li  class="active"><a href="feedback.php">Feedback</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>		
		</div>
		<div class="title">
			<h1>Give Feedback</h1>
     </div>       		
	</header>


	<div class="pack">
		<div class="container" >
			<p><center>
			<h2  style="margin-top:5%;" ><b> GET IN TOUCH!!</b></h2>
			<font color="black" size="5%">
			<form method='post' action='feedback11.php'>
      <div class="input-group" style="margin-top:4%;"><label>Email : </label><input type='email' name='email' required></br></br></div>
		
		</font>
		<h3> Describe Feedback: </h3>
			<textarea cols="40" rows="10" name="text"></textarea>
			<br/><input type="submit" value="Feedback">
			<input type="reset">
    		</form></center></p>
</div>
</div>
<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Eazy Booking (c) 1995 | <a href="#">Privacy Policy</a> | www.eazyBookingNepal.com. All rights reserved.
					</div>
				</div>
			</div>
		</footer>
</body>
</html> 