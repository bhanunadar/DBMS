<?php
	session_start();
	require_once '../include/DB_Connect.php';
	
		echo "hey";
	if(isset($_POST["name"])&&isset($_POST["password"])&&isset($_POST["email"])&&isset($_POST["phone"]))
	{
		$sql =sprintf("INSERT INTO users (name,email,password) VALUES ('%s','%s','%s')",mysqli_real_escape_string($connection,$_POST["name"]),mysqli_real_escape_string($connection,$_POST["email"]),mysqli_real_escape_string($connection,$_POST["password"]));
		
		
		
		$sql2=sprintf("INSERT INTO user_phonenumber(email,phonenumber)VALUES('%s','%s')",mysqli_real_escape_string($connection,$_POST["email"]),mysqli_real_escape_string($connection,$_POST["phone"]));
		
		$result2=mysqli_query($connection,$sql2);
			
			if($result2===true){
				//$_SESSION["authenticated"]=true;
				echo "data added sucesssfully";
			}
			else{
				echo "error".$mysql."<br>".$connection->error;
				
			} 
			
		$result=mysqli_query($connection,$sql);
			
			if($result===true){
				$_SESSION["authenticated"]=true;
				echo "data added sucesssfully";
			}
			else{
				echo "Error :".mysqli_error($connection);
				
				
			}
			
	}
	
?>
	