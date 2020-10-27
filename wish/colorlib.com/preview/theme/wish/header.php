<?php

    require("user.php");
    require("designs.php");

    $r = new User;
    $s = new Design;

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
                        <a href="index.php" style="color:#90007F; font-size: 22px;">Hot<br>9jaStyles</a>
                    </div>
                    <div style="padding-left: 9px; width: 215px" id="hack">
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
                    <a href="#" style="color:#90007F; font-size: 22px;">Hot<br>9jaStyles</a>
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