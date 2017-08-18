<?php
	session_start();
	require_once '../include/DB_Connect.php';
	
	if(isset($_POST["email"])&&isset($_POST["password_login"]))
	{
		$sql =sprintf("SELECT * from users where email='%s'",mysqli_real_escape_string($connection,$_POST["email"]));
		$result=mysqli_query($connection,$sql);
		if($result===false)
			die("Query problem");
		$row=mysqli_fetch_assoc($result);
		if($row["password"]==$_POST["password_login"]){
		$_SESSION["authenticated"]=true;
			$host=$_SERVER["HTTP_HOST"];
			$parent = dirname($_SERVER['REQUEST_URI']);
			$path=rtrim(dirname($_SERVER["PHP_SELF"]),"/\\");
			
		header("Location: http:../public_html/option.html");
			exit;
		}
		else 
			echo "invalid password";
	}
?>