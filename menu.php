        <?php 
        Session_start();
        include "include/header.php";
            $sql = "SELECT * FROM products";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result =$stmt->fetchAll();
        ?>
<body>
        <?php 
            include "include/rightschecker.php";
        ?>
        <div class="titleDashboard">
            <a class="dashboardTitle">menu</a>
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
                            <img class="productImages" src="img/<?php echo $res['Image']; ?>" alt="">
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