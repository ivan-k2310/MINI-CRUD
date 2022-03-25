    <?php
       include_once "header.php";
       if(isset($_POST['getal'])){
            $sql = "SELECT title, artiest, gerne FROM album WHERE ID = :ID";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":ID", $_POST['getal']);
            $stmt->execute();
            $result =$stmt->fetchAll();
       }  
    ?>

<body>
    <?php 
            include "nav.php"
    ?>




</body>
</html>