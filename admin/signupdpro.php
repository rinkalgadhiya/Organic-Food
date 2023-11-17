<?php
		
	
	include("connect.php");	

	$id = $_POST['id'];
	$unm = $_POST['unm'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$cno = $_POST['cno'];

	$q = mysqli_query($cn,"update signup set unm ='$unm',pass='$pass',email ='$email',cno='$cno' where id = '$id' ");
	echo "<script>alert('Update Successfully...')</script>";
	echo "<script>window.location='signup.php'</script>";
?>

