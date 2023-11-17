<?php

	include("connect.php");

	$id = $_GET['id'];

	$q = mysqli_query($cn,"DELETE FROM `feedback` WHERE id = '$id' ");
	
	echo "<script>window.location='feedback.php'</script>";	
	
?>
