<?php 
    $val1 = $_REQUEST['val1'];
    $val2 = $_REQUEST['val2'];
    $name = $_REQUEST['name'];
    $city = $_REQUEST['city'];
    $btn = $_REQUEST['btn'];
    
    switch ($btn){
        case "btn0":
            echo "Value 1: $val1<br>Value 2: $val2";
            break;

        case "btn1":
            echo "Hi $name! Welcome to $city";
            break;
        
        case "btn2":
            echo '"background-color" , "#69EEA5 !important"';
            break;

        default:
            break;
    }
?>