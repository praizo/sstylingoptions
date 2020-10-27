<?php 
    require("designs.php");
    $obj = new Design;

    
    if ($_POST) {
        

        // echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES);
        // echo "</pre>";
    
        $fdesignerid = trim(htmlentities($_POST['fdesignerid']));
        $designDesc = trim(htmlentities($_POST['designDesc']));
        $designcatid = trim(htmlentities($_POST['designcatid']));
        $filearray = $_FILES;
        $obj->createDesign($filearray, $designDesc, $fdesignerid, $designcatid);


    } else {
        header("location: designer.php");
    }


?>