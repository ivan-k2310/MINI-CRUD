
<?php
session_start();
    $_SESSION['logincounter'] = null;
    $_SESSION['rights'] = null;
 header("location: ../index.php"); ?>
