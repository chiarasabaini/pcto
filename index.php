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
        <header>
            <nav>
                <div id="logo-wrapper">
                    <img id="logo" src="./res/img/logo.png" alt="logo">
                </div>
                <div id="container-head">
                    <h1>Hello, world!</h1>
                </div>
            </nav>
        </header>

        <div id="content">
            <div class="daily">
                    <h3>2021-03-08</h3>
                    <ul id="2021-03-08">
                        <li>Installazione XAMPP e setup webserver</li>
                        <br>
                        <?php
                            echo "<li>Introduzione al php:</li>"
                        ?>
                        <ul>
                            <li>
                                <?php
                                    echo "hello, world!<br>";
                                ?>
                                <code>
                                    < ?php echo "hello, world!"; ?>
                                </code>
                            </li>
                            <br>
                            <li>
                                form<br>
                                <?php
                                    // define variables and set to empty values
                                    $a = $n = "";

                                    if (empty($_POST["a"])) {
                                        $a = "";
                                    } else {
                                        $a = test_input($_POST["a"]);
                                    }

                                    if (empty($_POST["n"])) {
                                        $n = "";
                                    } else {
                                        $n = test_input($_POST["n"]);
                                    }

                                    // use this function to avoid injections
                                    function test_input($data) {
                                        $data = trim($data);
                                        $data = stripslashes($data);
                                        $data = htmlspecialchars($data);
                                        return $data;
                                    }
                                ?>
                                <form action="index.php" method="POST">
                                    <input type="text" name="a" placeholder="Insert text here">
                                    <br>
                                    <input type="radio" name="n" value="1">1
                                    <input type="radio" name="n" value="2">2
                                    <input type="radio" name="n" value="3">3
                                    <br>
                                    <button type="submit" class="btn">submit</button>
                                </form>
                                <?php
                                    echo "your input:<br>";
                                    echo $a;
                                    echo "<br>";
                                    echo $n;
                                ?>
                            </li>
                            <br>
                            <li>
                                date()
                                <br>
                                <?php
                                    echo "Today is " . date("l Y-m-d H:i:s") . "<br>";
                                ?>
                            </li>
                            <br>
                            <li>
                                cookies<br>
                                <?php
                                    if(!isset($_COOKIE[$cookie_name])) {
                                        echo "Cookie named '" . $cookie_name . "' is not set!";
                                    } else {
                                        echo "Cookie '" . $cookie_name . "' is set!<br>";
                                        echo "Value is: " . $_COOKIE[$cookie_name];
                                    }
                                ?>
                            </li>
                        </ul>
                    </ul>
            </div>
            <div class="daily">
                <h3>2021-03-05</h3>
                <ul id="2021-03-05">
                    <li>Introduzione eventi js:
                        <ul>
                            <li>click, occurs when an element is clicked:<br>
                                <code>$(".btn").click(function(){count_clicks++;})</code><br>
                                <span id="click">0</span> clicks on the purple button
                                <button class="btn" id="purple-btn">click</button>
                            </li>
                            <br>
                            <li>double click, occurs when an element is double-clicked:<br>
                                <code>$(".btn").dblclick(function(){count_dblclicks++;})</code><br>
                                <span id="dblclick">0</span> double clicks on the red button
                                <button class="btn" id="red-btn">click</button>
                            </li>
                            <br>
                            <li>
                                resize, occurs when the browser window changes size:<br>
                                <code>$(window).resize(function(){count_resize++;})</code><br>
                                <span id="resize">0</span> resizings
                            </li>
                            <br>
                            <li>
                                scroll, occurs when the user scrolls in the specified element:<br>
                                <code>$(window).scroll(function(){count_scrolls++;})</code><br>
                                <span id="scroll">0</span> scrolls
                            </li>
                            <br>
                            <li>
                                mouseover, only triggers when the mouse pointer enters the selected element:<br>
                                <code>$("#2021-03-05").mouseover(function(){count_over++;})</code><br>
                                <span id="m-over">0</span> mouse overs on this list
                            </li>
                            <br>
                            <li>
                                mouseenter, triggers if a mouse pointer enters any child elements as well as the selected element:<br>
                                <code>$(".daily").mouseenter(function(){count_enter++;})</code><br>
                                <span id="m-enter">0</span> mouse entry in this area
                            </li>
                            <br>
                            <li>
                                mouseout, triggered if a mouse pointer leaves any child elements as well as the selected element:<br>
                                <code>$("#2021-03-05").mouseout(function(){count_out++;})</code><br>
                                <span id="m-out">0</span> mouse outs on this list
                            </li>
                            <br>
                            <li>
                                mouseleave, only triggers when the mouse pointer leaves the selected elements:<br>
                                <code>$(".daily").mouseleave(function(){count_leave++;})</code><br>
                                <span id="m-leave">0</span> mouse lefts in this area
                            </li>
                        </ul>
                    </li>
                    <br>
                    <li>Introduzione delle basi di javascript e jquery</li>
                </ul>
            </div>
            <div class="daily">
                <h3>2021-03-03</h3>
                <ul>
                    <li>Presentazione generale del progetto</li>
                    <li>Introduzione delle basi di javascript e jquery</li>
                </ul>
            </div>
        </div>

        <footer>
            <hr>
            <blockquote>"et vivere, reservate"</blockquote>
            Website made with ♡ by <a href="https://github.com/chiarasabaini" target="_blank">Sabaini Chiara</a> | © 2021-<?php echo date("Y");?>
        </footer>

        <!--script, included at the end 'cause it uses DOM's elements-->
        <script src="res/script/script.js"></script>
    </body>
</html>