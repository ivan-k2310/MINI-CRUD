        <?php 
        include "include/header.php";
            $sql = "SELECT * FROM products";
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $result =$stmt->fetchAll();
        ?>
<body>
        <?php 
            include "include/nav.php"
        ?>
        <div class="menuContainer">
            <div class="menuNavContainer">
                <div class="productNavbar">
                    <li class="ProductNavbarLinks"><a href="#">example</a></li>
                    <li class="ProductNavbarLinks"><a href="#">example</a></li>
                    <li class="ProductNavbarLinks"><a href="#">example</a></li>
                    <li class="ProductNavbarLinks"><a href="#">example</a></li>
                    <li id="ProductNavbarLinks"><a href="#">example</a></li>
                </div>
            </div>
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
                                <button class="priceButton">
                                    <a class="buttonString">add</a>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                    ?>
                </div>

            <div class="shoppingCartContainer">
                <div class="shoppingCart">
                    <div class="shoppingCartTitle">

                    </div>
                    <div class="shoppingCartItems">

                    </div>
                    <div class="shoppingCartItems">
                        
                    </div>
                    <div class="shoppingInfo">
                        <div class="totPrice">

                        </div>
                        <div class="checkoutContainer">
                             <button>checkout</button>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>
        
</body>
</html>