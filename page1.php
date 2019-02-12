<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome | Z Creature Creator</title>
</head>
<body>

<div id="wrapper">
    <?php require 'inc/header.php';?>
    <div class="main-content-box">
        <div class="section">
            <h2>What is this site?</h2>
            <p>This is an experimental site where users can add and change parts of the page to create their own creature, just by editing the URL of the site! It is similar to a character creator or a dress-up game, and is completely browser-based.</p>
        </div>
        <div class="section">
            <h2>Instructions</h2>
            <p>Scroll to the bottom of this page for a link to open up the page with the character creator. On this page, you can append certain phrases to the end of the URL to modify different aspects of the creature. Refer to the guide below for a list of parts you can add. To use it, type "?Category=Name" to the end of the URL for the first part you want to edit, then type "&Category=Name" for any subsequent additions.</p>
            <p>A sample url would be: "page2.php?name=fido&body=dragon&eyes=wink&mouth=open&bgcolor=ffeecc&border=dashed&borderwidth=thick"</p>
            <h2>Guide</h2>
            <div>
                <h4>Category: name</h4>
                <p>[Enter any name here and it will be displayed. Do not use special characters.]</p>
                <h4>Category: body</h4>
                <p>cat, dog, bug, dragon</p>
                <h4>Category: eyes</h4>
                <p>open, closed, wink, oof, dot</p>
                <h4>Category: mouth</h4>
                <p>open, closed, smile, tongue</p>
                <h4>Category: bgcolor</h4>
                <p>crimson, orange, lightyellow, forestgreen, lightgreen, teal, blueviolet, silver</p>
                <p>[You can also enter a custom color if you know the 6-character hex value of the color. Do not enter the # symbol.]</p>
                <h4>Category: border</h4>
                <p>dotted, dashed, solid, double</p>
                <h4>Category: borderwidth</h4>
                <p>thin, medium, thick</p>
            </div>
            <a href="page2.php" target="_blank"><button type="button" class="btn btn-primary btn-lg">Start!</button></a>
        </div>
        <?php require 'inc/footer.php';?>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>