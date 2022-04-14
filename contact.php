    <?php
        require "include/session.php";
       include "include/header.php"
    ?>
 
<body>
    <main id="mainContact">
        <?php 
            include "include/nav.php"
        ?>
        <div class="contactContainer">
            <div class="emptySpace">

            </div>
            <div class="ContactTextBox">
                <div class="emptyTextBoxSpace"></div>
                <div class="emptyTextBoxSpace"></div>
                <div class="cityTitle">
                    <p class="city">Nijmegen</p>
                </div>
                <div class="generalInfo">
                    <p class="generalInfo">Grove Street</p>
                </div>
                <div class="generalInfo">
                    <p class="generalInfo">28875BG Nijmegen</p>
                </div>
                <div class="generalInfo" id="borderContact">
                    <p class="generalInfo">tel:06489-9430</p>
                </div>
                <div class="generalInfo" id="borderContactDelivery">
                    <div class="splitGeneralInfo">
                        <p class="generalInfo"> bezorgen vandaag:</p>
                    </div>
                    <div class="splitGeneralInfo">
                        <p class="generalInfo"> 5:00 PM - 9:00 PM</p>
                    </div>
                </div>
                <div class="generalInfo" id="borderContactDelivery">
                    <div class="splitGeneralInfo">
                        <p class="generalInfo"> afhalen vandaag:</p>
                    </div>
                    <div class="splitGeneralInfo">
                        <p class="generalInfo"> 2:00 PM - 9:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>