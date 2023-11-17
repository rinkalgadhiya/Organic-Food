<?php
	include("header.php");
?>
<head>
	<title>Response</title>
	
</head>

<style>
*{
	overflow: hidden;
}
.info{
	overflow:visible;
	height:50%;
	width: 50%;
	position: absolute;
	top: 22%;
	left: 11%;
	border-radius: 12px;
	/* border: 1px solid silver; */
	padding:20px 0px 20px 0px;
}
.orange{
	background-color: coral;
	color: white;
}

td
{
	background-color: cornsilk;
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
	to{top:60%;}
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
<h2>RESPONSE</h2>

<div class="slide1"><img height="250px" width="160px" src="sabji1.png"></div>
<div class="slide2"><img height="250px" width="160px" src="sabji1.png"></div>


<table cellpadding=2  class="info">
	<tr class="orange">	
		<th>Username</th>
		<th>Ans1</th>
		<th>Ans2</th>
		<th>Ans3</th>
		<th>Ans4</th>
		<th>Ans5</th>
		<th>Ans6</th>
		<th>Ans7</th>
		<th>Ans8</th>
		<th>Ans9</th>
		<th>Ans10</th>
		<th>Ans11</th>
		<th>Ans12</th>
		<th>Ans13</th>
		<th>Ans14</th>
		<th>Ans15</th>
		<th>Task 1</th>
	</tr>

<?php
	include('connect.php');
	$q = mysqli_query($cn,"select * from response");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<td><center>".$r[1]."</td>
			<td><center>".$r[2]."</td>
			<td><center>".$r[3]."</td>
			<td><center>".$r[4]."</td>
			<td><center>".$r[5]."</td>
			<td><center>".$r[6]."</td>
			<td><center>".$r[7]."</td>
			<td><center>".$r[8]."</td>
			<td><center>".$r[9]."</td>
			<td><center>".$r[10]."</td>
			<td><center>".$r[11]."</td>
			<td><center>".$r[12]."</td>
			<td><center>".$r[13]."</td>
			<td><center>".$r[14]."</td>
			<td><center>".$r[15]."</td>
			<td><center>".$r[16]."</td>
		
			<td><center><a href='resdel.php?id=".$r[0]." '>DELETE</a></center></td></tr>";
				
		
	}
?> 
