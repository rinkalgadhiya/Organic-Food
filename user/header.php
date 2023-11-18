<!-- Menus -->

<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:../index.php");
    }
?>
<link rel="stylesheet" type="text/css" href="index.css">
<div class="menuback">	
	<img src="Logo2.png" class="logo">
	<div class="menu">
		<a href="index.php" class="heada">HOME</a>
		<a href="recipes.php" class="heada">RECIPES</a>
		<a href="product.php" class="heada">PRODUCT</a>
		<a href="contact.php" class="heada">CONTACT US</a>
		<a href="services.php" class="heada">SERVICES</a>
		<a href="cart.php" class="heada">CART</a>
		<a href="logout.php" class="anlast">Logout</a> 
	</div>
</div>