
<?php
session_start();
    $_SESSION['logincounter'] = null;
    $_SESSION['rights'] = null;
 header("location: ../beforelogin/index.php");
  ?>
