<!DOCTYPE html>
<html>
    <!--
    @author: Sabaini Chiara
    @version: 01.01
    @date: 2021-03-22
    -->
   <head>
        <title>
            HOME
        </title>
        <meta charset="UTF-8">
        <meta na me="viewport" content="width=device-width, initial-scale=1.0">
        <!--stylesheet-->
        <link rel="stylesheet" type="text/css" href="./res/css/style.css">
        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
        <div class="row">
            <div class="col-12 alert-success">
                <p id="sizeBanner"></p>
            </div>
        </div>
        <div class="row">
            <div id="imgBanner" class="col-4 alert-success">
                <p id="imgText"></p>
            </div>
            <div id="canvas-container" class="col-4 alert-success">
                <canvas id="canvas" width="150" height="150"></canvas>
                <button id="btn-canvas" class="btn-foreground btn red-btn"></button>
            </div>
            <div class="col-4 alert-success">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-4">
                <div class="card">
                    <img src="./res/img/product.jpg" id="productImg" class="card-img-top" alt="product image">

                    <div class="card-body">
                        <h3 class="card-title">Product title</h3>
                        <h5 class="card-title">Product subtitle</h5>
                        <p class="card-text">
                            Brief product description.<br>
                            Sit aliqua consequat fugiat id ipsum. Velit velit incididunt excepteur tempor enim incididunt sit. Nostrud nostrud mollit laborum magna aliqua pariatur do amet.
                        </p>

                        <div class="alert alert-success">
                            €121.00
                        </div>
                        <select id="size" name="sizes" class="form-select" onChange=selectSize()>
                            <option selected>Select size here</option>
                            <option>XL</option>
                            <option>L</option>
                            <option>M</option>
                            <option>S</option>
                            <option>XS</option>
                        </select>
                        <div class="row">
                            <div class="col-4">
                            </div>
                            <div class="col-4">
                                <button id="buyBtn" class="btn btn-primary">Buy now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <footer>
            <hr>
            <blockquote>"et vivere, reservate"</blockquote>
            Website made with ♡ by <a href="https://github.com/chiarasabaini" target="_blank">Sabaini Chiara</a> | © 2021-<?php echo date("Y");?>
        </footer>

        <!--script, included at the end 'cause it uses DOM's elements-->
        <script src="./res/script/script.js"></script>
</html>