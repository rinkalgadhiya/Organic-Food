<html>
    <head>
        <title>Signup</title>
        <style>
	body
	{
		margin: 0px;
	}

	.text
	{
		font-family: Arial;
	}

	.main
	{
		height: 500px;
		width: 600px;
		float: left;
		margin-left: 20px;
		margin-top: 10px;
	}
	.p1
	{
		font-size: 18px;
		font-family: Microsoft Sans Serif;
		margin-bottom: 20px;
		margin-left: 80px;
	}
	.lbl
	{
		font-size: 45px;
		font-family: Arial Unicode MS;
		font-weight: bold;
	}
	form
	{
		margin-left: 80px;
	}
	
	label
	{
		line-height: 50px;
		font-size: 18px;
		font-family: Proxima Nova;
	}
	.input{
		border-top: 0px;
		border-left: 0px;
		border-right: 0px;
		border-bottom:1px black solid;
		height: 30px;
		width: 250px;
	}
	.button{
		background:coral;
		height: 35px;
		width: 150px;
		font-size: large;
		border-radius: 5px;
		border: none;
		color: white;
	}
	.button:hover{
		background: none;
		border: 1px solid coral;
		color: coral;
		transition: 1s;
	}
	.sub
	{
		height: 500px;
		width: 600px;
		float: right;
		margin-left: 20px;
		margin-top: 10px;
	}
	.h2
	{
		font-size: 30px;
		font-family: Proxima Nova;
		margin: 50px 0px 0px 0px;
	}
	.login{
		animation-name: fade;
		animation-duration: 1.4s;
		animation-fill-mode: forwards;
	}
	@keyframes fade{
		from{ opacity: 0%;}
		to{ opacity: 100%;}
	}
	.p2
	{
		font-size: 18px;
		font-family: Microsoft Sans Serif;
		position: absolute;
		bottom: 5%;
		left: 10%;
	}
	.heading{
		font-size: 50px;
		font-family: Arial;
		position: absolute;
		left: 16%;
		top: 6%;
	}
	.info{
		position: absolute;
		left: 13%;
		top: 20%;
		font-size: x-large;
	}
	.a1{
		background:coral ;
		width: 1200px;
		height: 300px;
		border: 47px rgb(225, 224, 224) solid;
		border-radius: 200px;
		position: absolute;
		rotate: 320deg;
		animation-name: slide1;
		animation-duration: 1.4s;
		animation-fill-mode: forwards;
	}
	@keyframes slide1{
		from{ top: -90%;right: -100%;}
		to{ top: -40%;right: -65%;}
	}
	.a2{
		background:coral ;
		width: 500px;
		height: 100px;
		/* border: 50px silver solid; */
		border-radius: 200px;
		position: absolute;
		rotate: 320deg;
		animation-name: slide2;
		animation-duration: 1.2s;
		animation-fill-mode: forwards;
	}
	@keyframes slide2{
		from{ top: -60%;right: -110%;}
		to{ top: 60%;right: -25%;}
	}
	.a3{
		background:coral ;
		width: 800px;
		height: 100px;
		/* border: 50px silver solid; */
		border-radius: 200px;
		position: absolute;
		rotate: 320deg; 
		animation-name: slide3;
		animation-duration: 1.2s;
		animation-fill-mode: forwards;
	}
	@keyframes slide3{
		from{ top: -60%;right: -40%;}
		to{ top: -40%;right: -25%;}
	}
	.a4{
		background:palegreen ;
		width: 1100px;
		height: 100px;
		/* border: 50px silver solid; */
		border-radius: 200px;
		position: absolute;
		rotate: 320deg;
		animation-name: slide4;
		animation-duration: 1.2s;
		animation-fill-mode: forwards;
	}
	@keyframes slide4{
		from{ top: 160%;right: 25%;}
		to{ top: 130%;right: 10%;}
	}
	*{
		margin: 0%;
		overflow: hidden;
	}
	.redirect{
    height: 50px;
    width: 50px;
    position: absolute;
    top: 77%;
    left: 21%;
	background-repeat: no-repeat;
    /* background-color: palegreen; */
    /* background-image:url(login.png);
    border-radius: 50%;
	text-align: center; */
    background-image:url(login.jfif);
    border-radius: 50%;
	text-align: center;
    background-size: 50PX;
    color: rgba(240, 248, 255, 0);
    transition: .4s ease-in-out;
    background-repeat: no-repeat;
	text-decoration: none;
}
.redirect:hover{
	
	height: 35px;
    width: 200px;
    border-radius: 50px;
    background-image:url(login.png);
    background-color:white;  
	background-size: 40PX; 
    color:black;
    text-decoration: none;
    font-size: 24px;
    left: 13.5%;
    padding-left: 50px;
	padding-top:7px;
}
a{
	text-decoration: none;
}
.logo{
    height: 160px;
    width: 160px;
    position: absolute;
    top: -7%;
    left: 0%;
}
</style>
</head>
    <div class="a1"></div>
	<div class="a2"></div>
	<div class="a3"></div>
	<div class="a4"></div>
	<div class="login">
		<!-- <h1 class="h2">Already have an<br>account </h1> -->
		<p class="p2">Register to access all the features of our service<br>Manage your Organic Market in one place.</p>
		<div class="Logo"><img src="Logo2.png" height="160px" width="160px"></div>
		<form class="login" action="signuppro.php" method="POST">
			<div class="heading">Sign Up</div>
			<table class="info">
				<tr>
					<td class="text">Username </td>
				<tr>
				</tr>
					<td><input type="text" class="input" name="unm" required pattern="[a-z,A-Z]*"></td>
				</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td class="text">Password </td>
				<tr>
				</tr>
					<td><input type="password" class="input" name="pass" required></td>
				</tr>
				</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td class="text">Email </td>
				<tr>
				</tr>
					<td><input type="email" class="input" name="email" required></td>
				</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td class="text">Phone No </td>
				<tr>
				</tr>
					<td><input type="text" class="input" name="cno" required pattern="\d{10}"></td>
				</tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
				<tr>
					<td colspan="2"><center><input type="submit" class="button" name="submit" value="Signup " required></center></td>
				</tr>
				<a href="index.php"class="redirect">Go back to Home ?</a>
			</table>
		</form>
	</div>
