<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:loginpage.php');
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdatabase');
$s1=$_POST['s1'];
?>
<!DOCTYPE html>
<html>
<head> 
	<title>
		</title>
		<script type="text/javascript">
			function timeout()
		{
           var minut=Math.floor(timeleft/60);
           var second=timeleft%60;
           if(timeleft<0)
           {
            	clearTimeout(tm);
           	document.getElementById("hy").submit();
           	//alert("ksdjnsdkvnsd");
           //	window.location.href="http://localhost/quiz2/check.php";
           }
           else
           {
           	//document.getElementById("time").innerHTML=minut+":"+second;
           
           	document.getElementById("time").innerHTML=+second;
           }
           timeleft--;
           var tm=setTimeout(function(){timeout()},1000);
		}
	</script>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
		<style type="text/css">
			body
			{
				background-image: url(pr.jpg);
			}
			.we
		{
			animation: leelaanimate 0.2s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:yellow;}
			0%{color:white;}
			0%{color:green;}

		}
		.al
		{
			animation: leelaanimate 0.4s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:yellow;}
			0%{color:white;}
			0%{color:green;}

		}
		</style>

		</head>
		<body onload="timeout()">
			<?php
			if($s1=='java')
			{
				?>
			<div class="container">
						<script type="text/javascript">
		var timeleft=1*60;
	</script>
	<h2 style="text-align:right;" class="text-white"> <div id="time" style="float:right;"></div> TimeLeft : </h2>
	<br><h1 class="text-center text-white we">WELCOME TO PROGRAMING QUIZ</h1></br>
	<h2 class="text-center text-white text-uppercase al">HELLO <?php echo  $_SESSION['username']?></h2>
	<div class="col-lg-8 m-auto d-block">
	<div class="card">

		<h3 class="text-center card-header text-uppercase bg-dark text-warning"> <?php echo $_SESSION['username']?> you have to select only one out of 4. Best of Luck 🙂 </h3><br>
		<form  id="hy" action="check.php" method="post">
		<?php
		for($i=1;$i<6;$i++)
		{
		$q1="select * from javaq where qid=$i";
		$query= mysqli_query($con,$q1);
		while ($rows = mysqli_fetch_array($query))
		{
			?>
			<div class="card">
				<h4 class="card-header text-dark"><?php echo $rows['questions'] ?></h4>
				<?php
				$q="select * from javaans where ans_id=$i ";
		       $query= mysqli_query($con,$q);
		        while ($rows = mysqli_fetch_array($query))
		        {
		        	?>
		        	<div class="card-body text-info">
		        		<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid']; ?>">
		        		<?php echo $rows['answers'] ?>

		        	</div>
		        	<?php
		        
		        }
		    }
		}
	}
       else if($s1=='html')
       {
       	?>
       	<div class="container">
       		<script type="text/javascript">
		var timeleft=6*10;
	</script>
	<h1 style="text-align:right;" class="text-white"> <div id="time" style="float:right;"></div> TimeLeft : </h1>
	<br><h1 class="text-center text-white we">WELCOME TO PROGRAMING QUIZ</h1></br>
	<h2 class="text-center text-white text-uppercase al">HELLO <?php echo  $_SESSION['username']?></h2>
	<div class="col-lg-8 m-auto d-block">
	<div class="card">
		<h3 class="text-center card-header text-uppercase bg-dark text-warning"> <?php echo $_SESSION['username']?> you have to select only one out of 4. Best of Luck 🙂 </h3><br>
		<form id="hy" action="check.php" method="post">
		<?php
		for($i=1;$i<6;$i++)
		{
		$q="select * from questions where qid=$i";
		$query= mysqli_query($con,$q);
		while ($rows = mysqli_fetch_array($query))
		{
			?>
			<div class="card">
				<h4 class="card-header text-dark"><?php echo $rows['questions'] ?></h4>
				<?php
				$q="select * from answers where ans_id=$i ";
		       $query= mysqli_query($con,$q);
		        while ($rows = mysqli_fetch_array($query))
		        {
		        	?>
		        	<div class="card-body text-info">
		        		<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid']; ?>">
		        		<?php echo $rows['answers'] ?>

		        	</div>
		        	<?php
		        	
		        }
		    }
		}
       }
		?>
		<input type="submit" name="submit" value="GET RESULT" class="btn btn-success m-auto d-block">
	</form>
	</div>
</div>
</div>
	<br><a href="loginpage.php" class="btn btn-danger m-auto d-auto bg-danger">LOGOUT</a></br>
</body>
</html>
