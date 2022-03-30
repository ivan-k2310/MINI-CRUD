    <?php
       include_once "header.php";
            $sql = "SELECT * FROM album";
            $stmt = $connect->prepare($sql);
            // $stmt->bindParam(":ID", $_POST['']);
            $stmt->execute();
            $result =$stmt->fetchAll();
    ?>

<body>
    

    
    <?php 
            include "nav.php"
    ?>
<div class="menuBeheerContainer">
        <div class="titleDashboard">
            <a class="dashboardTitle">dashboard</a>
        </div>
        <table class="blueTable">
        <thead>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PRICE</th>
        <th>IMAGE</th>
        <th>ABOUT</th>
        <th>ABOUT</th>
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
                    echo "<td>". $res['ID'] . "</td> <td>" . $res['title'] . "</td><td>" . $res['artiest'] . "</td> <td>". $res['gerne'] . "</td> <td>". $res['prijs'] . "</td> <td>". $res['voorraad'] . "</td>";
                echo "<tr>";    
                }
            ?>
        </tbody>
        </tr>
        </table>
        <form action="menubeheer.php" method="POST">
            <div>
                <input type="text" name="nameDish" placeholder="title"></input>
            </div>
            <div>
                <input type="text" name="priceDish" placeholder="price"></input>
            </div>
            <div>
                <input type="file" name="imageDish" ></input>
            </div>
            <div>
                <input type="text" name="beschrijving" placeholder="description"></input>
            </div>
        </form>

    </div>
</body>
</html>