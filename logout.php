<?php

    echo"logout";
    session_destroy();
    unset($_SESSION['username']);
    header("location:signin.html");

?>