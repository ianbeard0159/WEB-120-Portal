
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
            <div class = "modal-window" id = "contact-window">
                <div class = "button" id = "cancelBtn">X</div>
                <h2>Contact Me</h2>
                 <form id = "contact-form">
                     Name:<br>
                     <input type = "text" name = "name"><br>
                     E-Mail:<br>
                     <input type = "text" name = "email"><br>
                     Comments:<br>
                     <textarea rows = "5" cols = "19" name = "comment"></textarea><br>
                     <input class = "button" type = "submit" value = "Send" id = "sendBtn">
                     
                 </form>
            </div>
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