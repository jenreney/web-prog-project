<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="userprofile-style.css" rel="stylesheet">
  <title>User Profile</title>


</head>
<body>
	<?php
	session_start();
		if($_SESSION["username"]) {
		$con=mysqli_connect("localhost", "root", "", "event_details") or die("Canot connect to server.".mysqli_error($con));
			
			$unP=$_SESSION["username"];
			
			
			$sql="SELECT * FROM participant_details
			WHERE username='$unP'";
			
			$result=mysqli_query($con,$sql) or die("Error in sql due to ".mysqli_error());
			while($test=mysqli_fetch_array($result,MYSQLI_NUM)){
				$usernameP=$test[1];
		$passwordP=$test[2];
		$nameP=$test[3];
		$icP=$test[4];
		$phoneP=$test[5];
		$emailP=$test[6];
		$genderP=$test[7];
		$stateP=$test[8];
			}
		


	echo'<div class="header">  
			<div class="wrapper">
		<img src="petlogo.png" style="float:left;width:70px;height:70px;top:0;position:fixed;"/>
</div></div>
		
		<div class="sidenav">
			<a  href="http://localhost/WebProgProject/userhome">Home</a>
			<a class="active" href="http://localhost/WebProgProject/userprofile">View Profile</a>
			<a  href="#nothing">Update Profile</a>
			
			<br/>
			<a href="http://localhost/WebProgProject/userlogout">Log Out</a>
		</div>
		
	
			
			

		
		<div class ="center">
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://thumbs.dreamstime.com/z/squirrel-cute-forest-illustration-flat-style-funny-woodland-art-ornate-square-vector-floral-botanical-elements-163497965.jpg" alt="Maxwell Admin">
				</div>
				<h5 class="user-name">'; echo "$nameP"; echo' </h5>
				<h6 class="user-email">'; echo "$emailP"; echo'</h6>
			</div>
			
		</div>
	</div>
</div>

</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName"><b>Full Name</b></label>
					<br/>';
					
						echo"$nameP";
					
				echo'</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail"><b>IC</b></label><br/>';
					echo "$icP";
					
				echo'</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone"><b>Phone</b></label><br/>';
					echo "$phoneP";
				echo'</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website"><b>Email</b></label><br/>';
					echo "$emailP";
					
				echo'</div>
				</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website"><b>Gender</b></label><br/>';
					echo "$genderP";
					
				echo'</div>
				</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website"><b>Country State</b></label><br/>';
					echo "$stateP";
					
				echo'</div>
			</div>
		</div>
		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>';
		}
		else{
			echo "<h1>Please login first .</h1>";
		}
?>
		
			
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>