<?php include("header.php");?>
<title>Feedback</title>
<body>
<link rel="stylesheet" type="text/css" href="feedback.css">

<br><br><br><br>
<div class="">
	<div class="back">
		<h1>Let's Talk</h1>
		<p class="p1">To request a quote or want to meet up for coffee, <br>contact us directly or fill out the form and we will<br> get back to you promptly.</p>
		<img src="feedimg.jpg" class="img">
	
	<div class="sub">
	<h2>Give Feedback</h2>
	<p class="p2">What do you think of the issue search experience<br>within our Website</p>
	<img src="smile.gif" class="gif">
	<form action="feedbackpro.php" method="POST">
			<input type="text" name="unm" required="" pattern="[a-z,A-Z]*" placeholder="Enter Name"><br><br><br>
			<input type="text" name="cno" required="" pattern="\d{10}" placeholder="Enter Phone Number"><br><br><br>
			<label>Did you satisfy with our services?</label><br><br>
			Yes<input type="radio" name="ans" value="yes"required>
			No<input type="radio" name="ans" value="no"required><br><br>
			<label>Feedback Description</label><br><br>
			<textarea required name="desc" placeholder="Description Message" maxlength="30" minlength="20"></textarea><br><br>
			<button class="btn" name="submit">Submit</button>
		</form>	
	</div>
	
	</div>




</body>