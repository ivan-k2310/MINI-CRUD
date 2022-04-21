        <?php 
        Session_start();
        include "../include/header.php";
            if(isset($_GET['search']) && !empty($_GET['search'])){
                $sql = "SELECT * FROM `products` WHERE `Name` LIKE CONCAT('%', :Name, '%')";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(':Name', $_GET['search']);
            }else {
                $sql = "SELECT * FROM products";
                $stmt = $connect->prepare($sql);
            }
            $stmt->execute();
            $result =$stmt->fetchAll();
        ?>
<body>
        <?php 
            include "../include/rightschecker.php";
        ?>
        <div class="titleMenuBox">
            <div class="titleBox">
                <a class="titleMenu">menu</a>
            </div>
            <form class="searchBar" action="menu.php" method="GET">
                <input class="search" type="text" name="search" placeholder="search...">
                <input class="submit-search" type="submit" name="searchButton">
            </form>
        </div>
        <div class="menuContainer">
            <div class="menuEmptyspace">
            </div>
            <div class="itemsContainer">
                <?php
                    foreach ($result as $res) {
                ?>
                    <div class="productContainer">
                        <div class="productImage">
                            <img class="productImages" src="../img/<?php echo $res['Image']; ?>" alt="">
                        </div>
                        <div class="productInfo">
                            <p class="nameProduct"> <?php echo $res['Name']; ?></p>
                            <p class="about">    <?php echo $res['About']; ?></p>
                        </div>
                        <div class="productPrice-Add">
                            <div class="priceItem">
                                <a class="price"> <?php echo $res['Price']; ?></a>
                            </div>
                            <div class="addButton">
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    ?>
                </div>
            </div>
</body>
</html>