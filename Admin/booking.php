<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
	padding-top:150px;
	font-size:25px;
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
		<div  style="background-image: url('img/bms.jpg');background-size: auto; width: 100%; height: 710px">
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
			<h1 style="text-align: center; font-size:80px;">Welcome Admin</h1>
			<div style="background-color: rgba(255,255,255,0.6); border:5px solid white;border-radius:20px;">
			<table>
				<tr>
					<th width="10%" height="50px">Name</th>
                     <th width="10%" height="50px">Id No.</th>
                     <th width="10%" height="50px">City</th>
                     <th width="10%" height="50px">District</th>
                     <th width="10%" height="50px">State</th>
                     <th width="10%" height="50px">Check In Date</th>
                     <th width="10%" height="50px">Check Out Date</th>
                     <th width="10%" height="50px">Member</th>
				</tr>
				<?php
                 $q1="select * from f1";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$name=$row['name'];
                 	$idno=$row['idno'];
                 	$city=$row['city'];
                 	$dis=$row['dis'];
                   	$state=$row['state'];
                     	$cidate=$row['cidate']; 
                     	$codate=$row['codate']; 
                     	$m=$row['m']; 
                ?>

				<tr>
					<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $city; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $state; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $codate; ?><center></td>
					<td width="10%" height="50px"><center><?php echo $m; ?></center></td>
				</tr>
				<?php
				  }
				?>
			</table>
		</center>
		</div>

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
</body>

</html>