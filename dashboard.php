    <?php
       include_once "header.php";
       if(isset($_POST['getal'])){
            $sql = "SELECT title, artiest, gerne FROM album WHERE ID = :ID";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":ID", $_POST['getal']);
            $stmt->execute();
            $result =$stmt->fetchAll();
       }  
    ?>

<body>
    <?php 
            include "nav.php"
    ?>
        <div class="dashboardContainer">
            <div class="titleDashboard">
                <a class="dashboardTitle">dashboard</a>
            </div>
            <div class="CRUDNavContainer">
                <div class="navItems">
                    <a class="navTitle" href="menubeheer.php">menu beheer</a>
                </div>
                <div class="navItems" href="#">
                    <a class="navTitle" >reservations</a>
                </div>
                <div class="navItems" href="#">
                    <a class="navTitle"> example</a>
                </div>
            </div>
        </div>
</body>
</html>