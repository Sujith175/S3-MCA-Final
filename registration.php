<?php

session_start();

$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'userregistration');


$name = $_POST['newname'];
$pass1 = $_POST['newpassword'];
$pass2 = $_POST['newpasswordc'];

if($pass1 === $pass2)
{
		
$s = "select * from usertable where uname = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo'<script>var r = confirm("Username already taken!");</script>';
	echo'<script>if(r== true ){window.location.href = "signin.html";};</script>';
}
else
{
	$reg = "insert into usertable(uname, password) values ('$name' , '$pass2')";
	mysqli_query($con, $reg);
	echo "Registration Successfull!";
	$_SESSION['username'] = $name;
	header('location:index.php');

}

}
else{
	echo'<script>var r = confirm("Password Mismatch");</script>';
	echo'<script>if(r== true ){window.location.href = "signin.html";};</script>';
}

$s = "select * from usertable where uname = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo'<script>var r = confirm("Username already taken!");</script>';
	echo'<script>if(r== true ){window.location.href = "signin.html";};</script>';
}
else
{
	$reg = "insert into usertable(uname, password) values ('$name' , '$pass2')";
	mysqli_query($con, $reg);
	echo "Registration Successfull!";
	$_SESSION['username'] = $name;
	header('location:index.php');

}
?>