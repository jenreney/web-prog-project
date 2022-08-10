<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="al-style.css" rel="stylesheet">
		  <title>Admin Login</title>


	</head>
	
	<body>
<?php
$con=mysqli_connect("localhost", "root", "", "event_details") or die("Canot connect to server.".mysqli_error($con));

 if(isset($_POST['submit']) ) {
    $posted = true;


		
		$aunP=$_POST["un"];
			$apassP=$_POST["pw"];
			
			
			$sql="SELECT * FROM adminaccount
			WHERE aun = '$aunP'";
			
			$result=mysqli_query($con,$sql);
			
			if(mysqli_num_rows($result)>=1){
				$data=mysqli_fetch_array($result,MYSQLI_BOTH);
				if($data[1]==$apassP){
					session_start();
					$_SESSION["un"]=$aunP;
					header("Location:adminhome.php");
					
				}
				else{
					echo '<script language="javascript">';
        echo 'alert("Wrong password. Please try again."); location.href="adminlogin.php"';
        echo '</script>';
				}
			}
			else{				
				echo '<script language="javascript">';
        echo 'alert("Wrong username. Please try again."); location.href="adminlogin.php"';
			echo '</script>';
			}
			
 }
		
?>
	
		<ul>
  <li><a class="active" href="http://localhost/WebProgProject/index">Home</a></li>
</ul>

	
		<div class="abs" >
			<div class="box">
			<form name=form method=post action="">
				<h1><b><center>ADMINSTRATION LOGIN </center></b></h1>
				<br>
				<div class="row">
					<div class="column">
						Username<br/>
						<input name=un type=text required>
					</div>
					<div class="column">
						Password<br/>
						<input name=pw type=password required>
					</div>
				</div>
				
				<br/>
				<i style="font-size:10px;">If you are a participant click <a href="http://localhost/WebProgProject/userlogin">here</a></i>
				<br/>
				

				<br/>
				<input type=submit name=submit value=Login>
			</form>
			</div>
		</div>
	</body>
</html>