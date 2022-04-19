    <?php
    Session_start();
        $_SESSION['logincounter'] = 1;
        $_SESSION['rights'] = null;
       include_once "../include/header.php";
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetchAll();
        if (isset($_POST['submitUser'])){
            if(count($result) > 0){
                $_SESSION['rights'] = 1;
                header("Location: ../afterlogin/indexAfterLogin.php");
            } else {
                return "Wrong username or password";
            }
        ;
        }
            
    ?>
    
<body>
    <main id="mainLogin">
        <?php 
            include "nav.php"
        ?>
            <form class="login" action="loginUser.php" id="loginFormUser" method="post">
                <p id="title-forms-register">login</p>
                <div>
                    <input class="login-text-box" name="username" type="text" id="usernameUser" placeholder="username" value="">
                </div>
                <div>
                    <input class="login-text-box" name="password" type="password" id="passwordUser" placeholder="enter password" value="">
                </div>
                <div>
                    <input class="submit-login" name="submitUser" type="submit" value="submit">
                </div>
            </form>
            <script src="../js/userFormValidation.js"></script>
    </main>
</body>
</html>