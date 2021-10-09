<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="views/assets/stylesheets/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Preview Didier Motte</title>
    </head>
    <body>
        <?php 
            // define('VIEWS', 'views/');
            // define('CONTROLLERS', 'controllers/');

            $action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'home';

            require "controllers/controle.php"; 
        ?>
    </body>
</html>