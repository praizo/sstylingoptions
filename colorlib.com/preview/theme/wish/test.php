<?php
    require("designs.php");
    require("user.php");
    $s = new Design;
    $r = new User;

    // $firstname ="ad//";
    // $lastname = "a";
    // $businessName = "";
    // $email = "";
    // $pwd = "";
    // $phone = "";
    // $location = "";

    // $str = "!@#";

    // $name = 'aa de ';
    // if(filter_var($value01,FILTER_VALIDATE_INT)) {
    //     echo 'TRUE';
    // } else {
    //     echo 'FALSE';
    // }
    // $msgerr = [];

    $a =3;
    $b = 2;
    $c = 3;

    if ($a == ($b or $c)) {
        echo true;
    }


    // $name = test_input($_POST["name"]);
    // if (preg_match("/^[a-zA-Z0-9 ]*$/",$firstname) and !empty(trim($firstname))) {
    //     $msgerr[] = "true";
    //     var_dump($msgerr);


    // }else {
    //     $msgerr[] = "false";
    //     var_dump($msgerr);


    // }
    // if (preg_match("/^[a-zA-Z0-9 ]*$/",$lastname) and !empty(trim($lastname))) {
    //     $msgerr = "Only firstname are allowed";

    // }else {
    //     $msgerr[]= "Only lastname are allowed";

    // }


    // if (!empty($msgerr)) {
    //     var_dump($msgerr);
    // }



    // stripslashes($data);

    //echo preg_match('/[A-Za-z0-9\-]/', $str);

    // if (!empty(trim(htmlentities( $firstname)))) {
    //     $firstname = (trim(htmlentities( $firstname)));
    // }

    // $lastname = trim(htmlentities( $_POST['lname']));
    // $businessName = trim(htmlentities( $_POST['businessName']));
    // $email = trim(htmlentities( $_POST['email']));
    // $pwd = trim(htmlentities($_POST['pwd1']));
    // $phone = trim(htmlentities($_POST['phoneNo']));
    // $location = trim(htmlentities($_POST['location']));

    // $r-> signup($firstname,$lastname,$businessName, $pwd, $email, $phone, $location);




?>