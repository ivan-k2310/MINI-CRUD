<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <main id="mainLogin">
        <?php 
            include "nav.php"
        ?>
            <form>
                <p id="title-forms-register">login</p>
                <div>
                    <input class="login-text-box" type="text" placeholder="username">
                </div>
                <div>
                    <input class="login-text-box" type="password" placeholder="enter password">
                </div>
                <div>
                    <input class="submit-login" type="submit">
                </div>
            </form>
    </main>
</body>
</html>