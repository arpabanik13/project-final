<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM applicant";
	$result = $conn->query($sql);
?>

<h1 align="center">Form</h1>
<table>
	<tr>
		<th>SL</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Select Product</th>
	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "<tr>"; 
			echo "<td>".$row["id"] ."</td>";	
			echo "<td>".$row["name"] ."</td>";	
			echo "<td>". $row["email"]."</td>";		
			echo "<td>". $row["phone"]."</td>";	
			echo "<td>". $row["products"]."</td>";
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		


