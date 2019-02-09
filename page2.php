<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Z Creature Creator</title>
</head>
<body>
<div class="frame-container">
    <div class="main-frame">
        <img class ="img-bg" src="img/z-base.png">

        <?php 
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
                        echo '<img class ="img-body" src="img/z-body-cat.png">';
                        break;
                }
            } else { // if nothing is found in the url, display the default
                echo '<img class ="img-body" src="img/z-body-cat.png">';
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

    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>