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
                    <th>UPDATE</th>
                    <th>DELETE</th>
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
                ?>
                        <tr>
                            <td><?php echo $res['ID']; ?></td>
                            <td><?php echo $res['Name']; ?></td>
                            <td><?php echo $res['Price']; ?></td>
                            <td><?php echo $res['Image']; ?></td>
                            <td><?php echo $res['About']; ?></td>
                            <td class="buttonTable">    
                                <form class="buttonForm" action='update.php' method='POST'>
                                    <input name='menuID' type='hidden' value='<?php echo $res['ID']; ?>'>
                                    <input class='update-login' name='updateLink' type='submit' value='update'>
                                </form> 
                            </td>
                            <td class="buttonTable"> 
                                <form class="buttonForm" action='menuAction.php' method='POST'>
                                        <input name='menuID' type='hidden' value='<?php echo $res['ID']; ?>' />
                                        <input class='delete-login' name='delete' type='submit' value='delete' />
                                </form>
                            </td>
                        </tr>

                <?php
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