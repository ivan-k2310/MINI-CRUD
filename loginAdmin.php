    <?php
    Session_start();
        $_SESSION['logincounter'] = 1;
        $_SESSION['rights'] = null;
       include_once "include/header.php";
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetchAll();
        var_dump($result);
        if (isset($_POST['submit'])){
            if(count($result) > 0){
                $_SESSION['rights']= 2;
                header("Location: back-end/dashboard.php");
            } else {
                echo "username niet gevonden";
            }
        ;
        }
            
    ?>
    
<body>
    <main id="mainLogin">
        <?php 
            include "include/nav.php"
        ?>
            <form class="login" action="loginAdmin.php" method="post">
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