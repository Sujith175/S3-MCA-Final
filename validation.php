<?php



$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'userregistration');


$name = $_POST['user'];
$pass = $_POST['password'];


$s = "select * from usertable where uname = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	session_start();
	$_SESSION["username"] = "$name";
	
	header('location:index.php');
}
else {
	echo'<script>var r = confirm("Username or Password is incorrect try again.");</script>';
    echo'<script>if(r== true ){window.location.href = "signin.php";};</script>';
}
?>