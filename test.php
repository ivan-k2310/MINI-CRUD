<?php
    include_once('header.php');
    if (isset($_POST['submit'])){
        $sql ="INSERT INTO `products` (`name`, `price`, `image`, `about`)VALUES (:name, :price, :image, :about)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":image", $_POST['image']);
        $stmt->bindParam(":about", $_POST['about']);
        $stmt->execute();
    }
?>

<body>

    <?php 
    include "nav.php"
?>

    <div class="menuBeheerContainer">
        <div class="titleDashboard">
            <a class="dashboardTitle">menubeheer</a>
        </div>
        <div class="createContainer">
            <div class="titleDashboard">
                <a class="dashboardTitle">toevoegen</a>
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
    </div>
</body>

</html>