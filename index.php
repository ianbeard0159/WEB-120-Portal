<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    
        <!-- Set page width and initial zoom to work with 
            whatever device is being used -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap-CSS -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Bootstrap-jQuerry -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap-JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- CSS File -->
        <link rel="stylesheet" href="static/css/web-portal.css">
        <!-- JavaScript File -->
        <script src="static/javascript/web-portal.js"></script>
    </head>
    <body>
        <!-- Popup Windows -->
        <div class = "modal">
            <div class = "modal-window" id = "contact-window">
                <div class = "button" id = "cancelBtn">
                    <span id = "cancelBtn" class="glyphicon glyphicon-remove"></span>
                </div>
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
        <div id = "top-bar">
            <h1 id = "top-text">WEB120 Portal Website</h1>
            <div id = "top-menu">
                <a class = "top-item" id = "nig">BIG</a>
                <p>-</p>
                <a class = "top-item" id = "aia">AIA</a>
                <p>-</p>
                <a class = "top-item" id = "flow">Flowchart</a>
                <p>-</p>
                <a class = "top-item" id = "final">Final Project</a>
                <p>-</p>
                <a class = "top-item" id = "contact">Contact Me</a>
            </div>
            <a id = "nav-symbol">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </a>
        </div>
        <div id = "drop-menu">
            <a class = "top-item" id = "nig">BIG</a>
            <a class = "top-item" id = "aia">AIA</a>
            <a class = "top-item" id = "flow">Flowchart</a>
            <a class = "top-item" id = "final">Final Project</a>
            <a class = "top-item" id = "contact">Contact Me</a>
        </div>
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
        <div id = "bottom-bar">
            <div id = "bottom-window">
            </div>
            <small>
                &copy;2018, All Rights Reserved, 
                <a href="http://validator.w3.org/check?uri=referer" 
                    target="_blank">Valid HTML</a> ~ 
                <a href="http://jigsaw.w3.org/css-validator/check/referer" 
                    target="_blank">Valid CSS</a>
            </small>
        </div>
    </body>
</html> 