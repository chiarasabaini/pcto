<?php
    if(isset($_REQUEST['imgText'])){
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
    }

    if(isset($_REQUEST['size'])){
        $size = $_REQUEST['size'];
        echo $size;
    }
?>