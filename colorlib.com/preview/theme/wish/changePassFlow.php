<?php 
    require("user.php");
    $obj = new User;

    if ($_POST) {
        
        $oldpwd = trim(htmlentities($_POST['oldPass']));
        $newpwd = trim(htmlentities($_POST['newPass']));

        $fdesignerid = trim(htmlentities($_POST['designerid']));
    
        $obj-> changePassword($fdesignerid,$oldpwd,$newpwd);

    } else {
        header("location: designer.php");
    }


?>