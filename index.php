<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--link to bootstrap cdn-->
        <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/bootstrap-float-label/v4.0.0/dist/bootstrap-float-label.min.css"/>
        <!--link to bootstrap floating labels-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC|Montserrat|Open+Sans">
        <!--direct link to google fonts-->
        <link rel="stylesheet" href="views/css/styles.css">
        <!--link to internal style sheet-->
        <title>Final Project Blog</title>
    </head>
    <body>
        <?php
    require_once('connection.php');
        
    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action     = $_GET['action'];
  } else {
        $controller = 'pages';
        $action     = 'home';
  }

    require_once('views/layout.php');
        ?>
    </body>
</html>