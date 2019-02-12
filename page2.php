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
    <title>Z Creature Creator</title>
</head>
<body>
<?php require 'inc/header.php';?>
<div class="frame-container">
    <div class="main-frame">
        <div class="name">
            <h2>Name: 
            <?php 
                ///// CHANGE DISPLAY NAME /////
                // if a name is inputted, display it. trim whitespaces and limit to 20 characters max
                if (isset($_GET['name'])){
                    $outputName = substr(trim($_GET['name']), 0, 20);
                    echo $outputName;
                } else {
                    echo 'None';
                }
            ?>
            </h2>
        </div>

        <img class ="img-bg" src="img/z-base.png">

        <?php 
            ///// CHANGE BODY PARTS /////
            // if 'body=x' is appended to the url, display an image of the matching body
            if (isset($_GET['body'])){
                switch ($_GET['body']) {
                    case 'cat':
                        echo '<img class ="img-body" src="img/z-body-cat.png">';
                        break;
                    
                    case 'dog':
                        echo '<img class ="img-body" src="img/z-body-dog.png">';
                        break;

                    case 'bug':
                        echo '<img class ="img-body" src="img/z-body-bug.png">';
                        break;

                    case 'dragon':
                        echo '<img class ="img-body" src="img/z-body-dragon.png">';
                        break;
                    
                    default: // if url doesn't match the presets, display the default
                        echo '<img class ="img-body" src="img/z-body-blank.png">';
                        break;
                }
            } else { // if nothing is found in the url, display the default
                echo '<img class ="img-body" src="img/z-body-blank.png">';
            }
        ?>

        <?php 
            // if 'eyes=x' is appended to the url, display an image of the matching eyes
            if (isset($_GET['eyes'])){
                switch ($_GET['eyes']) {
                    case 'open':
                        echo '<img class ="img-eyes" src="img/z-eyes-open.png">';
                        break;
                    
                    case 'wink':
                        echo '<img class ="img-eyes" src="img/z-eyes-wink.png">';
                        break;

                    case 'angry':
                        echo '<img class ="img-eyes" src="img/z-eyes-angry.png">';
                        break;
                    
                    case 'oof':
                        echo '<img class ="img-eyes" src="img/z-eyes-oof.png">';
                        break;
                    
                    default: // if url doesn't match the presets, display the default
                        echo '<img class ="img-eyes" src="img/z-eyes-dot.png">';
                        break;
                }
            } else { // if nothing is found in the url, display the default
                echo '<img class ="img-eyes" src="img/z-eyes-dot.png">';
            }
        ?>

        <?php 
            // if 'mouth=x' is appended to the url, display an image of the matching mouth
            if (isset($_GET['mouth'])){
                switch ($_GET['mouth']) {
                    case 'open':
                        echo '<img class ="img-mouth" src="img/z-mouth-open.png">';
                        break;
                    
                    case 'closed':
                        echo '<img class ="img-mouth" src="img/z-mouth-closed.png">';
                        break;

                    case 'smile':
                        echo '<img class ="img-mouth" src="img/z-mouth-smile.png">';
                        break;

                    case 'tongue':
                        echo '<img class ="img-mouth" src="img/z-mouth-tongue.png">';
                        break;
                    
                    default: // if url doesn't match the presets, display the default
                        echo '<img class ="img-mouth" src="img/z-mouth-closed.png">';
                        break;
                }
            } else { // if nothing is found in the url, display the default
                echo '<img class ="img-mouth" src="img/z-mouth-closed.png">';
            }
        ?>
        <div>
            <?php 
                ///// CHANGE BACKGROUND COLOR /////
               // if the input matches one of the preset listed colors, add it to the css
                if (isset($_GET['bgcolor'])){
                    if ($_GET['bgcolor'] == 'crimson' || $_GET['bgcolor'] == 'orange' || $_GET['bgcolor'] == 'lightyellow' || $_GET['bgcolor'] == 'forestgreen' || $_GET['bgcolor'] == 'lightgreen' || $_GET['bgcolor'] == 'blueviolet' || $_GET['bgcolor'] == 'teal' || $_GET['bgcolor'] == 'silver'){
                        echo '<style>.main-frame {background-color: ' . $_GET['bgcolor'] . ';}</style>';
                    } else {
                        // check to see if a valid 6-character color hex value is inputted by converting to decimal value
                        // if yes, add it to the css
                        if (strlen($_GET['bgcolor']) == 6 && hexdec($_GET['bgcolor']) <= 16777215){
                                echo '<style>.main-frame {background-color: #' . $_GET['bgcolor'] . ';}</style>';
                            } else {
                                echo '<style>.main-frame {background-color: ' . $_GET['bgcolor'] . ';}</style>';
                            }
                        } 
                    } else {
                    echo '';
                }
                
            ?>
        </div>
        <div>
            <?php 
            ///// CHANGE BORDER STYLE /////
            if (isset($_GET['border'])){
                if ($_GET['border'] == 'dotted' || $_GET['border'] == 'dashed' || $_GET['border'] == 'solid' || $_GET['border'] == 'double' ){
                    echo '<style>.main-frame {border-style: ' . $_GET['border'] . ';}</style>';
                }
            } else {
                echo '';
            }
            ?>
        </div>
        <div>
            <?php 
            ///// CHANGE BORDER WIDTH /////
            if (isset($_GET['borderwidth'])){
                if ($_GET['borderwidth'] == 'thin' || $_GET['borderwidth'] == 'medium' || $_GET['borderwidth'] == 'thick' ){
                    echo '<style>.main-frame {border-width: ' . $_GET['borderwidth'] . ';}</style>';
                }
            } else {
                echo '';
            }
            ?>
        </div>

</div>
<?php require 'inc/footer.php';?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>