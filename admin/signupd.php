<?php
		
	include("connect.php");

?>
<table>	
<?php
	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from signup where id = '$id' ");

	echo "<form action='signupdpro.php' method='POST'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		echo "<tr><td>Username :</td>";
		echo "<td><input type='text' name='unm' value=".$r[1]."></td></tr>";

		echo "<tr><td>Password :</td>";
		echo "<td><input type='password' name='pass' value=".$r[2]."></td></tr>";

		echo "<tr><td>Email :</td>";
		echo "<td><input type='email' name='email' value=".$r[3]."></td></tr>";

		echo "<tr><td>Mobile No :</td>";
		echo "<td><input type='text' name='cno' value=".$r[4]."></td></tr>";

	}
	echo "<tr>	<td></td><td><input type='submit' name='update' value='Update'></td></tr>";
?>	
</table>