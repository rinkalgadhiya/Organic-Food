<?php
    include('header.php');
	include('connect.php');
?>
<html>
	<head>
		<title>Feedback</title>
		
	</head>
	<style>
*{
	overflow: hidden;
}
.info{
	overflow:visible;
	height:57%;
	width: 70%;
	position: absolute;
	top: 22%;
	left: 15%;
	border-radius: 12px;
	border: 1px solid silver;
	padding:20px 20px 20px 20px;
}
.orange{
	background-color: coral;
	color: white;
}
a{
	text-decoration: none;
	color: green;
}
h2{
	position: absolute;
	left: 46.3%;
	top: 7.5%;
	animation-name: fade;
	animation-fill-mode: forwards;
	animation-duration: 1.4s;
	font-size: 30px;
}
@keyframes fade{
	from{opacity:0%;}
	to{opacity:100%;}
}
.slide1{
	position: absolute;
	left: 0%;
	animation-name: slide1;
	animation-fill-mode: forwards;
	animation-duration: 1.4s;
}
@keyframes slide1{
	from{top: 100%;}
	to{top:50%;}
}
.slide2{
	rotate: 180deg;
	position: absolute;
	right: 0%;
	animation-name: slide2;
	animation-fill-mode: forwards;
	animation-duration: 1.4s;
}
@keyframes slide2{
	from{bottom: 100%;}
	to{bottom:50%;}
}
</style>
	<h2>Feedback</h2>
	<div class="slide1"><img height="250px" width="160px" src="sabji1.png"></div>
	<div class="slide2"><img height="250px" width="160px" src="sabji1.png"></div>


    <table class="info">
	<tr class="orange">
		<th>Name</th>
		<th>Contact No</th>
		<th>Answer</th>
		<th>Feedback</th>	
		<th>Task 1</th>
	</tr>
</html>
<?php
	$q=mysqli_query($cn,"select * from feedback");
	while($r=mysqli_fetch_array($q))
	{
		echo "<tr><td><center>".$r[1]."</td>
		<td><center>".$r[2]."</td>
		<td><center>".$r[3]."</td>
		<td><center>".$r[4]."</td>
		<td><center><a href='feedbackdel.php?id=".$r[0]."' class='btn1'>DELETE</a></td>
		</tr>";
	}
?>
