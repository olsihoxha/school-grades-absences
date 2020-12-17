<?php
       include('./config/configuration.php');
      session_start();
      $teacher=$_SESSION['theteacher'];
      $sql = "SELECT * FROM classdata WHERE classteacher='$teacher'";
      $result = mysqli_query($con, $sql);
      $data=mysqli_fetch_all($result, MYSQLI_ASSOC);
  
      mysqli_free_result($result);
      mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="scripts/app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/feed.css">
    <title>Feed</title>
</head>
<body>
  <img src="assets/feed.jpeg" alt="background-image" class="feedBg">
    <h1>Please choose an action: </h1>
    <h2 class="create-subject" onclick="pop()">Create a new class</h2>
      
    <div id="box">
    <i class="fa fa-close" onclick="pop()" style="font-size: 40px" aria-hidden="true"></i>
    <h1 class="modal-title">{Create a new class}</h1>
    <form action="./actions/createclass.php" method="get">
    <h2 class="labels">Name of the class</h2>
    <input type="text" name="classname" id="classname" class="input-txt" placeholder="name of the class">
    <h2 class="labels">Subject of the class</h2>
    <input type="text" name="classsubject" id="classsubject" class="input-txt" placeholder="name of the subject">
    <h2 class="labels">Teacher of the class</h2>
    <input type="email" name="classteacher" id="classteacher" class="input-txt" placeholder="your name">
    <h2 class="labels">
    <input type="submit" name="submit" class="input-submit" value="Create Class">
    </form>
    </div>


    <div id="subject-box">
    <i class="fa fa-close" onclick="popit()" style="font-size: 40px" aria-hidden="true"></i>
    <h1 class="openclass-title">Open your class</h1>
    <div class="all-subjects">
    <?php
        foreach($data as $subject){ ?>
    <a class="class-details" href="classdetails.php?classid=<?php echo $subject['classid'];?>">
    <div class='class-info'>
    <h1><?php echo $subject['classname']; ?></h1>
    <h3><?php echo $subject['classsubject']; ?></h3>
    <h3>Created by: <?php echo $subject['classteacher']; ?></h3>
    </div>
    <?php } ?>
    </div>
    </a>
    </div>


    <h2 class="login-subject" onclick="popit()">Go to your subject</h2>
</body>
</html>