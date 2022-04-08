
<?php
    include_once('connection.php');

    if(isset($_POST['delete'])){
        $sql = "DELETE FROM products WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuID']);
        $stmt->execute();

        header("Location: menubeheer.php");
        exit();
    }

    if(isset($_POST['update'])){
        $sql = "UPDATE products
                SET Name = :name, Price = :price, Image = :image, About = :about
                WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['menuID']);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":image", $_POST['image']);
        $stmt->bindParam(":about", $_POST['about']);
        $stmt->execute();

        header("Location: menubeheer.php");
        exit();
    }

    if (isset($_POST['create'])) {
        $sql ="INSERT INTO `products` (`Name`, `Price`, `Image`, `About`)VALUES (:name, :price, :image, :about)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":image", $_POST['image']);
        $stmt->bindParam(":about", $_POST['about']);
        $stmt->execute();

        header("Location: menubeheer.php");
        exit();
    }
?>