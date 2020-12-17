<?php
 include("./config/configuration.php");
 $classid=NULL;
 if(isset($_GET['classid'])){
    $classid=$_GET['classid'];
 }

    $sql = "SELECT * FROM classdata WHERE classid='$classid'";
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
    <link rel="stylesheet" href="style/details.css">
    <title>Class Details</title>
</head>
<body>
  <div class="header-class">
  <h1 class="class-name"><?php
        echo $data[0]["classname"];
  ?></h1>
  </div>

  <div class="students-content">
    <h1>123</h1>
  </div>
  
</body>
</html>