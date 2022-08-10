<!DOCTYPE html>

<html>
	<head>
<link href="admin-style.css" rel="stylesheet">
  <title>Admin Search</title>

	</head>
	
	<body>
	<?php
	session_start();
	if($_SESSION["un"]) {
		$con=mysqli_connect("localhost", "root", "", "event_details") or die("Canot connect to server.".mysqli_error($con));
			
			$aunP=$_SESSION["un"];
			
			$sql="SELECT * FROM adminaccount
			WHERE aun = '$aunP'";
			
			$result=mysqli_query($con,$sql) or die("Error in sql due to ".mysqli_error());
			while($test=mysqli_fetch_array($result,MYSQLI_NUM)){
				$aunP=$test[0];
			}
		
		echo'<div class="header">  
			<div class="wrapper">
		<img src="petlogo.png" style="float:left;width:70px;height:70px;top:0;position:fixed;"/>
</div></div>
		
		<div class="sidenav">
			<a href="http://localhost/WebProgProject/adminhome">Home</a>
			<a href="#services">View Participants</a>
			<a class="active" href="http://localhost/WebProgProject/adminsearch">Search Participant</a>
			<a href="#contact">Update Information</a>
			<a href="#contact">Delete Participant</a>
			<br/>
			<a href="http://localhost/WebProgProject/adminlogout">Log Out</a>
		</div>
		
		
		
		
		
		<div class ="center">
		<section style="background-color:#D2D2D2; weight:1000px; padding-top:10px; padding-left:10px; padding-bottom:100px; padding-right:10px;">
		<section style="background-color:#F5B0B0; padding:10px;">
		
		<h2>Registered Participants</h2>
		<form name=form method=post action=adminsearchresult.php>
		Enter the ID you want to search:
			<input name=id type=text>
			<br/><br/>
			
			Enter the username you want to search:
			<input name=username type=text>
			<br/><br/>
			
			Enter the email you want to search:
			<input name=email type=text>
			<br/><br/>
			
			<input type=submit value=Search name=Search></input>
			<input type=reset></input>
			
		</form>
		<br/><br/>
		</section>
		</section>

  
		</div>';
	}
	else{
			echo "<h1>Please login first .</h1>";
		}
	?>
	</body>
</html>