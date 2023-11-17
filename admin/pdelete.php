<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `product` WHERE id = '$id' ");

	echo "<script>window.location='product.php'</script>";	
	
?>
	


