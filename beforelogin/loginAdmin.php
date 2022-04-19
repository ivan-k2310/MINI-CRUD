    <?php
    Session_start();
        $_SESSION['logincounter'] = 1;
        $_SESSION['rights'] = null;
       include_once "../include/header.php";
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if (isset($_POST['submitAdmin'])){
            if(count($result) > 0){
                var_dump($result);
                $_SESSION['rights']= 2;
                header("Location: ../back-end/dashboard.php");
            } else {
                echo "Wrong username or password";
            }
        ;
        }
    ?>
    
<body>
    <main id="mainLogin">
        <?php 
            include "nav.php"
        ?>
            <form class="login" action="../beforelogin/loginAdmin.php" id="loginFormAdmin" method="post">
                <p id="title-forms-register">login</p>
                <div>
                    <input class="login-text-box" name="username" type="text" id="usernameAdmin" placeholder="username" value="">
                </div>
                <div>
                    <input class="login-text-box" name="password" type="password" id="passwordAdmin" placeholder="enter password" value="">
                </div>
                <div>
                    <input class="submit-login" name="submitAdmin" type="submit" value="submit">
                </div>
            </form>
            <script src="../js/adminFormValidation.js"></script>
    </main>
</body>
</html>