<?php 
    require("designs.php");
    $obj = new Design;

    
    if ($_POST) {
        

    
        $fdesignid = trim(htmlentities($_POST['fdesignid']));
        $deletecard = trim(htmlentities($_POST['deletecard']));
        $obj-> editCard($_FILES, $fdesignid, $deletecard);


    } else {
        header("location: designer.php");
    }


?>