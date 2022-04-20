<?php
Session_start();

    include_once 'header.php';

    $sql="SELECT * FROM products WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['menuID']);
    $stmt->execute();
    $result = $stmt->fetch();

?>

<body>

    <?php    
        include "rightschecker.php";
    ?>

    <div class="menuBeheerContainer">
        <div class="createContainer">
            <div class="titleDashboard">
                <a class="dashboardTitle">update</a>
            </div>
                <form action="menuAction.php" method="POST" id="updateForm">
                    <div>
                        <input class="login-text-box"  type="text" name="menuID" value="<?php echo $result['ID']  ?>" readonly />
                    </div>
                    <div>
                        <input class="login-text-box" id="nameUpdate"  type="text" name="name" value="<?php echo $result['Name']  ?>" />
                    </div>
                    <div>
                        <input class="login-text-box" id="priceUpdate" type="text" name="price" value="<?php echo $result['Price']  ?>" />
                    </div>
                    <div>
                        <input class="" id="imageUpdate" type="file" name="image" value="<?php echo $result['Image']  ?>" />
                    </div>
                    <div>
                        <input class="login-text-box" id="aboutUpdate" type="text" name="about" value="<?php echo $result['About']  ?>" />
                    </div>
                    <div>
                        <input class="submit-login" name="update" type="submit" value="submit">
                    </div>
                </form>
                <script src="../js/updateFormValidation.js"></script>
        </div>
        <<div class="backLink">
            <a class="smallLink" href="menubeheer.php">back</a>
        </div>
</body>

</html>