<?php
	include "dbconnect.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name=$_POST["name"];
		$eml=$_POST["email"];
		$phon=$_POST["phone"];
		$add=$_POST["address"];
		$pdts=$_POST["product"];
		
		$sql="INSERT INTO applicant(id, name, email, phone,address, products)
		values(NULL, '$name', '$eml', '$phon','$add','$pdts')";
		$result=$conn->query($sql);
		if($result)
		{
			//echo "Success";
			header("Location:applicant_list.php");
		}
		else
		{
			echo "Application failed";
		}
	}
	
?>