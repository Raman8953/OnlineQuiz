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
		.re
		{
			animation: leelaanimate 0.3s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:red;}
			0%{color:yellow;}
			0%{color:black;}
			0%{color:green;}
			0%{color:pink;}
			0%{color:blue;}

		}
	</style>
</head>
<body>
	<br><br>
	<br><div class="container" style="padding-left: 50px;">
		<br><div class="card">
<br><h1 style="font-size: 30px;" class="text-center re">You Are Registered Successfully After Login Go To Home Page  </h1>
<a href="loginpage.php" class="btn btn-primary m-auto d-block">BACK</a>
</div>
</div>
</body>
</html>

