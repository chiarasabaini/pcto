<?php
    $imgText = $_REQUEST['imgText'];
    
    switch ($imgText){
        case "Hover 0":
            echo "Hover 1";
            break;
        case "Hover 1":
            echo "Hover 0";
            break;
        default:
            echo "Hover 0";
            break;
    }
?>