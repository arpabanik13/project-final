<?php
	include "header.php";
	include "dbconnect.php";
	
	$sql="SELECT * FROM descriptions";
	$result=$conn->query($sql);
	
?>		
	<div class="apply">
		<h3 align="center">Product Form</h3>
	    <form action="application_action.php" method="POST">
		
			<label>Customers Name</label>
			<input type="text" name="name" placeholder=" Enter Your name">
			<label>Email</label>
			<input type="text" name="email" placeholder=" Enter Your email">
			<label>Phone</label>
			<input type="text" name="phone" placeholder="Enter Your phone">
			<label>Address</label>
			<input type="text" name="address" placeholder="Enter Your address">
			<label>Choose product</label>
			<select name="product">
			<?php
				while($row=$result->fetch_assoc()){
		echo '<option value="'.$row["title"] .'">'.$row["title"] .'</option>';
				}
			?>
			</select>
			<input type="submit" value="Submit">
		  </form>
	</div>
	
<?php
	include "footer.php";
?>


