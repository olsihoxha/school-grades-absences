<?php
    include("../config/configuration.php");
    session_start();
    echo $em=$_SESSION['theteacher'];
    echo $pass=$_SESSION['password'];
    mysqli_query($con,"SELECT * FROM users WHERE useremail = '$em' AND userpassword = '$pass'");
    if(mysqli_affected_rows($con) >0){
     header('Location: ../feed.php');
    }else{
    header('Location: ../signin.php');
    }
mysqli_close($con);
?>