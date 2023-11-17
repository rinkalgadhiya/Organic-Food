<!-- Menus -->

<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("location:../index.php");
    }
?>
<link rel="stylesheet" type="text/css" href="index.css">
<div class="menuback">	
	<img src="Logo2.png" class="logo">
	<div class="menu">
		<a href="index.php" class="heada">HOME</a>
		<a href="order.php" class="heada">ORDER</a>
		<a href="product.php" class="heada">PRODUCT</a>
		<a href="feedback.php" class="heada">FEEDBACK</a>
		<a href="response.php" class="heada">RESPONSE</a>
		<a href="signup.php" class="heada">SIGN UP</a>
		<a href="logout.php" class="anlast">Logout</a> 
	</div>
</div>