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
		.animate
		{
			animation: leelaanimate 0.4s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:yellow;}
			0%{color:white;}
			0%{color:green;}

		}
		.nu
		{
			animation: leelaanimate 0.2s infinite;
		}
		@keyframes leelaanimate
		{
			0%{color:white;}
			0%{color:yellow;}

		}
		.c2 table
		{
			width: 519px;
			height: 200px;
			border: 5px;
		}
		.c2 td
		{
			border-collapse: collapse;
			height: 20px;
			border: 0px ;
		}
	</style>
</head>
<body>
	<div class="container" style="padding-left: 320px;">
	<br><br><br>
	<br><div class="card" style="width: 522px; background-image: url(pi.jpg);">
		<h1 class="text-center text-warning text-uppercase animate">ONLINE QUIZ</h1>
		<div class="c2">
		<table class="table table-bordered table-hover" align="center">
			<thead>
		<tr class="bg-success">
			<th class="text-center text-white" colspan="3">RESULT</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="text-center text-white">Question Attempted :</th>
<?php
session_start();
if(!isset($_SESSION['username']))
	{
		header('location:loginpage.php');
	}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'quizdatabase');
if(isset($_POST['submit']))
{
	if(!empty($_POST['quizcheck']))
	{ 
		$count=count($_POST['quizcheck'])
		?>
			<td class="text-center text-white">
		Out of 5, you have selected
		<?php
		
		echo $count;?>  Question
		<td>
		</tr>
		<tr>
			<th class="text-center text-white">Total Currect Ans :</th>
			<td class="text-center nu" style="font-size: 50px;">
			<?php
		$result=0;
		$i=1;
		$selected=$_POST['quizcheck'];
		//print_r($selected);
		$q="select * from questions";
		$query=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($query))
		{
			//print_r($rows['ans_id']);
			if($rows['ans_id']==$selected[$i])
		
				{
                  $result++;
                  $score=($result*100)/5;
				}
				//else
				//{
				//	$result=$result-1;
				//}
				$i++;
		}
	?>
	<?php 
	echo $result ;?>
	</td>
</tr>
<tr>
	<th class="text-white text-center">Your Score :</th>
	<td class="text-center nu" style="font-size: 50px;"><?php echo $score."%";?></td>
</tr>
	<?php
		$name=$_SESSION['username'];
      $finalresult="insert into user(username,totalques,answerscorrect)values('$name','5','$result')";
         mysqli_query($con,$finalresult);
     }
      else
      {
      	?>
      	<tr>
      		<td class="text-center text-white">Select option !</td>
      		</tr>
      		<?php
      }
  }

  ?>

</tbody>

</table>
<a href="loginpage.php" class="btn btn-danger m-auto d-block">LOGOUT</a>
</div>
</div>
</body>
</html>
