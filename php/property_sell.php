<?php
	
	if(isset($_POST["property_type"])&&isset($_POST["property_feature"])&&isset($_POST["transaction_type"])&&isset($_POST["price"])&&isset($_POST["check"])&&isset($_POST["area"])&&isset($_POST["state"])&&isset($_POST["city"])&&isset($_POST["locality"])&&isset($_POST["address"])){
		
		
		$sql =sprintf("INSERT INTO sell_table (email,property_type,property_feature,transaction_type,price,area) VALUES ('%s','%s','%s','%s','%s','%s')",mysqli_real_escape_string($connection,$_POST["check"]),mysqli_real_escape_string($connection,$_POST["property_type"]),mysqli_real_escape_string($connection,$_POST["property_feature"]),mysqli_real_escape_string($connection,$_POST["transaction_type"]),mysqli_real_escape_string($connection,$_POST["price"]),mysqli_real_escape_string($connection,$_POST["area"]));
		
		$result=mysqli_query($connection,$sql);
		if($result==true){
			echo "<script type='text/javascript'>alert('property now available in sale');</script>";
		}
		else{
				echo "Error :".mysqli_error($connection);
		}
		$sql2 =sprintf("INSERT INTO  (email,
	}
?>