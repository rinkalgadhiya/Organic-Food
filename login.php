<html>
    <head>
        <title>Login</title>
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
    border-bottom:1px solid;
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
    right: 10%;
}
.heading{
    font-size: 60px;
    font-family: Arial;
    position: absolute;
    right: 20%;
    top: 10%;
}
.info{
    position: absolute;
    right: 15%;
    top: 30%;
    font-size: x-large;
}
.a1{
    background:coral ;
    width: 1200px;
    height: 300px;
    border: 47px rgb(225, 224, 224) solid;
    border-radius: 200px;
    position: absolute;
    rotate: 40deg;
    animation-name: slide1;
    animation-duration: 1.4s;
    animation-fill-mode: forwards;
}
@keyframes slide1{
    from{ top: -90%;left: -100%;}
    to{ top: -40%;left: -65%;}
}
.a2{
    background:coral ;
    width: 500px;
    height: 100px;
    /* border: 50px silver solid; */
    border-radius: 200px;
    position: absolute;
    rotate: 40deg;
    animation-name: slide2;
    animation-duration: 1.2s;
    animation-fill-mode: forwards;
}
@keyframes slide2{
    from{ top: -60%;left: -110%;}
    to{ top: 60%;left: -25%;}
}
.a3{
    background:coral ;
    width: 800px;
    height: 100px;
    /* border: 50px silver solid; */
    border-radius: 200px;
    position: absolute;
    rotate: 40deg; 
    animation-name: slide3;
    animation-duration: 1.2s;
    animation-fill-mode: forwards;
}
@keyframes slide3{
    from{ top: -60%;left: -40%;}
    to{ top: -40%;left: -25%;}
}
.a4{
    background:palegreen ;
    width: 1100px;
    height: 100px;
    /* border: 50px silver solid; */
    border-radius: 200px;
    position: absolute;
    rotate: 40deg;
    animation-name: slide4;
    animation-duration: 1.2s;
    animation-fill-mode: forwards;
}
@keyframes slide4{
    from{ top: 160%;left: 25%;}
    to{ top: 130%;left: 10%;}
}
*{
    margin: 0%;
    overflow: hidden;
}
.forgot{
    z-index: 3;
    position: absolute;
    top: 68.5%;
    right: 18.3%;
    font-size:20px;
    color: black;
    font-family: Arial;
}
.signup{
    height: 50px;
    width: 50px;
    position: absolute;
    top: 77.5%;
    right: 23%;
	background-repeat: no-repeat;
    background-image:url(login.jfif);
    border-radius: 50%;
	text-align: center;
    background-size: 50PX;
    color: rgba(240, 248, 255, 0);
    transition: .4s ease-in-out;
    background-repeat: no-repeat;
	text-decoration: none;
}
.signup:hover{
	height: 35px;
    width: 200px;
    border-radius: 50px;
    background-image:url(login.jfif);  
	background-size: 40PX; 
    color:black;
    text-decoration: none;
    font-size: 24px;
    right: 15%;
    padding-left: 40px;
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
    right: 0%;
}
</style>
</head>

<div class="a1"></div>
<div class="a2"></div>
<div class="a3"></div>
<div class="a4"></div>
<div class="login">

	<p class="p2">Welcome! Please fill Username and Password<br>to sign in into your account</p>
    <div class="Logo"><img src="Logo2.png" height="160px" width="160px"></div>
	<form class="login" action="loginpro.php" method="POST">
        <div class="heading">Login</div>
        <table class="info">
            <tr>
                <td class="text">Username </td>
            <tr>
            </tr>
                <td><input type="text" class="input" name="unm" required></td>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td class="text">Password </td>
            <tr>
            </tr>
                <td><input type="password" class="input" name="pass" required></td>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
                <td colspan="2"><center><input type="submit" class="button" name="submit" value="Login" required></center></td>
            </tr>
            <a href="forget.php"class="forgot">Forgot Password?</a>
            <a href="signup.php"class="signup">Go Back to Signup</a>
        </table>
	</form>
</div>
