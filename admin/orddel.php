<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `ord` WHERE id = '$id' ");

	echo "<script>window.location='order.php'</script>";	
	
?>