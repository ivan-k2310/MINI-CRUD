<?php
    include "header.php";
    $sql = "SELECT * FROM products";
    $stmt = $connect->prepare($sql);
    // $stmt->bindParam(":ID", $_GET['ID']);
    $stmt->execute();
    $result =$stmt->fetchAll();
?>

<body>

    <?php 
    include "nav.php"
?>

    <div class="menuBeheerContainer">
        <div class="titleDashboard">
            <a class="dashboardTitle">menu management</a>
        </div>
        <table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>ABOUT</th>
                    <th>UPDATE/DELETE</th>
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
                            echo "<td>". $res['ID'] . "</td>
                            <td>" . $res['Name'] . "</td>
                            <td>" . $res['Price'] . "</td>
                            <td>". $res['Image'] . "</td>
                            <td>". $res['About'] . "</td>
                            <td> <input class='update-login' name='update' type='submit' value='update' onclick='update.php'>
                             <input class='delete-login' name='delete' type='submit' value='delete' onclick='#'>  </td>";
                        echo "<tr>";    
                    }
                ?>
            </tbody>
        </table>
        <div class="createLink">
            <a class="createLink" href="create.php">create</a>
        </div>
        <div class="backLink">
            <a class="smallLink" href="dashboard.php">back</a>
        </div>
    </div>
</body>

</html>