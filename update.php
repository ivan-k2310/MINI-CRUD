<?php
    include_once('header.php');
    // php update data in html database using PDO
?>

<body>

    <?php 
    include "nav.php"
?>

    <div class="menuBeheerContainer">
        <div class="createContainer">
            <div class="titleDashboard">
                <a class="dashboardTitle">update</a>
            </div>

            <form action="test.php" method="POST">
                <div>
                    <input class="login-text-box" type="text" name="name" placeholder="title"></input>
                </div>
                <div>
                    <input class="login-text-box" type="text" name="price" placeholder="price"></input>
                </div>
                <div>
                    <input class="" type="file" name="image"></input>
                </div>
                <div>
                    <input class="login-text-box" type="text" name="about" placeholder="description"></input>
                </div>
                <div>
                    <input class="submit-login" name="submit" type="submit" value="submit">
                </div>
            </form>
        </div>
        <<div class="backLink">
            <a class="smallLink" href="menubeheer.php">back</a>
        </div>
</body>

</html>