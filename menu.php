        <?php 
        include "header.php"
        ?>
<body>
        <?php 
            include "nav.php"
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
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">
                        <p> 
                            Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Donec leo ex, tempor non eros vitae, vestibulum accumsan tellus.
                            Vivamus volutpat purus at tincidunt rutrum. 
                        </p>
                    </div>
                    <div class="productPrice-Add">
                        <div class="price">
                            <a class="#">0,00</a>
                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a class="buttonString">add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="productContainer">
                    <div class="productImage">

                    </div>
                    <div class="productInfo">

                    </div>
                    <div class="productPrice-Add">
                        <div class="price">

                        </div>
                        <div class="addButton">
                            <button class="priceButton">
                                <a>add</a>
                            </button>
                        </div>
                    </div>
                </div>
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
        <?php 
            if(isset($_POST['getal'])){
                $sql = "SELECT title, artiest, gerne FROM album WHERE ID = :ID";
                $stmt ->bindparam(":ID", $_POST['getal']);

                $stmt = $connect ->prepare($sql);
                $stmt ->execute();
                $result =$stmt->fetchAll();
            }

            if(isset($_POST['submit'])){
                echo $_POST['username'] ."<br>";
                
                echo $_POST['password'];
                echo $result[0]['title'];
                echo $result[0]['artiest'];
                echo $result[0]['gerne'];
            }   
        ?>
</body>
</html>