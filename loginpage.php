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
            <form action="dashboard.php" method="post">
                <p id="title-forms-register">login</p>
                <div>
                    <input class="login-text-box" name="username" type="text" placeholder="username">
                </div>
                <div>
                    <input class="login-text-box" name="password" type="password" placeholder="enter password">
                </div>
                <div>
                    <input class="submit-login" name="submit" type="submit" value="pik">
                </div>
            </form>
            <?php 
                if(isset($_POST['submit'])){
                    echo $_POST['username'] ."<br>";
                  
                    echo $_POST['password'];
                    echo $result[0]['title'];
                    echo $result[0]['artiest'];
                    echo $result[0]['gerne'];
                }   
                
            ?>
            <?php 
                    if(isset($_POST['submit'])){
                        
                        echo "<h1 class='title'> welcome ". $_POST['username'] ." </h1>";
                    
                        // echo $_POST['password'];
                        // echo $result[0]['title'];
                        // echo $result[0]['artiest'];
                        // echo $result[0]['gerne'];
                    }   
                ?>
    </main>
</body>
</html>