<?php
require("header.php");

if (isset($_SESSION['designer'])) {
    $details = $s->getDesignCard($_GET['id']); 

} else {
    header("location: index.php");
}



?>
        <div style="height:120px; background-color: white;">
                    
        </div>       
        <div class="row border" >
            <div class="offset-md-2 col-md-8 p-md-3">

                <form class="border shadow p-3 bg-white"  enctype="multipart/form-data" action="editCardFlow.php" method="POST">
                    <h3 style="color: #f8b500;">Edit Design</h3>
                    <hr>

                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-6 mx-3">
                            <div>
                                <img src="designUpload/<?php echo ($details['photo1']);?>" style="height: 200px; width:200px" alt="Cover Photo">
                            </div>
                            <label for="designPic" style="color: #f8b5000;">Upload Design Photo</label>
                            <input type='file' name='designPic[]' id="designPic" class="form-control-file" >
                        
                        </div>

                        
                        <div class="form-group col-md-3 col-sm-6 mx-3">
                            <div>
                                <img src="designUpload/<?php echo ($details['photo2']);?>" style="height: 200px; width:200px" alt="Cover Photo">
                            </div>
                            <label for="designPic" style="color: #f8b5000;">Upload Design Photo</label>
                            <input type='file' name='designPic[]' id="designPic" class="form-control-file" >
                        
                        </div>
                        <div class="form-group col-md-3 col-sm-6 ">
                            <div>
                                <img src="designUpload/<?php echo ($details['photo3']);?>" style="height: 200px; width:200px" alt="Cover Photo">
                            </div>
                            <label for="designPic" style="color: #f8b5000;">Upload Design Photo</label>
                            <input type='file' name='designPic[]' id="designPic" class="form-control-file" >
                        
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <input type="hidden" name="fdesignid" value="<?php echo $_GET['id'];?>" >
                        </div>
                        
                    </div>

                    <h3 style="color: #f8b500;">Delete Design</h3>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-6 mx-3">
                            <div class="form-check">
                                <input type="hidden" name="deletecard" value="0">
                                <input class="form-check-input" type="checkbox" value="1" id="deletecard" name="deletecard">

                                <label class="form-check-label" for="deletecard">
                                    Select to delete card
                                </label>
                            </div>
                        
                        </div>
                    </div>

                    
                    
                    <button type="submit" class="btn" style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);">Edit Design</button>
                </form>
            </div>
        </div>
            

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
        <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">REGISTER OR SIGN IN AS A DESIGNER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="login-wrap w-100 p-0">
                        <div class="login-html w-100">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                            <div class="login-form">
                                <div class="sign-in-htm">
                                <form action="signin.php" method="POST">
                                    <div class="form-group">                                 
                                        <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email" name="userEmail" required>
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="userPwd" placeholder="Password" name="userPwd" required>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn" style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);">Login</button>
                                </form> 
                                
                                </div>
                                <div class="sign-up-htm">
                                <form action="signup.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="fname" placeholder="enter firstname" name="fname" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="lname" placeholder="enter lastname" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pwd1" required> 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" id="pwd2" placeholder="Password" name="pwd2" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="businessName" placeholder="enter designer / business name" name="businessName" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" name="phoneNo" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="location" placeholder="enter location" name="location" required>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            I agree to terms and conditions of usage on this website.
                                        </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn " style="background-color: #90007F; color: #fff; box-shadow: 0 0 0 .2rem rgba(256,256,256,.25);">Sign Up</button>
                                </form>
                                    
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            </div>
        </div>

	
    </body>

</html>