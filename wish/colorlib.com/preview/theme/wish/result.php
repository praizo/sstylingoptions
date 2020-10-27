<?php

    require("user.php");
    require("designs.php");


    $r = new User;
    $s = new Design;
    
    if (!empty($_POST)) {

        $keyword = trim(htmlentities($_POST['keyword']));
        $ans = $s-> search($keyword);

    } else {
        header("location: designer.php");
    }


    if  (isset($_SESSION['designer'])) {
        $details = $r->getDetails($_SESSION['designer']);
    
    }

    $genders = $s->getGender();
    $categories= $s->getCategory();
    
?> 

<!DOCTYPE html>
<html lang="en">

    <!-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> -->
    <head>
        <title>Hot 9jaStyles</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Wish shop project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
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
                        
                        </li>                    
                    </ul>
                </nav>
            </div>
            
            <div style="height: 120px">
            
            </div>
            <div class="container-fluid mx-0 px-0" >
                <div class="row mb-4">
                    <div class="col-12">
                    
                        <section class="product-section spad">
                            <div class="container">
                                <h2 class="text-center mb-3 h1" style="font-family: open sans,sans-serif; color: #f8b500; "><?php echo "Search result for ".$keyword; ?></h2>

                                <div class="row" id="product-filter">
                                <?php   
                                    if(is_array($ans)){
                                    foreach ($ans as $an) {
                                        $displays = $s-> displaySearchResults($an['fdesigner_id']);
                                        foreach ($displays as $display) {
                                                        
                                ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-item bg-white pb-5" style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">
                                            <figure>
                                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    
                                                        <div class="carousel-item active">
                                                            <img src="designUpload/<?php echo ($display['photo1']);?>" class="d-block w-100" style="height: 220px;" alt="...">
                                                        </div>
                                                        <div class="carousel-item ">
                                                            <img src="designUpload/<?php echo ($display['photo2']); ?>" class="d-block w-100" style="height: 220px;" alt="...">
                                                        </div>
                                                        <div class="carousel-item ">
                                                            <img src="designUpload/<?php echo ($display['photo3']); ?>" class="d-block w-100" style="height: 220px;" alt="...">
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
                                                    <img src="images/whatsapp.png" alt=""><span class="text-white"><?php echo ($display['fdesigner_phone']) ?></span>

                                                </div>
                                            </figure>
                                            
                                            <div class="product-info">
                                                <h6 class="h5">
                                                    <a href="<?php echo 'designer.php?id='.$display['fdesigner_id']; ?>" style="text-decoration: none; color: #f8b500;">
                                                        <?php echo ($display['fdesigner_brandname']) ?>
                                                    </a>
                                                </h6>
                                                <p> <?php echo ($display['fdesigner_location']) ?>, Nigeria</p>
                                                <a href="https://wa.me/<?php echo ($display['fdesigner_phone']); ?>" target="_blank" class="site-btn btn-line">CONTACT DESIGNER</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php }} } else{  ?>
                                    <div class="col-12" style="height: 150px">
                                        <h2 class="text-center mb-3" style="font-family: open sans,sans-serif; color: tomato; "><?php echo $ans; ?></h2>
                                    </div>
                                    
                                <?php  }?>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            

            </div>

            <?php require "footer.php" ?>
                                        
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



<script src="script.js"></script>

    </body>

</html>