<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<style>
		body{
			font-size:20px;
			font-family:sans-serif;
		}


  
		</style>
	
</head>
<body>

	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<h1 style="text-align:center; font-size:50px;padding:30px;	">TAJ ADMIN PORTAL</h1>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post" style="border:10px solid black;border-radius:50px;	">
	       <table>
	       	<tr>
	       		<td width="90%" height="90px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Password</td>
	       		<td width="50%" height="50px"><input type="password" name="ps" placeholder="Enter Password" title="Enter Password"></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px;height: 50px;border-radius: 30px;opacity: 0.8; margin-left:250px;	"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['sub']))
           {
           	     $un=$_POST['un'];
           	     $ps=$_POST['ps'];
           	    $q1="select * from admin";
           	    $run=mysqli_query($a,$q1);
           	    $row=mysqli_fetch_array($run);
           	     $u=$row['un'];
           	     $p=$row['ps'];
           	     if($un==$u&& $ps==$p)
           	     {
           	     	header("Location:ahome.php");
           	     }
           	     else
           	     {
           	     	header("Location:index.php?Wrong User");
           	     }

           }
           
	       ?>	
	</div></center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>