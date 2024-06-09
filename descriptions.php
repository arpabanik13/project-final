<?php
	include "header.php";
	include "dbconnect.php";

	$sql = "SELECT * FROM descriptions";
	$result = $conn->query($sql);
?>

<h1 align="center">Product List</h1>
<table>
	<tr>
		<th>SL</th>
		<th>Product Title</th>
		<th>Brand</th>
		<th>Price</th>
	</tr>
	<?php
		while($row=$result->fetch_assoc()){
			
			echo "<tr>"; 
			echo "<td>".$row["id"] ."</td>";	
			echo "<td>".$row["title"] ."</td>";	
			echo "<td>". $row["brand"]."</td>";	
			echo "<td>". $row["price"]."</td>";	
			echo "</tr>"; 
		}
	
	?>
			
<table>
		
<?php
	include "footer.php";
?>		


