<?php
  $showSuccessMessage=FALSE;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Sign Up</title>
</head>
<body>
    <img src="assets/mainbg.jpeg" alt="background-image" class="mainBg">
    <div class="content">
        <div class="signUp">
        <h1>{Sign Up}</h1>
        <form action="">
            <input type="text" name="" id="" class="get-data-input" placeholder="name">
            <input type="email" name="" id="" class="get-data-input" placeholder="e-mail">
            <input type="password" name="" id="" class="get-data-input" placeholder="password">
            <?php
                if($showSuccessMessage){
                    ?>
                    <p class="message">Congratulations you created your account! 
                       We need to confirm your account and then you can use it.</p>
                <?php
                }
                ?>
            <input type="submit" value="Sign Up" class="submit-button">
        </form>
        <h4>Do you have an account? <a href="signin.php">Sign In</a></h4>
        </div>
    </div>
</body>
</html>