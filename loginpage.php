    <?php
       include_once "header.php";
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetchAll();
        var_dump($result);
        if (isset($_POST['submit'])){
            if(count($result) > 0){
                // setcookie("username", $_POST['username'],
                header("Location: dashboard.php");
            } else {
                echo "username niet gevonden";
            }
            var_dump($_POST);
        
        ;
        }
            
    ?>
    
<body>
    <main id="mainLogin">
        <?php 
            include "nav.php"
        ?>
            <form action="loginpage.php" method="post">
                <p id="title-forms-register">login</p>
                <div>
                    <input class="login-text-box" name="username" type="text" placeholder="username" value="">
                </div>
                <div>
                    <input class="login-text-box" name="password" type="password" placeholder="enter password" value="">
                </div>
                <div>
                    <input class="submit-login" name="submit" type="submit" value="submit">
                </div>
            </form>
    </main>
</body>
</html>