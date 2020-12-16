<?php
     include("./config/configuration.php");

     if( isset($_POST['email']) && isset($_POST['password']) ){
     $em=$_POST['email'];
     $pass=$_POST['password'];
     mysqli_query($con,"SELECT * FROM users WHERE useremail = '$em' AND userpassword = '$pass'");
     if(mysqli_affected_rows($con) >0){
        session_start();
        $_SESSION['theteacher']=$em;
        header('Location: feed.php');
     }
     mysqli_close($con);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Sign In</title>
</head>
<body>
<img src="assets/mainbg.jpeg" alt="background-image" class="mainBg">
    <div class="content">
        <div class="signUp">
        <h1>{Sign In}</h1>
        <form method="post">
            <input type="email" name="email" id="email" class="get-data-input" placeholder="e-mail">
            <input type="password" name="password" id="password" class="get-data-input" placeholder="password">
            <input type="submit" value="Sign In" class="submit-button">
        </form>
        <h4>Create an account? <a href="index.php">Sign Up</a></h4>
        </div>
    </div>
</body>
</html>