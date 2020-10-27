<?php

require("header.php");
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$previous = $page - 1;
$next = $page + 1;


?>
            <div style="height: 120px">

            </div>
            <div class="container-fluid mx-0 px-0" >
                <div class="row mb-4">
                    <div class="col-12">
                    <?php  
                        $category= $s->getdisplayCategory(1);
                    ?>
                        <section class="product-section spad">
                            <div class="container">
                                <h2 class="text-center mb-3 h1" style="font-family: open sans,sans-serif; color: #90007F; "><?php echo ucfirst( ($category['designcat_name'])) ?></h2>

                                <div class="row" id="product-filter">
                                <?php   
                                    $designs= $s->displayCategory($category['designcat_id'] );
                                    foreach ($designs as $design) {
                                ?>
                                    <div class="mix col-lg-4 col-md-6 best">
                                        <div class="product-item bg-white pb-5" style="box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;">
                                            <figure>
                                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                    
                                                        <div class="carousel-item active">
                                                            <img src="designUpload/<?php echo ($design['photo1']);?>" class="d-block w-100" style="height: 220px;" alt="...">
                                                        </div>
                                                        <div class="carousel-item ">
                                                            <img src="designUpload/<?php echo ($design['photo2']); ?>" class="d-block w-100" style="height: 220px;" alt="...">
                                                        </div>
                                                        <div class="carousel-item ">
                                                            <img src="designUpload/<?php echo ($design['photo3']); ?>" class="d-block w-100" style="height: 220px;" alt="...">
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
                                            <div class="product-info">
                                                <h6 class="h5">
                                                    <a href="<?php echo 'designer.php?id='.$design['fdesigner_id']; ?>" style="text-decoration: none; color: #f8b500;">
                                                        <?php echo ($design['fdesigner_brandname']) ?>
                                                    </a>
                                                </h6>
                                                <p> <?php echo ($design['fdesigner_location']) ?>, Nigeria</p>
                                                <a href="https://wa.me/<?php echo ($design['fdesigner_phone']); ?>" target="_blank" class="site-btn btn-line">CONTACT DESIGNER</a>
                                            </div>
                                        </div>
                                    </div>
                                
                                <?php } ?>
    
                                    
                                </div>
                            </div>
                        </section>
                        <div class="col-12 my-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item ">
                                        <?php if ($page > 1) { ?>
                                        <a style="color:  #f8b500 !important;" class="page-link" href="owambe.php?page=<?= $previous; ?>">Previous</a>
                                    <?php }?>
                                    </li>
                                    <?php 
                                    
                                    $pages= $s->pagination(1);
                            

                                    for ($i=1; $i <= $pages; $i++) : ?>
                                    <li class="page-item"><a style="color:  #f8b500 !important;" color="#90007F"class="page-link" href="owambe.php?page=<?= $i; ?> "><?= $i; ?></a></li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                        <?php if ($page < $pages) { ?>
                                        <a style="color:  #f8b500 !important;" class="page-link" href="owambe.php?page=<?= $next; ?>">Next</a>
                                        <?php }?>
                                    </li>
                                </ul>
                            </nav>
                        </div>
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