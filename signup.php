<!DOCTYPE html>
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
        <!--icons&fonts-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--script, included at the beginning 'cause it doesn't use DOM's elements-->
    </head>
<body>
    <div id="content">
        <form action="registration.php" method="POST">
            Email:   <input type="text" name="email" placeholder="Insert email here" required>
            <br>
            <br>
            Name:   <input type="text" name="name" placeholder="Insert name here" required>
            <br>
            <br>
            Surname:    <input type="text" name="surname" placeholder="Insert surname here" required>
            <br>
            <br>
            Password:   <input type="text" name="password" placeholder="Insert password here" required>
            <br>
            <br>
            <input type="radio" name="privacy" required>privacy</input>
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>