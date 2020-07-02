<!DOCTYPE html><!DOCTYPE html>
<html>
<head> 
	<title> 
</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<script type="text/javascript" src="vali.js"></script>
<style type="text/css">
	body
	{
		background-image: url(pr.jpg);
	}
	.s1
	{
		width: 550px;
		margin-left: 300px;
	}
		.qw
		{
			animation: leelaanimate 0.2s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:yellow;}
			0%{color:white;}
			0%{color:green;}

		}
</style>
</head>
<body>
	<br><div class="container">
		<br><div class="card bg-danger s1">
	<h1 class="text-center text-white text-uppercase qw">Welcome to Online Quiz</h1>
</div>
</br>
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<h2 class="text-center card-header bg-dark text-white">LOGIN</h2>
				<form action="validation1.php" method="post">
					
					<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="pass" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary m-auto d-block">LOGIN</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
			<div class="card">
				<h2 class="text-center card-header bg-dark text-white">SIGN-UP</h2>
				<form action="registration1.php" method="post" name="f1" onsubmit="return validate()">
					
					<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" id="u1">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" id="p1">
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="text" name="email" class="form-control" id="e1">
						</div>
						<button type="submit" class="btn btn-primary d-block m-auto">NEXT</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</form>

