<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

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
	padding-top:150px;
}
</style>






</head>


<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
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
			<h1 style="text-align: center;font-size:100px ">Welcome Admin</h1>
			<div style="background-color: rgba(255,255,255,0.6); border:10px solid black;border-radius:30px;font-size:25px;">
			<table>
				<tr>
					<th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">Option</th>
				</tr>
				<?php
                 $q1="select * from room";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                   
                ?>
				<tr>
					<td width="20%" height="50px"><center><?php echo $rno; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $price; ?></center></td>
					<td width="20%" height="50px"><center><?php echo $status; ?></center></td>
					<td><a style="color: blue;font-size:25px;" href="co.php? rno=<?php echo $rno; ?>" ><b>Check Out</b></a> </td>
				</tr>
				<?php
			}
				?>
			</table>
		</center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>