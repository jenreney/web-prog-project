<html>
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="reg-style.css" rel="stylesheet">
	</head>
	
	<body>

<?php
$con = mysqli_connect("localhost", "root", "","event_details"); 

 if(isset($_POST['submit']) ) {
    $posted = true;


		
		$usernameP=$_POST["username"];
		$passwordP=$_POST["pass"];
		$nameP=$_POST["name"];
		$icP=$_POST["ic"];
		$phoneP=$_POST["ph"];
		$emailP=$_POST["email"];
		$genderP=$_POST["gender1"];
		$stateP=$_POST["state"];
		
				$sql="INSERT INTO participant_details VALUES ('0','$usernameP', '$passwordP', '$nameP', '$icP', '$phoneP', '$emailP', '$genderP', '$stateP')";

		
		if (!mysqli_query($con, $sql)) {
    echo "Error: " . mysqli_error($con);
}
else
    {

        echo '<script language="javascript">';
        echo 'alert("Successfully Registered, you will be redirected to the login page."); location.href="userlogin.php"';
        echo '</script>';
    }  

    }
		
?>

<ul>
  <li><a class="active" href="http://localhost/WebProgProject/index">Home</a></li>
  <li><a href="http://localhost/WebProgProject/userlogin">Log In</a></li>
</ul>

	
		<div class="abs" >
			<div class="box">
			<form name=form method=post action="">
				<h1 style="font-family:Snell Roundhand, cursive;"><center> Register for the upcoming Pet Fair </center></h1>
				<br>
				<div class="row">
					<div class="column">
						Username<br/>
						<input name=username type=text required>
					</div>
					<div class="column">
						Password<br/>
						<input name=pass type=password required>
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="column">
						Full Name<br/>
						<input name=name type=text required>
					</div>
					<div class="column">
						IC<br/>
						<input name=ic type=text required>
					</div>
				</div>
				
				<br/>
				
				<div class="row">
					<div class="column">
						Phone number<br/>
						<input name=ph type=text required>
					</div>
					<div class="column">
						Email Address<br/>
						<input name=email type=text required>
					</div>
				</div>
				
				<br/>
				
				
				<div class="row">
					<div class="column">
						Gender<br/>
						<input name=gender1 type=radio value=Female required>Female
						<input name=gender1 type=radio value=Male required>Male
					</div>
					<div class="column">
						State of Residence<br/>
						<select name=state required>
							<option selected>State</option>
							<option value=Johor>Johor</option>
							<option value=Kedah>Kedah</option>
							<option value=Kelantan>Kelantan</option>
							<option value=Malacca>Malacca</option>
							<option value="Negeri Sembilan">Negeri Sembilan</option>
							<option value=Pahang>Pahang</option>
							<option value=Penang>Penang</option>
							<option value=Perak>Perak</option>
							<option value=Perlis>Perlis</option>
							<option value=Sabah>Sabah</option>
							<option value=Sarawak>Sarawak</option>
							<option value=Selangor>Selangor</option>
							<option value=Terengganu>Terengganu</option>
							<option value=KL>Federal Territory of Kuala Lumpur</option>
							<option value=Labuan>Federal Territory of Labuan</option>
							<option value=Putrajaya>Federal Territory of Putrajaya</option>
						</select>
						
					</div>
				</div>
				
				<br/>
				


				
				<br/>
				<input type=submit name=submit value=Register></input>
			</form>
			</div>
		</div>
	</body>
</html>