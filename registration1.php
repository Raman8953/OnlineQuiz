<?php
session_start();
//header('location:index.php');
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdatabase');

$username = $_POST['user']; 
$password = $_POST['pass'];
$email = $_POST['email'];
// echo $username; // echo $password;
$check = "select * from quizregistration where name='$username' && pass='$password' "; 
$resultcheck = mysqli_query($con,$check);
$row = mysqli_num_rows($resultcheck); 
if($row == 1)
	{
		?>
		<script type="text/javascript">
			alert("this username and password already exist choose another username and password")
			window.location.href="http://localhost/quiz2/loginpage.php";
		</script>
		<?php 
	 } 
else{
$q = "insert into quizregistration(name, pass,email) values ('$username', '$password','$email')"  ;
$result = mysqli_query($con,$q);
header('location:successfully.php');
}
?>