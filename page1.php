<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome | Z Creature Creator</title>
</head>
<body>

<div id="wrapper">
    <div class="header">
        <img src="img/z-chara-logo.png" alt="Z Creature Creator Logo">
    </div>
    <div class="main-content-box">
        <div class="section">
            <h2>What is this site?</h2>
            <p>This is an experimental site where users can add and change parts of the page to create their own creature, just by editing the URL of the site! It is similar to a character creator or a dress-up game, and is completely browser-based.</p>
        </div>
        <div class="section">
            <h2>Instructions</h2>
            <p>Scroll to the bottom of this page for a link to open up the page with the character creator. On this page, you can append certain phrases to the end of the URL to modify different aspects of the creature. Refer to the guide below for a list of parts you can add. To use it, type "?Category=Name" to the end of the URL for the first part you want to edit, then type "&Category=Name" for any subsequent additions.</p>
            <h2>Guide</h2>
            <div>
                <h4>Category: Body</h4>
                <p>Cat, dog, bug, dragon</p>
                <h4>Category: Eyes</h4>
                <p>Open, closed, wink, oof, dot</p>
                <h4>Category: Mouth</h4>
                <p>Open, closed, smile, tongue</p>
                <!-- bg color, name, body, eyes, nose, mouth, wings -->
            </div>
            <a href="page2.php" target="_blank"><button type="button" class="btn btn-primary btn-lg">Start!</button></a>
        </div>
        <div class="footer">
            <p>This website is copyright 2019 by Zhong (June) Chai. All graphics on this site are original.</p>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>