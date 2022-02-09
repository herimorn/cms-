<?php 
  if(isset($_POST["submit_address"])){
	$address=$_POST['address']
	?>
	<iframe width=100% height="500px" src="https://www.google.com/maps/place?q=<?php echo $address;?>&output=embed"> </iframe>
	<?php
  }
?>
<form method="POST">
	<p>
	<input type="text" name="address" placeholder="please Enter the address">
</p>
<input type="submit"name="submit_address">
</form>