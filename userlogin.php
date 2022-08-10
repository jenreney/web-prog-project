<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="ul-style.css" rel="stylesheet">
  <title>User Login</title>

	</head>
	
	<body>
	<?php
$con = mysqli_connect("localhost", "root", "","event_details"); 

 if(isset($_POST['submit']) ) {
    $posted = true;


		
		$unP=$_POST["username"];
		$passP=$_POST["pass"];
			
			
			$sql="SELECT * FROM participant_details
			WHERE username = '$unP'";
			
			$result=mysqli_query($con,$sql);
			
			if(mysqli_num_rows($result)==0){
				echo '<script language="javascript">';
        echo 'alert("Wrong username. Please try again."); location.href="userlogin.php"';
			echo '</script>';}
			else{											
				$data=mysqli_fetch_array($result,MYSQLI_BOTH);
				if($data[2]==$passP){
					session_start();
					$_SESSION["username"]=$unP;
					header("Location:userhome.php");
					
				}
				else{
					echo '<script language="javascript">';
        echo 'alert("Wrong password. Please try again."); location.href="userlogin.php"';
        echo '</script>';
				}
		
			}

    }
		
?>
	
		<ul>
  <li><a class="active" href="http://localhost/WebProgProject/index">Home</a></li>
  <li><a href="http://localhost/WebProgProject/register">Register</a></li>
</ul>

	
		<div class="abs" >
			<div class="box">
			<form name=form method=post action="">
				<h1><b><center> LOGIN </center></b></h1>
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
				<i style="font-size:10px;">If you are an admin click <a href="http://localhost/WebProgProject/adminlogin">here</a></i>
				<br/>

				<br/>
				<input type=submit name=submit value=Login>
			</form>
			</div>
		</div>
	</body>
</html>