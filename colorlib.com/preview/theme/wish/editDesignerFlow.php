<?php 
    require("user.php");
    $obj = new User;

    
    if ($_POST) {
        
        // print_r($_POST);

        $fname = trim(htmlentities($_POST['fname']));
        $lname = trim(htmlentities($_POST['lname']));
        $email = trim(htmlentities($_POST['designerEmail']));
        $phone = trim(htmlentities($_POST['phoneNo']));
        $location = trim(htmlentities($_POST['designerLocation']));
        $businessName = trim(htmlentities($_POST['businessName']));
        $fdesignerid = trim(htmlentities($_POST['designerid']));
    
        $obj-> editProfile($_FILES, $fname, $lname,$email, $phone, $location, $fdesignerid, $businessName);


    } else {
        header("location: designer.php");
    }


?>