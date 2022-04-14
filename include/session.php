<?php session_start();
    $_SESSION['pageCount']=$_SESSION['pageCount']+1;
    $_SESSION['rights'];
    // rights: 1 = user, 0 = admin
    echo $_SESSION['pageCount'];
    echo $_SESSION['rights'];
 ?>