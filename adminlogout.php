<!DOCTYPE html>

<html>
	<head>
	
	</head>
	
	<body>
	
		<?php
session_start();
unset($_SESSION["un"]);
header("Location:index.html");
?>
	</body>
</html>