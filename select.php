<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
	body
	{
		background-image: url(pr.jpg);
	}
		.s1
		{
			width: 350px;
			margin-left: 380px;
		}
		.s2
		{
			width: 650px;
			margin-left: 225px;

		}
		.h1
		{
			font-size: 20px;
		}
		.c1
		{
			animation: leelaanimate 0.4s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:red;}
			0%{color:yellow;}
			0%{color:white;}
			0%{color:blue;}
			0%{color:green;}

		}
		
	</style>
</head>
<body>
	<br><div class="container">
		<br><br><div class="card s2">
			<h1 class="text-center bg-dark text-warning">INSTRUCTIONS FOR ONLINE QUIZ</h1>
			<p class="text-left bg-info font-italic text-white h1">* THIS QUIZ BASED ON PROGRAMING LANGUAGE LIKE  JAVA,HTML,C,C++ etc.
			</p>
			<p class="text-left bg-info font-italic text-white h1">* ALL QUESTION IS NECESSARY.
			</p>
			 <p class="text-left bg-info font-italic text-white h1"> 
			 </p>
			 <p class="text-left bg-info font-italic text-white h1">* THERE WILL FIVE QUESTIONS DISPLAY ON YOUR SCREEN TO COMPLETE ALL QUESTIONS WITHIN '60' SECOND.
			 </p>
			 <p class="text-left bg-info font-italic text-white h1">
			  * EVERY QUESTION IS OF '1' MARK FOR EVERY CORRECT ANSWER 1 MARKS WILL AWARDED IN YOUR RESULT. 
			  <p class="text-left bg-info font-italic text-white h1">* THERE IS NO NEGATIVE MARKINGS .</p>
		</div>
<form action="homepage.php" method="post">
	
	<br><br><div class="card s1">
			<h1 class="text-center text-uppercase bg-dark text-white c1">Choose your subject</h1>
				<select name="s1" class="text-primary text-center" style="font-size: 20px;">
					<option>java</option>
					<option>html</option>
				</select>
				<input type="submit" name="submit" value="START QUIZ" class="bg-success text-white" style="font-size: 20px;">
				<a href="destroy.php" class="btn btn-danger">LOGOUT</a>
</form>

</div>
</div>
</body>
</html>