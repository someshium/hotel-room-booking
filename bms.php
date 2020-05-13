<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style>

		body{
			font-family:sans-serif;
			font-size:20px;
		}
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
h1{
	
	text-align:center;
	margin-top:100px;
}

#banner{
	width: 100%;
	height: 400px;
}

form{
	padding:40px;
	border:10px solid black;
	border-radius:40px;
	width:70%;
	margin:auto;
	background-color:rgb(40,40,40,0.4);
	
}
</style>
	
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="ourhotel.html">Our Hotel</a></li>
					<li><a href="helpuser.html">Help</a></li>
				</ul>
			</div>
		</div>
		
		

		<div id="f1">
			<h1>PLAN YOUR JOURNEY</h1>
		<form action="r1.php" method="get">
		<center><table>
			<tr>
				<th width="20%" height="50px">Destination</th>
				<th width="20%" height="50px">Check In Date</th>
				<th width="20%" height="50px">Check Out Date</th>
				<th width="20%" height="50px">Room</th>
				<td rowspan="2"><input type="submit" value="Check" name="sub"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
				<td width="20%" height="50px">
					<center><select name="room">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></center>
				</td>
			</tr>
		</table></center>
	</form>
	</div>


		</div>
  </div>
</body>

</html>