<!DOCTYPE html>

<html>
	<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="userhome-style.css" rel="stylesheet">
  <title>User Home</title>

	</head>
	
	<body>
		<?php
	session_start();
	if($_SESSION["username"]) {
		echo'<div class="header">  
			<div class="wrapper">
		<img src="petlogo.png" style="float:left;width:70px;height:70px;top:0;position:fixed;"/>
</div></div>
		
		<div class="sidenav">
			<a class="active" href="http://localhost/WebProgProject/userhome">Home</a>
			<a href="http://localhost/WebProgProject/userprofile">View Profile</a>
			<a  href="#nothing">Update Profile</a>
			
			<br/>
			<a href="http://localhost/WebProgProject/userlogout">Log Out</a>
		</div>';
		

		$con=mysqli_connect("localhost", "root", "", "event_details") or die("Canot connect to server.".mysqli_error($con));
			
			$unP=$_SESSION["username"];
			
			
			$sql="SELECT * FROM participant_details
			WHERE username='$unP'";
			
			$result=mysqli_query($con,$sql) or die("Error in sql due to ".mysqli_error());
			while($test=mysqli_fetch_array($result,MYSQLI_NUM)){
				$nameP=$test[3];
			}
			
			
		
		
		
		echo'<div class ="center">
		
		<h1>Welcome,'; echo"$nameP"; echo'</h1>
		Please click on the links at the side to get started.
		</section>
		</div>';
	}
	else{
			echo "<h1>Please login first .</h1>";
		}
		
	?>
	</body>
</html>