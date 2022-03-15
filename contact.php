<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>contact</title>
</head>

<body>
    <main id="mainContact">
        <?php 
            include "nav.php"
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