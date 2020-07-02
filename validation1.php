<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con)
	{ 
		echo "connection successful";
	}
else{
 echo " no connection"; 
    }
mysqli_select_db($con, 'quizdatabase');
$name = $_POST['user'];
$pass = $_POST['pass'];
$q = "select * from quizregistration  where name = '$name' && pass = '$pass' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1)
	{
	 $_SESSION['username'] = $name; 
	 header('location:select.php');
    }
else
{
header('location:loginpage.php');
}
?>