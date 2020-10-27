<?php

require("utilityUser.php");

class User extends utilityUser 
{
    function signup($firstname,$lastname,$businessName, $pwd, $email, $phone, $location)
    {
        $sql_e = "SELECT fdesigner_email FROM fashiondesigners WHERE fdesigner_email = '$email'";
        $sql_u = "SELECT fdesigner_brandname FROM fashiondesigners WHERE fdesigner_brandname = '$businessName'";

        $result_e = $this->conn->query($sql_e);
        $result_u = $this->conn->query($sql_u);
        

        if ($result_e->num_rows == 1) {

            header("location: index.php?esignup=fail");

        } else if ($result_u->num_rows == 1) {

            header("location: index.php?nsignup=fail");

        } else {
            $sql= "INSERT INTO fashiondesigners SET
                    fdesigner_fname = '$firstname',
                    fdesigner_lname= '$lastname',
                    fdesigner_brandname = '$businessName',
                    fdesigner_pwd = '$pwd',
                    fdesigner_email = '$email',
                    fdesigner_phone = '$phone',
                    fdesigner_location = '$location'"; 

            $this->conn->query($sql);


            $id = $this->conn->insert_id;
            

            $_SESSION['designer'] = $id;
            header("location:designer.php");
        }
            
    }

    function getDetails( $designerid)
    {
        $sql = "SELECT * FROM fashiondesigners WHERE fdesigner_id = '$designerid' LIMIT 1";
        $result = $this->conn->query($sql);

        $row = [];
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } 
            
        return $row;
        
    }

    function signin($pwd, $email)
    {
        $sql= "SELECT * FROM fashiondesigners WHERE fdesigner_pwd = '$pwd' AND fdesigner_email = '$email' LIMIT 1";

        $result = $this->conn->query($sql);
        $deets=[];

        if ($result->num_rows == 1) { //==1 valid details
            $deets = $result->fetch_assoc();
            $_SESSION['designer'] = $deets['fdesigner_id'];
            

            header("location: designer.php");
            
        } else {
            header("location: index.php?login=fail");
        }
	}
    

    function editProfile($file_array, $fname, $lname,$email, $phone, $location, $fdesignerid, $businessName)
    {
        $tmp_location = $file_array['signage']['tmp_name'];
        $original = $file_array['signage']['name'];
        $dst = "designerupload/$original";
        move_uploaded_file($tmp_location, $dst);


        if($original != ""){

            $sql_e = "SELECT fdesigner_email FROM fashiondesigners WHERE fdesigner_email = '$email' AND fdesigner_id <> '$fdesignerid'";
            $sql_u = "SELECT fdesigner_brandname FROM fashiondesigners WHERE fdesigner_brandname = '$businessName' AND fdesigner_id <> '$fdesignerid'";

            $result_e = $this->conn->query($sql_e);
            $result_u = $this->conn->query($sql_u);
            

            if ($result_e->num_rows == 1) {

                header("location: editDesigner.php?id=$fdesignerid&estatus=fail");

            } else if ($result_u->num_rows == 1) {

                header("location: editDesigner.php?id=$fdesignerid&estatus=fail");

            } else {
                $sql = "UPDATE fashiondesigners SET
                        fdesigner_fname = '$fname',
                        fdesigner_lname= '$lname',
                        fdesigner_email = '$email',
                        fdesigner_phone = '$phone',
                        fdesigner_location = '$location',
                        fdesigner_brandname = '$businessName',
                        fdesigner_signage = '$original'
                        WHERE fdesigner_id = '$fdesignerid'"; 
            
            
                $result = $this->conn->query($sql);

                if ($this->conn->affected_rows>=0) {
                    header("location:editDesigner.php?id=$fdesignerid&estatus=success" );
                } else {
                    header("location:editDesigner.php?id=$fdesignerid&estatus=fail" );
                }
            }
        } else {

            $sql_e = "SELECT fdesigner_email FROM fashiondesigners WHERE fdesigner_email = '$email' AND fdesigner_id <> '$fdesignerid'";
            $sql_u = "SELECT fdesigner_brandname FROM fashiondesigners WHERE fdesigner_brandname = '$businessName' AND fdesigner_id <> '$fdesignerid'";

            $result_e = $this->conn->query($sql_e);
            $result_u = $this->conn->query($sql_u);
            

            if ($result_e->num_rows == 1) {

                header("location: editDesigner.php?id=$fdesignerid&estatus=fail");

            } else if ($result_u->num_rows == 1) {

                header("location: editDesigner.php?id=$fdesignerid&estatus=fail");

            } else {
            
                $sql = "UPDATE fashiondesigners SET
                        fdesigner_fname = '$fname',
                        fdesigner_lname= '$lname',
                        fdesigner_email = '$email',
                        fdesigner_phone = '$phone',
                        fdesigner_location = '$location',
                        fdesigner_brandname = '$businessName'
                        WHERE fdesigner_id = '$fdesignerid'"; 
            
            
                $result = $this->conn->query($sql);
                if ($this->conn->affected_rows>=0) {
                    header("location:editDesigner.php?id=$fdesignerid&estatus=success" );
                } else {
                    header("location:editDesigner.php?id=$fdesignerid&estatus=fail");
                }
            }
        }
        
        
    }


    function changePassword($fdesigner_id, $oldpwd, $newpwd)
    {
        if ($oldpwd != "" and $newpwd != "") {

            $sql = "UPDATE fashiondesigners SET fdesigner_pwd = '$newpwd' WHERE fdesigner_id = '$fdesigner_id' AND fdesigner_pwd = '$oldpwd'"; 
            
            $result = $this->conn->query($sql);
            
            print_r($result);

            if ($this->conn->affected_rows>=1) {
                header("location:editDesigner.php?id=$fdesigner_id&pstatus=success" );
            } else {
                header("location:editDesigner.php?id=$fdesigner_id&pstatus=fail");
            }
        } else {
                // header("location:editDesigner.php?pstatus=fail");
            }            
    }   
    
}

?>