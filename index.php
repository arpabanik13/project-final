<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM facility";
	$result=$conn->query($sql);
	
?>
	<div class="announce">
		<h2> Your Favourite place for Clothes</h2>
		<p>Welcome to Style-Echo, your desireable place for clothing.Here,we offer you the products with best qualities.
		</p>
		<h2>Facilities</h2>
		<ul>
		<?php
			while($row=$result->fetch_assoc()){
				echo "<li>".$row["description"]."</li>";
			}
		?>
		</ul>
	</div>
		
<?php
	include "footer.php";
?>

