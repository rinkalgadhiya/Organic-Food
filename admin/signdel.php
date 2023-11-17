<?php

	$id = $_GET['id'];

	include("connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `signup` WHERE id = '$id' ");

	echo "<script>window.location='signup.php'</script>";	
	
?>
