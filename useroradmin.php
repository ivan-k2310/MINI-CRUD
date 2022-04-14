    <?php
        require "include/session.php";
       include_once "include/header.php";            
    ?>
    
<body>
    <main id="mainLogin">
        <?php 
            include "include/nav.php"
        ?>
            <div class="selectLogin">
                <p id="title-forms-register">login as?</p>
                <form action="loginUser.php">
                    <div>
                        <input class="submit-login" name="user" type="submit" value="user">
                    </div>
                </form>
                <form action="LoginAdmin.php">
                    <div>
                        <input class="submit-login" name="admin" type="submit" value="admin">
                    </div>
                </form>
            </div>
    </main>
</body>
</html>