<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
			#header{
	width: 100%;
	height: 70px;
	background: #aaa;
	position: fixed;
	top:0;
	border: 10px solid black;
	left:0px;
	right:10px;
}


 li{
	list-style: none;
	float: left;
	width: 14%;
	height: 50px;
	text-align: center;
}

a{
	text-decoration: none;
	color: black;
	font-family:sans-serif;
	font-size: 20px;
}

#banner{
	padding:150px;
	margin-top:100px;
}

h1{
	margin-top:90px;
	font-size:100px;


}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
  }

  #media{
	  text-align;center;
	  width:70%;
	  margin;auto;
  }
  
  /* Add a hover effect if you want */
  .fa:hover {
    opacity: 0.7;
  }
  
  /* Set a specific color for each brand */
  
  /* Facebook */
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  /* Twitter */
  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-instagram {
    background: pink;
    color: white;
  }
  

</style>
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 610px; width: 100%; height: 610px">
		<div id="header">
			
			<div id="nav">
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Details</a></li>
					<li><a href="helpadmin.html">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner">
			<h1 style="text-align: center; ">Welcome Admin</h1>
		</div>
	
	</div>
	<br>
	<center>
	<div id="media">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                

	</div>
	<center>
	
  </div>
</body>

</html>