<?php
	include("connect.php");

	if(isset($_POST['submit']))
	{
			
			$img = $_FILES['img']['name'];
            $pnm = $_POST['pnm'];
			$price = $_POST['price'];
			
			
			move_uploaded_file($_FILES['img']['tmp_name'],"images/".$_FILES['img']['name']);

			$q=mysqli_query($cn,"SELECT * FROM product where id='$id'");
	
			if(mysqli_num_rows($q)!=0)
			{
				echo "<script>Pacakge already add...</script>";
				echo"<script>window.location='product.php'</script>";
			}
			else
			{
				$q=mysqli_query($cn,"INSERT INTO `product` (`id`,`img`, `pnm`, `price`) VALUES ('','$img' ,'$pnm', '$price');");
				echo"<script>alert('Add Product Successfully')</script>";
				echo"<script>window.location='product.php'</script>";
			}

		}				
	else
	{
		echo"";
	}
?>