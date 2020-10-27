<?php

if ($_POST) {
    require("user.php");
    $obj = new User;


    $firstname = trim(htmlentities( $_POST['fname']));
    $lastname = trim(htmlentities( $_POST['lname']));
    $businessName = trim(htmlentities( $_POST['businessName']));
    $email = trim(htmlentities( $_POST['email']));
    $pwd = trim(htmlentities($_POST['pwd1']));
    $phone = trim(htmlentities($_POST['phoneNo']));
    $location = trim(htmlentities($_POST['location']));

    $msgerr = [];

    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$firstname) and !empty($firstname)) {
        $msgerr[] = "Only firstname are allowed";
        header("location: index.php?signup=failFname");
    }

    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lastname) and !empty($lastname)) {
        $msgerr[] = "Only lettlastnameers and allowed";
        header("location: index.php?signup=failLname");
    }

    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$businessName) and !empty($businessName)) {
        $msgerr[] = "Only businessName and allowed";
        header("location: index.php?signup=failBus");
    }
    
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$location) and !empty($location)) {
        $msgerr[] = "Only location and allowed";
        header("location: index.php?signup=failLocation");
    }


    if (empty($msgerr)) {

        $obj-> signup($firstname,$lastname,$businessName, $pwd, $email, $phone, $location);
    }


}






?>