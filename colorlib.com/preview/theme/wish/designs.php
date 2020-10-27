<?php

    class Design 
    {
        protected $conn;			
        function __construct()
        {
            $this->conn = new Mysqli('localhost','root','','chidesigns');
        }

        function createDesign($filearray, $designDesc, $fdesignerid, $designcatid)
        {
            $sql = "INSERT INTO fashiondesigns SET fdesigns_description = '$designDesc', fdesigners_id ='$fdesignerid', designcat_id = '$designcatid'  ";

			$this->conn->query($sql);
			$id = $this->conn->insert_id;
			$photo= [];

            if ($id >0) {
			
                $x= 0;
                foreach($filearray['designPic']['name'] as $key=>$picturename){

                    
                    $picturelocation = $_FILES['designPic']['tmp_name'][$key];
                    $picture_size = $_FILES['designPic']['size'][$key];
    
                    $allowed_extensions = array('jpg','png','jpeg');
                    $extension = @end(explode('.',$picturename)); 
                    $error = array();
                    if(!in_array($extension, $allowed_extensions)){
                        $error[] = "This extension is not allowed";
                    }
                    // if($picture_size > 100000){ 
                    //     $error[] = "File is too large";
					// }
					
                    if(empty($error)){
                        $newname = time().$x++.".".$extension;
						$dst = "designUpload/".$newname;
						move_uploaded_file($picturelocation, $dst);

						$photo[] = $newname;
						
					}
					
				}  
				
				
				$sql2= "UPDATE fashiondesigns SET photo1= '$photo[0]', photo2= '$photo[1]', photo3= '$photo[2]'  WHERE fdesigns_id = $id";
				$result2 = $this->conn->query($sql2);
				$id1 = $this->conn->insert_id;
				if ($this->conn->affected_rows>=1) {
					header("location:designer.php" );
				} else {
					// header("location:designer.php?id='$custid'&status=fail" );
				}
					// }

				
            }


        }
        function editCard($filearray, $fdesignid, $deletecard)
        {        
				
                $x= 0;
                foreach($filearray['designPic']['name'] as $key=>$picturename){

                    
                    $picturelocation = $_FILES['designPic']['tmp_name'][$key];
                    $picture_size = $_FILES['designPic']['size'][$key];
    
                    $allowed_extensions = array('jpg','png','jpeg');
                    $extension = @end(explode('.',$picturename)); 
                    $error = array();
                    if(!in_array($extension, $allowed_extensions)){
                        $error[] = "This extension is not allowed";
                    }
                    // if($picture_size > 100000){ 
                    //     $error[] = "File is too large";
					// }
					
                    if(empty($error)){
                        $newname = time().$x++.".".$extension;
						$dst = "designUpload/".$newname;
						move_uploaded_file($picturelocation, $dst);

						$photo[] = $newname;
						
					}
					
				}  

				
				if (!empty($photo)) {
					$sql2= "UPDATE fashiondesigns SET photo1= '$photo[0]', photo2= '$photo[1]', photo3= '$photo[2]'  WHERE fdesigns_id = $fdesignid";
					$this->conn->query($sql2);
					$id1 = $this->conn->insert_id;
					
					if ($this->conn->affected_rows>=1) {
						header("location:designer.php" );
					} else {
						// header("location:designer.php?id='$custid'&status=fail" );
					}
					
				} else {
					header("location:designer.php" );

				}

				if ($deletecard == 1) {
					$sql3= "DELETE FROM fashiondesigns WHERE fdesigns_id = $fdesignid";
					$this->conn->query($sql3);				
				}
			
        }

        function getCategory()
		{
			$sql = "SELECT * FROM designcategory";
			$result = $this->conn->query($sql);
			$items = [];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
						$items[] = $row;
				}
			} 			
			return $items;
        }
        
        function displayDesigns($fdesigners_id,$designcat_id)
		{

			$sql = "SELECT  fashiondesigns.designcat_id, designcategory.designcat_name, fashiondesigners.fdesigner_location, fashiondesigners.fdesigner_phone, fashiondesigners.fdesigner_brandname, fashiondesigns.fdesigns_id,  fashiondesigns.photo1, fashiondesigns.photo2, fashiondesigns.photo3
            FROM fashiondesigns 
            LEFT JOIN designcategory ON designcategory.designcat_id = fashiondesigns.designcat_id
            LEFT JOIN fashiondesigners ON fashiondesigners.fdesigner_id = fashiondesigns.fdesigners_id
            WHERE fashiondesigns.fdesigners_id = '$fdesigners_id' AND  fashiondesigns.designcat_id= $designcat_id";
			$result = $this->conn->query($sql);
			$items=[];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
						$items[] = $row;

				}
			} 
			return $items;			
		}
        
        function displayAllDesign($designcatid)
		{
			$sql = "SELECT * FROM 
					(SELECT  fashiondesigns.designcat_id, designcategory.designcat_name, fashiondesigners.fdesigner_location, fashiondesigners.fdesigner_brandname, fashiondesigners.fdesigner_phone, fashiondesigners.fdesigner_id, fashiondesigns.fdesigns_id, fashiondesigns.photo1, fashiondesigns.photo2, fashiondesigns.photo3
						FROM fashiondesigns 
						LEFT JOIN designcategory ON designcategory.designcat_id = fashiondesigns.designcat_id
						LEFT JOIN fashiondesigners ON fashiondesigners.fdesigner_id = fashiondesigns.fdesigners_id
						WHERE fashiondesigns.designcat_id= $designcatid
						LIMIT 6
					) as t
					GROUP BY fdesigner_id";
			$result = $this->conn->query($sql);
			$items=[];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
						$items[] = $row;

				}
			} 
			return $items;
        }

        

        function getGender()
		{
			$sql = "SELECT * FROM gender";
            $result = $this->conn->query($sql);
            
            $items = [];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
						$items[] = $row;
						
				}
				// print_r($items);
				
			} 
			
				
			return $items;
        
		}

		function getDesignCard($designid)
		{
			$sql = "SELECT * FROM fashiondesigns WHERE fdesigns_id ='$designid'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
			}	
			
			return $row;
		}


		function getdisplayCategory($designcatid)
		{
			$sql = "SELECT * FROM designcategory WHERE designcat_id ='$designcatid'";
			$result = $this->conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
			}	
			
			return $row;
		}
		
		function countCard($designerid, $designcatid)
		{
			$sql = "SELECT COUNT(*) as num FROM fashiondesigns	WHERE fdesigners_id = '$designerid' AND designcat_id = '$designcatid'";
			$result = $this->conn->query($sql);
			$row = $result->fetch_assoc();
			return $row;


		}
		
		function displayCategory($designcatid)
		{
			$limit = 12;
			$page = isset($_GET['page']) ? $_GET['page'] : 1;

			$start = ($page -1) * $limit;

			$sql = "SELECT * FROM 
					(SELECT  fashiondesigns.designcat_id, designcategory.designcat_name, fashiondesigners.fdesigner_location, fashiondesigners.fdesigner_id, fashiondesigners.fdesigner_brandname, fashiondesigners.fdesigner_phone, fashiondesigns.fdesigns_id, fashiondesigns.photo1, fashiondesigns.photo2, fashiondesigns.photo3
						FROM fashiondesigns 
						LEFT JOIN designcategory ON designcategory.designcat_id = fashiondesigns.designcat_id
						LEFT JOIN fashiondesigners ON fashiondesigners.fdesigner_id = fashiondesigns.fdesigners_id
						WHERE  fashiondesigns.designcat_id= '$designcatid'
						ORDER BY RAND()
					) as t
					GROUP BY fdesigner_id LIMIT $start, $limit";
            $result = $this->conn->query($sql);
            
            $items = [];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
					$items[] = $row;	
				}
				
			} 
			return $items;

		
		}


		function pagination($designcatid)
		{
			$limit = 12;

			$sql2 = "SELECT  COUNT(DISTINCT fdesigners_id) AS id FROM fashiondesigns  where designcat_id = '$designcatid'";
			$result2 = $this->conn->query($sql2);
			$row = $result2->fetch_assoc();

			$total = $row['id'];
			
			$pages = ceil($total / $limit);
			return $pages;
		}


		function search($keyword)
		{

			$searchResults = [];


			$sql = "SELECT * FROM fashiondesigners WHERE fdesigner_brandname LIKE '%$keyword%'";
			$result = $this->conn->query($sql);
            
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
					if (!empty($row)) {
						$searchResults[] = $row;
					}
				}
				
			} 

			$sql2 = "SELECT * FROM fashiondesigners WHERE fdesigner_location LIKE '%$keyword%'";
			$result2 = $this->conn->query($sql2);
            
			if ($result2->num_rows > 0) {
				while (  $row = $result2->fetch_assoc()) {
					if (!empty($row)) {
						$searchResults[] = $row;
					}
					
				}
				
				
			} 

			if (empty($searchResults)) {
				return "Item searched not available";
			} else {
				return $searchResults;
			}

		}

		function displaySearchResults($fdesigners_id)
		{
			$sql = "SELECT * FROM 
			(SELECT  fashiondesigners.fdesigner_id, fashiondesigners.fdesigner_location, fashiondesigners.fdesigner_phone, fashiondesigners.fdesigner_brandname, fashiondesigns.fdesigns_id,  fashiondesigns.photo1, fashiondesigns.photo2, fashiondesigns.photo3, fashiondesigns.designcat_id
				FROM fashiondesigns 
				LEFT JOIN fashiondesigners ON fashiondesigners.fdesigner_id = fashiondesigns.fdesigners_id
				WHERE fdesigners_id = '$fdesigners_id'
				LIMIT 1
			) as t
			GROUP BY designcat_id";
			
			
			$result = $this->conn->query($sql);


			
			
			
			$items = [];
			if ($result->num_rows > 0) {
				while (  $row = $result->fetch_assoc()) {
					$items[] = $row;	
				}
			
			} 
			return $items;
		
		
		}

		
    }



?>