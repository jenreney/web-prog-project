<!DOCTYPE html>

<html>
	<head>
<link href="admin-style.css" rel="stylesheet">
  <title>Admin Home</title>


	</head>
	
	<body>
	<?php
	session_start();
	if($_SESSION["un"]) {
		$con=mysqli_connect("localhost", "root", "", "event_details");
			
			$aunP=$_SESSION["un"];
			
			$sql="SELECT * FROM adminaccount
			WHERE aun = '$aunP'";
			
			$result=mysqli_query($con,$sql);
			while($test=mysqli_fetch_array($result,MYSQLI_NUM)){
				$aunP=$test[0];
			}
		
		echo'<div class="header">  
			<div class="wrapper">
		<img src="petlogo.png" style="float:left;width:70px;height:70px;top:0;position:fixed;"/>
</div></div>
		
		<div class="sidenav">
			<a class="active" href="http://localhost/WebProg/adminhome">Home</a>
			<a href="#services">View Participants</a>
			<a  href="http://localhost/WebProgProject/adminsearch">Search Participant</a>
			<a href="#contact">Update Information</a>
			<a href="#contact">Delete Participant</a>
			<br/>
			<a href="http://localhost/WebProgProject/adminlogout">Log Out</a>
		</div>
		
		
		
		
		<div class ="center">
		
		<h1>Welcome, Admin</h1>
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