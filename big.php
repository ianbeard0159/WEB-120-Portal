
<!-- PHP Config File -->
<?php include 'resources/portal-config.php' ?>

<!DOCTYPE html>
<html lang = "en">
    <?php include 'resources/templates/header.php' ?>
    <head>
        <script src="public-html/javascript/big.js"></script>
    </head>
    <body>
        <!-- Popup Windows -->
        <?php include 'resources/templates/modal.php' ?>
        <?php include 'resources/templates/nav-bar.php' ?>
        <div id = "main">
            <div id="big-container">
                <div id="big-leftColumn">
                    <div class="big-textBox" id="topic-1">
                        <?php include 'public-html/documents/bigResearch-1.html' ?>
                    </div>
                    <div class="big-textBox" id="topic-2">
                    </div>
                    <div class="big-textBox" id="topic-3">
                        <?php include 'public-html/documents/bigResearch-3.html' ?>
                    </div>
                    <div class="big-textBox" id="topic-4">
                    </div>
                    <div class="big-textBox" id="topic-5">
                    </div>
                </div>
                <div id="big-rightColumn">
                    <div id="big-nav">
                        <h2>BIG Navigation</h2>
                        <p class="big-nav-item" id="big1">1. Responsive vs Mobile</p>
                        <p class="big-nav-item" id="big2">2.</p>
                        <p class="big-nav-item" id="big3">3. Flexboxes</p>
                        <p class="big-nav-item" id="big4">4.</p>
                        <p class="big-nav-item" id="big5">5.<p>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'resources/templates/footer.php' ?>
    </body>
</html> 