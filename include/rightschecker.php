<?php       
    if ($_SESSION['rights'] == "") {
        header("Location: ../index.php");
    } elseif($_SESSION['rights'] == 1) {
        header("Location: ../index.php");
    } elseif($_SESSION['rights'] == 2) {
        return;
    }
    
?>

