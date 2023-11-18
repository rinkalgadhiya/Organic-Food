<?php
    include("connect.php");
	$id=$_GET['id'];

	$cn=mysqli_connect("localhost","root","","orgfood");

	$q=mysqli_query($cn,"delete from cart where id='$id'");

	echo"<script>window.location='cart.php'</script>";
?>