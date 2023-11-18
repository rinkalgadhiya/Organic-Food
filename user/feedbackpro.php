<?php

    include("connect.php");

    if(isset($_POST['submit']))
	{
		$unm=$_POST['unm'];
		$cno=$_POST['cno']; 
        $ans=$_POST['ans'];
		$desc=$_POST['desc'];

		$q=mysqli_query($cn,"insert into feedback values('','$unm','$cno','$ans','$desc')");
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
		echo "";
	}
?>