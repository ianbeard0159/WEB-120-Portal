
<!-- PHP Config File -->
<?php include 'resources/portal-config.php' ?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php include 'resources/templates/header.php' ?>
    </head>
    <body>
        <!-- Popup Windows -->
        <div class = "modal">
            <?php include "resources/libraries/reCaptcha/includes/simple.php";?>
            <p class="clear-recaptcha"></p>
        </div>
        <?php include 'resources/templates/nav-bar.php' ?>
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
            <!-- change -->
        </div>
        <?php include 'resources/templates/footer.php' ?>
    </body>
</html> 