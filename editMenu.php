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
    <main id="mainLogin">
        <?php 
            include "nav.php"
        ?>
            <?php 
                if(isset($_POST['submit'])){
                    
                    echo $_POST['username'] ."<br>";
                  
                    echo $_POST['password'];
                    echo $result[0]['title'];
                    echo $result[0]['artiest'];
                    echo $result[0]['gerne'];
                }   
            ?>
    </main>
</body>
</html>