<?php
	include("header.php");
	include("connect.php");
?>

<style type="text/css">
	body
	{
		overflow: hidden;
	}

	table
	{
		background-color: cornsilk;
		width: 100%;
		margin-top: -20px;
		padding-top: 70px;
		height: 500px;
	}

	h1
	{
		background-color: coral;
		font-family: Proxima Nova;
		padding: 30px;
		color: white;
		font-size: 30px;
	}

	.td
	{
		font-size: 20px;
		font-family: Arial;
		padding: 0px 100px 0px 400px;
		color: black;
	}

	input
	{
		background: none;
		border: none;
		width: 300px;
		margin-left: -650px;
		border-bottom:1px solid black;
	}


	.a
	{
		text-decoration: none;
		color: white;
		font-family: Arial;
		background-color: coral;
		padding: 10px 120px 10px 120px;
		border-radius: 5px;
		margin-left: 560px;
		margin-bottom: 20px;
		border: 1px solid coral;
	}

	.a:hover
	{
		text-decoration: none;
		color: coral;
		font-family: Arial;
		background: none;
		padding: 10px 120px 10px 120px;
		border-radius: 5px;
		border: 1px solid coral;
		transition: 0.5s;
	}
</style>
<br><br><br><br>
<html>
    <head>
        <title>Update Prodect</title>
	
</head>
	
<body>
	<center><h1>UPDATE PRODUCT</h1></center>

<table>
<?php
	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from product where id = '$id' ");

	echo "<form action='updatepro.php' method='POST' enctype='multipart/form-data'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		
		
		echo "<tr><td class='td'>Image :</td>";
		echo "<td><input type='file' name='img' value=".$r[1]." class='input'></td></tr>";

        echo "<tr><td class='td'>Product Name: :</td>";
		echo "<td><input type='text'  name='pnm' value=".$r[2]." class='input'></td></tr>";


		echo "<tr><td class='td'>Price:</td>";
		echo "<td><input type='text' name='price' value=".$r[3]." class='input'></td></tr>";
	}

		echo "<tr><td><input type='submit'  name='update' value='Update' class='a'></td></tr>";
?>
 </table>
     </form>
    </body>
</html>
	


