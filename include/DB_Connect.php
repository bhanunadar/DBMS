<?php
		require_once 'Config.php';
			if(($connection=mysqli_connect("localhost","root","BhanuGoban"))===false)
		die("could not connect database");
		
		if(mysqli_select_db($connection,"collegedbms")===false)
		die(" Could not select Database");
	
?>
