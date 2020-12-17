<?php
    include('../config/configuration.php');
    if(isset($_GET["submit"])){
        $nameClass=$_GET["classname"];
        $subjectClass=$_GET["classsubject"];
        $teacherClass=$_GET["classteacher"];
        if($nameClass && $subjectClass && $teacherClass){
        $res=mysqli_query($con,"INSERT INTO classdata(classname, classsubject, classteacher) VALUES ('$nameClass', '$subjectClass', '$teacherClass')");
        if($res){
            header("Location: ../feed.php");
        }       
    }
}

?>