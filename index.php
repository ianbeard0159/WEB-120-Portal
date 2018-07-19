
<!-- PHP Config File -->
<?php include 'portal-config.php' ?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php include 'static/html/header.php' ?>
    </head>
    <body>
        <!-- Popup Windows -->
        <div class = "modal">
            <?php include "includes/simple.php";?>
            <p class="clear-recaptcha"></p>
        </div>
        <?php include 'static/html/nav-bar.php' ?>
        <div id = "main">
            <div class = "picture-box" id = "profile-picture">
                <div class = "pic-cover">
                    <div class = "pic-text">
                        <h1>Welcome</h1>
                        <p>My name is Ian Beard.<br>I am a student at Seattle Central College, studying web development.</p>
                    </div>
                </div>
            </div>
            <div class = "text-box"></div>
            
        </div>
        <?php include 'static/html/footer.php' ?>
    </body>
</html> 