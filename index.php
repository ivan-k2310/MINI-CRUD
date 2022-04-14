        <?php
        require "include/session.php"; 
        include "include/header.php";
        $sql = "SELECT Voornaam, Achternaam FROM products";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result =$stmt->fetchAll();
        ?>

    <body>
        <main>
            <!-- background image -->

            <?php 
                include "include/nav.php"
            ?>

            <div class="backgroundContainer">
                <?php if($_SESSION['rights'] == 1) { ?>
                    <div class="welcomeAdmin">
                        <h1>Welcome Admin</h1>
                    <?php } elseif($_SESSION['rights'] == 2) { ?>
                        <div class="welcomeUser">
                            <h1>Welcome User</h1>
                    <?php } ?>
                    
                        
            </div>
        </main>
                <div class="container">
            <!-- info over site en restaurant -->
            <form action="include/logout.php">
                    <div>
                        <input class="submit-login" name="logout" type="submit" value="logout">
                    </div>
                </form>
            <div class="textWelcome">
            <p></p>
            </div>
        </div>
    </body>
</html>