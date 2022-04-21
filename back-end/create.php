<?php
Session_start();
    include_once('header.php');
?>
<body>
    <?php 
    include "rightschecker.php";
?>
    <div class="menuBeheerContainer">
        <div class="createContainer">
            <div class="titleDashboard">
                <a class="dashboardTitle">create</a>
            </div>
            <form action="menuAction.php" method="POST" id="createForm">
                <div>
                    <input class="login-text-box" id="nameCreate" type="text" name="name" placeholder="title"></input>
                </div>
                <div>
                    <input class="login-text-box" id="priceCreate" type="text" name="price" placeholder="price"></input>
                </div>
                <div>
                    <input class="" id="imageCreate" type="file" name="image"></input>
                </div>
                <div>
                    <input class="login-text-box" id="aboutCreate" type="text" name="about" placeholder="description"></input>
                </div>
                <div>
                    <input class="submit-login" name="create" type="submit" value="submit">
                </div>
            </form>
            <script src="../js/createFormValidation.js"></script> 
        </div>
        <div class="backLink">
            <a class="smallLink" href="menubeheer.php">back</a>
        </div>
    </div>
</body>
</html>