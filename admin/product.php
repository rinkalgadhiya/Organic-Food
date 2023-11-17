
<html>
<head>
	<title></title>
	
</head>
<style type="text/css">
	.h2
	{
		background-color: coral;
		font-family: Proxima Nova;
		padding: 30px;
		color: white;
		font-size: 30px;
	}

	form
	{
		background-color: cornsilk;
		padding: 100px;
		width: 100%;
		margin-top: -25px;
	}

	table
	{
		background-color: cornsilk;
		width: 100%;
		margin-top: -25px;
	}

	.td
	{
		font-size: 20px;
		font-family: Arial;
		padding: 10px 0px 10px 40px;
		color: black;
	}

	.btn1
	{
		background-color: coral;
		border: none;
		padding: 10px 50px 10px 50px;
		margin-top: 20px;
		border-radius: 3px;
		color: white;
		font-family: Arial;
		font-size: 15px;
		margin-left: 500px;
	}

	input
	{
		background: none;
		border: none;
		margin-left: -840px;
		border-bottom:1px solid black;
	}

	.field
	{
		font-size: 20px;
		font-family: Arial;
		padding: 10px 0px 10px 0px;
		width: 100px;
		background-color: white;
	}

	.fname
	{
		font-size: 18px;
		font-family: Arial;
	}

	.a
	{
		text-decoration: none;
		color: white;
		font-family: Arial;
		background-color: coral;
		padding: 10px 20px 10px 20px;
		border-radius: 5px;
		border: 1px solid coral;
	}

	.a:hover
	{
		text-decoration: none;
		color: coral;
		font-family: Arial;
		background: none;
		padding: 10px 20px 10px 20px;
		border-radius: 5px;
		border: 1px solid coral;
		transition: 0.5s;
	}
</style>
<body>
    <?php include("header.php");?>
    <br><br><br>
<h2 align="center" class="h2">Add Product</h2>

<form action="productpro.php" method="POST" enctype="multipart/form-data">
	<table align="center">
        <tr>
			<td class="td">Enter Image:</td>
			<td><input type="file" name="img"></td>
		</tr>

		<tr>
			<td class="td">Enter Product Name:</td>
			<td><input type="text" name="pnm"  placeholder="Product Name"></td>
		</tr>


		<tr>
			<td class="td">Enter Price:</td>
			<td><input type="text" name="price"  placeholder="Price"></td>
		</tr>

		

		<tr>
			<td><input type="submit" name="submit" value="Add Product" class="btn1"></td>
		</tr>
	</table>
</form>
<br><br><br>
<h1 align="center" class="h2">Product Display</h1>

 
 <center><table cellpadding=10>
	<tr>
		<th class="field">Image</th>
		<th class="field">Name</th>
		<th class="field">Price</th>
		<th class="field">Update</th>
		<th class="field">Delete</th>
	</tr> 
<?php
    include("connect.php");
	$q = mysqli_query($cn,"select * from product");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			
			<th><img src='../images/".$r[1]."' height=100 width=100></th>
            <th class='fname'>".$r[2]."</th>
			<th class='fname'>".$r[3]."</th>
		
			
			<th><a href='update.php?id=".$r[0]." ' class='a'>UPDATE</a></button></th>
			<th><a href='pdelete.php?id=".$r[0]." ' class='a'>DELETE</a></button></th>
		</tr>";
	}
?> 

</table></center>
</body>

</html>
