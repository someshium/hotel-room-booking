<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
h1{
	
	text-align:center;
	margin-top:100px;
}

#banner{
	width: 100%;
	height: 400px;
}

#f1{
	border:10px solid black;
	border-radius:9px;
	
}


@keyframes x {
  0%   {background-color: red;}
  25%  {background-color: yellow;}
  50%  {background-color: blue;}
  100% {background-color: green;}
}

#heading1 {
  
	animation-name: x;
	animation-duration: 4s;
  	animation-iteration-count: infinite;
}


#g1{
	width: 100%;
	height: 500px;
}
#one{
	width: 33%;
	height: auto;
	float: left;
}
#two{
	width: 33%;
	height: auto;
	float: left;
}
#three{
	width: 33%;
	height: auto;
	float: left;
}

#book{
	padding:100px;
	background-color:#eee;
	margin-top:100px;
}


.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
  }

  #media{
text-align:center;
color:red;
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
		
	
	<h1 id="heading1">WELCOME TO TAJ</h1>
	<div style="background-image: url('img/b1.jpg'); width:100%;height: 600px;background-repeat:no-repeat; margin-left:40px; "></div>
	
	

		
		
	
	
	
	<div id="welcome">
		<h1 align="center">The Absolute Royals</h1>
		<center><font size="4" style="font-family:sans-serif;">
			Quintessentially Indian in its fabric, Taj Hotels Palaces Resorts Safaris is recognized the world over for delivering a unique flavour of hospitality that offers<br>
world-class refinement while remaining deeply rooted in its local heritage. With over 100 hotels in 62 locations, Taj offers guests the refined luxury of <br>
heritage, the effortlessly efficient service and amenities and a local experience with the assurance of quality.<br>
		</font>
<h2 style="color: red;">Our Brands</h2>
	</center>
	</div>
	<div id="g1">
		<div id="one"><img src="img/g1.jpg" width="100%">
<center>
	<h2>Taj</h2><br>
	<font style="font-family:sans-serif;">
	Spanning world-renowned landmarks, modern business<br>
hotels, idyllic beach resorts, authentic Rajput palaces and<br>
rustic safari lodges, each Taj hotel reinterprets the tradition of<br>
hospitality in a refreshingly modern way to create unique<br>
experiences and lifelong memories.<br></font>
<font color="red">More</font>
</center>
		</div>
		<div id="two"><img src="img/g2.jpg" width="100%">
<center><h2>VIVANTA</h2>
<font style="font-family:sans-serif;">HOTEL AND RESTORENT</font><br>
<font style="font-family:sans-serif;">
Work hard and play hard. Relax and energize. Ideate and<br>
confer. Evolve and transform. Revel in a spirit that presents<br>
the normal with an unexpected twist. Stylish and<br>
sophisticated, Vivanta by Taj delivers experiences with<br></font>
imagination, energy and efficiency.<br>
<font color="red">More</font>
</center>
		</div>
		<div id="three"><img src="img/g3.jpg" width="100%">
<center><h2 style="color: red">GATEWAY</h2>
<font color="red">HOTEL AND RESTORENT</font><br>
<font style="font-family:sans-serif;">
The Gateway Hotels and Resorts are designed for the modern<br>
traveller. Which is why we have a 24X7 attitude across<br>
services like dining and fitness. So when you feel like a quick<br>
bite at 1 am or a heart pumping jog at 4 am, weÃ¢â‚¬â„¢ve got you<br>
covered<br></font>
<font color="red">More</font>
</center>
		</div>
	</div>
  </div>


<section id="book">
	<h1>BOOK NOW AND GET YOUR 10% OFF</h1>
		  <div id="f1">
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

</section>
<div id="media">
                <h1>FOLLOW US ON</h1>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                

            </div>
</body>

</html>