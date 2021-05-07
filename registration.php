<?php
$email = $name = $surname = $password = $privacy = "";
function valid_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"])) {
        $email = $_REQUEST['email'];
        if(valid_email($email)) {
            if(strpos(file_get_contents("./users.csv"), $email) !== false) {
                $row = '"'.$email.'";"'.$name.'";"'.$surname.'";"'.$password.'";"'.$privacy.'"\n';
                file_put_contents("test.txt", $row);
            } else {
                echo "this email already exists";
            }
        } else {
            echo "invalid email";
        }
    }

    if (!empty($_POST["name"])) {
        $name = $_REQUEST['name'];
    }

    if (!empty($_POST["surname"])) {
        $surname = $_REQUEST['surname'];
    }

    if (!empty($_POST["password"])) {
        $password = $_REQUEST['password'];
    }

    if (!empty($_POST["privacy"])) {
        $privacy = $_REQUEST['privacy'];
    }
}
?>