<!DOCTYPE html>
<!--cookie-->
<?php
    $cookie_name = "user";
    $cookie_value = "username";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400s = 1 day
?>
<html>
    <!--
    @author: Sabaini Chiara
    @version: 01.01
    @date: 2021-03-01
    -->
    <head>
        <title>
            HOME
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--stylesheet-->
        <link rel="stylesheet" type="text/css" href="./res/css/style.css">
        <!--favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
        <!--icons&fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--script, included at the beginning 'cause it doesn't use DOM's elements-->
    </head>
    <body>
        <div id="content">
    </body>
</html>