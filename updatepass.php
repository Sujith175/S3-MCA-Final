<?php



$con = mysqli_connect("localhost","root","");

mysqli_select_db($con, 'userregistration');


$name = $_POST['name'];
$email = $_POST['email'];
$pass1 = $_POST['newpassword'];
$pass2 = $_POST['newpasswordc'];

if($pass1 === $pass2)
    {
	    $s = "select * from usertable where uname = '$name' && email='$email'";
        $result = mysqli_query($con,$s);
        $num = mysqli_num_rows($result);
            if($num==1)
                {   
                    $reg = "UPDATE usertable SET password = '$pass2' WHERE uname = '$name' && email='$email'";
                    $up = mysqli_query($con, $reg);
                        if($up==1)
                        {  
                            session_start();
                            $_SESSION['username'] = $name;
                            echo'<script>var r = confirm("Password updated sucessfully.");</script>';
                            echo'<script>if(r== true ){window.location.href = "index.php";};</script>';
                        }
                        else{
                            echo'<script>var r = confirm("entry to the database failed.");</script>';
                            echo'<script>if(r== true ){window.location.href = "signin.php";};</script>';
                            
                        }

                   }
            else
            {
                echo'<script>var r = confirm("Username not found!!");</script>';
                echo'<script>if(r== true ){window.location.href = "signin.php";};</script>';
            }
    }
else{
        echo'<script>var r = confirm("Password Mismatch");</script>';
        echo'<script>if(r== true ){window.location.href = "signin.php";};</script>';
    }

?>