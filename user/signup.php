<?php

    session_start();

    include 'dbconfig.php';

    $error = "";

    if (array_key_exists('signup', $_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_pass = $_POST['re_pass'];
        $terms = $_POST['agree_term'];

        
    }

    function password_and_terms($password, $re_pass, $terms) {
        if ($password != $re_pass) {
            $error .= "*password does not match<br>";
        } else {
            if ()
        }
    }

?>