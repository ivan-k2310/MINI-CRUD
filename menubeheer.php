<?php
    include_once "header.php";
    $sql = "SELECT * FROM products";
    $stmt = $connect->prepare($sql);
        // $stmt->bindParam(":ID", $_POST['']);
    $stmt->execute();
    $result =$stmt->fetchAll();
    if (isset($_POST['submit'])){

        $sql ="INSERT INTO `products` (`name`, `price`, `image`, `about`)
               VALUES (:name, :price, :image, :about)";
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
        <table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>UPDATE</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="5">
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <?php
                    foreach ($result as $res) {
                        echo  "<tr>";
                            echo "<td>". $res['ID'] . "</td> <td>" . $res['name'] . "</td><td>" . $res['price'] . "</td> <td>". $res['image'] . "</td> <td>". $res['about'] . "</td> <td> <input class='submit-login' name='submit' type='submit' value='submit'>  </td>";
                        echo "<tr>";    
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>