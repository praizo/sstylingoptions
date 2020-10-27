<?php


require("user.php");
require("designs.php");

$r = new User;
$s = new Design;

if  (isset($_SESSION['designer']) and (!isset($_GET['id']))) {
    $details = $r->getDetails($_SESSION['designer']);

}else if (isset($_GET['id'])){
    $details = $r->getDetails($_GET['id']);

}else {
    header("location: index.php");

}

$genders = $s->getGender();
$categories= $s->getCategory();

?> 

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Hot 9jaStyles</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wish shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    


</head>
<body>
        <div class="super_container" style="background-color:#f6f8f7;">

            <header class="header">
                <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                <div class="logo" >
                        <a href="index.php" style="color:#90007F; font-size: 22px; text-decoration: none;">Hot<br>9jaStyles</a>
                        
                    </div>
                    <div style="padding-left: 10px; width: 215px" id="hack">
                        <form action="result.php" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Search" placeholder="location or brandname" name="keyword" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>     
                        </form>
                    </div>
                    <div id="hack2">
                        <?php if (isset($_SESSION['designer'] )) { ?>
                            <div class="dropdown">
                                <button style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);" class="btn dropdown-toggle" type="button" id="dropMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo "Hi ". ($details['fdesigner_fname']) ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropMenuButton">
                                    <a class="dropdown-item" href="designer.php">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Log out</a>
                                </div>
                            </div>                                
                        <?php }else{?> 
                            <button style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);" class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" >Login / Sign Up</button>
                        <?php }?>
                    </div>
                    <nav class="main_nav">
                        <ul>
                            <li><a href="owambe.php">OWAMBE</a></li>
                            <li><a href="casual.php">CASUAL</a></li>
                            <li><a href="formal.php">FORMAL</a></li>
                            <li><a href="bridal.php">BRIDAL</a></li>
                            <li><a href="babies.php">BABIES</a></li>
                            <li><a href="jumpsuits.php">JUMP SUITS</a></li>
                            <li>
                                <form action="result.php" method="POST">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Search" placeholder="location or brandname" name="keyword" required>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-outline-secondary">Search</button>
                                        </div>
                                    </div>     
                                </form>                                                
                            </li>
                            <li>
                                <?php if (isset($_SESSION['designer'] )) { ?>
                                    <div class="btn-group">
                                        <button style="background-color: #90007F; color: #fff;" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        
                                        <?php 
                                            if  (isset($_SESSION['designer'])) {
                                                $deets = $r->getDetails($_SESSION['designer']);
                                                echo "Hi ". ($deets['fdesigner_fname']);
                                            }
                                        ?>
                                        </button>
                                        <div class="dropdown-menu">
                                            
                                            <a class="dropdown-item" href="designer.php">My Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="logout.php">Log out</a>
                                        </div>
                                    </div>                                 
                                <?php }else{?> 
                                    <button type="button" style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);" class="btn btn-outline-dark" type="button" data-toggle="modal" data-target="#exampleModalCenter" >Login / Sign Up</button>
                                <?php }?>    
                            </li>
                        </ul>
                    </nav>
                    
                    <div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
                </div>
            </header>
            <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
                <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
                <div class="logo menu_mm">
                    <a href="#" style="color:#90007F; font-size: 25px;">Hot<br>9jaStyles</a>
                </div>
                
                <nav class="menu_nav">
                    <ul class="menu_mm">
                        <li><a href="owambe.php">OWAMBE</a></li>
                        <li><a href="casual.php">CASUAL</a></li>
                        <li><a href="formal.php">FORMAL</a></li>
                        <li><a href="bridal.php">BRIDAL</a></li>
                        <li><a href="babies.php">BABIES</a></li>
                        <li><a href="jumpsuits.php">JUMP SUITS</a></li>
                        
                        <li>
                            <?php if (isset($_SESSION['designer'] )) { ?>
                                <div class="dropdown">
                                    <button style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);" class="btn dropdown-toggle" type="button" id="dropMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php 
                                            if  (isset($_SESSION['designer'])) {
                                                $deets = $r->getDetails($_SESSION['designer']);
                                                echo "Hi ". ($deets['fdesigner_fname']);
                                            }
                                        ?>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropMenuButton">
                                        
                                        <a class="dropdown-item" href="designer.php">My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php">Log out</a>
                                    </div>
                                </div>                                
                            <?php }else{?> 
                                <button style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);" class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" >Login / Sign Up</button>
                            <?php }?>    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div style="height:100px; background-color: white;">
            
        </div>
        <div class="container-fluid px-0 ">
            <div class="row mx-0">
                <div class="col-12 img-fluid position-relative" id="overlay" style=" background-image:linear-gradient(to left, rgba(31, 23, 23, 0.01), rgba(14, 12, 12, 0.384), rgb(26, 24, 24)), url(designerUpload/<?php echo $details['fdesigner_signage'];?>);">
                    <div class="mr-auto" style="margin: 8rem 0px;">
                        <p class="text-white h2 font-weight-bold "><?php echo $details['fdesigner_brandname'];?></p>
                    </div> 
                    <?php 
                        if ((!isset($_GET['id'])) || (($_GET['id']) == $_SESSION['designer']) ){ ?>
                            <a href="editDesigner.php?id=<?php echo $_SESSION['designer'] ;?>"class="btn position-absolute" style="right: 10px; bottom: 20px; background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);">Edit Profile</a>
                    <?php }  ?>            
                
                </div>
            </div>

            <div class="row mt-3 mx-0">
                <div class="col-12">
                    <?php      
                        $categories= $s->getCategory();
                        foreach ($categories as $key => $category) {
                    ?>
                    <div class="row px-2 ">
                        <div class="col-12  text-white p-3 rounded h4 text-center" style="background-color: #90007F;">
                            <?php echo ($category['designcat_name']) ?>
                        </div>
                        <div class="col-12 ">
                            <section class="product-section my-2">
                                <div class="container ">
                                    <div class="row" id="product-filter">
                                    <?php   
                                        if (isset($_SESSION['designer']) and (!isset($_GET['id']))) {
                                            $designs= $s->displayDesigns($_SESSION['designer'],$category['designcat_id']  );
                                    
                                        } else if (isset($_GET['id'])){
                                            $designs= $s->displayDesigns($_GET['id'],$category['designcat_id']  );
                                        }

                                        foreach ($designs as $key => $design) {
                                    ?>
                                            
                                        <div class="mix col-lg-4 col-md-6 ">
                                            <div class="product-item bg-white" style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;" >       
                                                <figure>
                                                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                        
                                                            <div class="carousel-item active">
                                                                <img src="designUpload/<?php echo ($design['photo1']);?>" class="d-block w-100" style="height: 220px; width:330px" alt="...">
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <img src="designUpload/<?php echo ($design['photo2']); ?>" class="d-block w-100" style="height: 220px; width:330px" alt="...">
                                                            </div>
                                                            <div class="carousel-item ">
                                                                <img src="designUpload/<?php echo ($design['photo3']); ?>" class="d-block w-100" style="height: 220px; width:330px" alt="...">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <div class="pi-meta">
                                                            <img src="images/whatsapp.png" alt=""><span class="text-white"><?php echo ($design['fdesigner_phone']) ?></span>
    
                                                    </div>
                                                </figure>
                                                <div class="product-info pb-4">
                                                    <h6 class="h5">
                                                        <a href="#" style="text-decoration: none; color: #f8b500;">
                                                            <?php echo ($design['fdesigner_brandname']) ?>
                                                        </a>
                                                    </h6>
                                                    <p> <?php echo ($design['fdesigner_location']) ?>, Nigeria</p>
                                                    <?php 
                                                        if (isset($_GET['id']) and !isset($_SESSION['designer'])) {?>
                                                            <a href="https://wa.me/<?php echo ($design['fdesigner_phone']); ?>" target="_blank" class="site-btn btn-line">CONTACT DESIGNER</a>
                                                        <?php    
                                                        } else if (isset($_GET['id']) and $_SESSION['designer'] !== ($_GET['id'])) { ?>
                                                        <a href="https://wa.me/<?php echo ($design['fdesigner_phone']); ?>" target="_blank" class="site-btn btn-line">CONTACT DESIGNER</a>

                                                    <?php  } else  if (isset($_SESSION['designer']) || $_SESSION['designer'] == ($_GET['id'])){ ?>
                                                        <a href="editCard.php?id=<?php echo $design['fdesigns_id']; ?>" class="site-btn btn-line">EDIT</a>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <?php } ?>

                                        <?php if (isset($_SESSION['designer']) ) {
                                        
                                            $cardNo= $s->countCard($_SESSION['designer'], $category['designcat_id']);
                                            $no = $cardNo['num'];
                                            if ($no  < 3){
                                                if (!isset($_GET['id']) || $_SESSION['designer'] == ($_GET['id'] ) ) {?>
                                        <div class="mix col-lg-3 col-md-6 pb-3">
                                            <div class="product-item text-center p-5 bg-white " style=" box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">
                                                <a class="text-center" href="<?php echo 'addDesign.php?id='.$category['designcat_id']; ?>" ><img src="https://img.icons8.com/material/100/000000/plus-2-math--v1.png"></a>
                                                <h4 class="text-center">Add Card </h4>
                                            </div>
                            
                                        </div>   
                                        <?php }}}?>
                                                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <?php } ?>

                    
                </div>
            </div>

            <?php
                require("footer.php");
            ?>
        </div>
    
        <script src="js/jquery-3.2.1.min.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="styles/bootstrap4/popper.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="styles/bootstrap4/bootstrap.min.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="plugins/easing/easing.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="plugins/parallax-js-master/parallax.min.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="plugins/colorbox/jquery.colorbox-min.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script src="js/custom.js" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="a6bc3452a1d0e5336c6ad1f3-text/javascript"></script>
        <script type="a6bc3452a1d0e5336c6ad1f3-text/javascript">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23581568-13');
        </script>
        <script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="a6bc3452a1d0e5336c6ad1f3-|49" defer=""></script>

        <!-- Modal -->
        <?php
            require('signupPage.php');
        ?>




    </body>
    <script src="script.js"></script>
</html>