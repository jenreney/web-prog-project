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
		<br/>
		<section style="background-color:#C5F5B0; padding:10px;">
		<h2>Search Result</h2>';
		
		
		
		
			$con=mysqli_connect("localhost", "root", "", "event_details") or die("Canot connect to server.".mysqli_error($con));
			
			$idP=$_POST["id"];
			$usernameP=$_POST["username"];
			$emailP=$_POST["email"];
			
			
			$sqli_search="SELECT * FROM participant_details
			WHERE id LIKE '%$idP%'
			AND username LIKE '%$usernameP%'
			AND email like '%$emailP%'";
		
			$result=mysqli_query($con,$sqli_search) or die("Error in sql due to ".mysqli_error());
			
			if(mysqli_num_rows($result)==0) {
				echo "No search result";
			}
			else{
				
			
			echo'<table border="2" cellspacing="2" cellpadding="2" style="background-color:#F6F6F6; ">
			<tr style="background-color:#D3FFC3;">
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Name</th>
		<th>IC</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Gender</th>
		<th>State</th></b></tr>';
			
			
			
			while($test=mysqli_fetch_array($result,MYSQLI_NUM)){
				$idP=$test[0];
				$usernameP=$test[1];
		$passwordP=$test[2];
		$nameP=$test[3];
		$icP=$test[4];
		$phoneP=$test[5];
		$emailP=$test[6];
		$genderP=$test[7];
		$stateP=$test[8];
				
				echo "<tr>
				<td>$idP</td>
				<td>$usernameP</td>
		<td>$passwordP</td>
		<td>$nameP</td>
		<td>$icP</td>
		<td>$phoneP</td>
		<td>$emailP</td>
		<td>$genderP</td>
		<td>$stateP</td>
		</tr>";

			}
						echo "</table>";
			}
	}
	else{
			echo "<h1>Please login first .</h1>";
		}
		?>	
	</section>
	</section>
  
		</div>
	</body>
</html>