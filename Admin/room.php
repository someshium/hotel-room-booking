<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

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

form{
	font-size:40px;
	border:10px solid black;
	border-radius:40px;
	
	width:70%;
}

#form{
	width:100%;
}
#banner{
	width:100%;
}
</style>
	
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg');background-size:auto;height:800px;">
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
			<center><div id="form">
				<form action="room.php" method="post">
			<table style="">
				
				<tr>
					<td>Room No</td>
					<td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>
					
				</tr>
				
				<tr>
					<td>Room Type</td>
					<td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
					
				</tr>
				<tr>
					<td>Room Price</td>
					<td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
					
				</tr>
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>
				
			</table>
		</form>
		<?php
         if(isset($_POST['submit']))
         {
         	$rno=$_POST['rno'];
         	$type=$_POST['type'];
         	$p=$_POST['price'];
         	if(mysqli_query($a,"insert into room(rno,type,price) values('$rno','$type','$p')"))
         	{
         		echo "Successfully Added";
         	}
         	else
         	{
         		echo "Data Not Insert";
         	}
         }

		?>
					</div></center>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>