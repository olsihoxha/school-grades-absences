<?php

    $mysqli=new mysqli("localhost","olsi","#@olsi123olsi#@","therater");

    $databaseError=FALSE;
    if (mysqli_connect_errno()) {
        $databaseError=TRUE;
        exit();
    }
?>