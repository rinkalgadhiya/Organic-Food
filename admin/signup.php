<?php include("header.php");?>
<head>
	<title>Signup</title>
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
<h2>Sign Up</h2>

<div class="slide1"><img height="250px" width="160px" src="sabji1.png"></div>
<div class="slide2"><img height="250px" width="160px" src="sabji1.png"></div>

<center><table class="info" cellpadding=7>
	<tr class="orange">	
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Mobile No.</th>
		<th>Utype</th>
		<th>Task 1</th>
		<th>Task 2</th>
	</tr>
<?php
	include('connect.php');
	$q = mysqli_query($cn,"select * from signup where utype='user' ");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<td><center>".$r[1]."</center></td>
			<td><center>".$r[2]."</center></td>
			<td><center>".$r[3]."</center></td>
			<td><center>".$r[4]."</center></td>
			<td><center>".$r[5]."</center></td>
			<td><center><a href='signupd.php?id=".$r[0]."'>UPDATE</a></center></td>
			<td><center><a href='signdel.php?id=".$r[0]." '>DELETE</a></center></td></tr>";
	}
?> 
