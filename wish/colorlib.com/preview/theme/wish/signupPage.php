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
                                        <?php  if(isset($_GET['login']) &&($_GET['login'] == 'fail')){
                                            echo' <small id="emailHelp" class="form-text text-danger my-2">Email or Password is incorrect</small>';
                                            }     
                                        ?>                               
                                        <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="userPwd" placeholder="Password" name="userPwd" required>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn" style="background-color: #90007F; color: #fff;">Login</button>
                                </form>
                            </div>

                            <div class="sign-up-htm">
                            <form action="signup.php" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <?php  if(isset($_GET['signup']) &&($_GET['signup'] == 'failFname')){ ?>
                                                <small id="" class="form-text text-danger my-2">Invalid text characters</small>
                                        <?php } ?>
                                        <input type="text" class="form-control" id="fname" placeholder="enter firstname" name="fname" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php  if(isset($_GET['signup']) &&($_GET['signup'] == 'failLname')){ ?>
                                                <small id="" class="form-text text-danger my-2">Invalid text characters</small>
                                        <?php } ?>
                                        <input type="text" class="form-control" id="lname" placeholder="enter lastname" name="lname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <small id="errorPass" class="form-text text-danger my-2"></small>
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control" id="pwd1" placeholder="Password " onchange="comparePass();" name="pwd1" required minlength="8"> 
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control" id="pwd2" placeholder="Password" onchange="comparePass();" name="pwd2" required minlength="8">
                                    </div>
                                </div>
                                <div class="form-group">
                                <?php  if(isset($_GET['nsignup']) &&($_GET['nsignup'] == 'fail')){ ?>
                                            <small id="" class="form-text text-danger my-2">Name has been used</small>
                                    <?php } ?>
                                <?php  if(isset($_GET['signup']) &&($_GET['signup'] == 'failBus')){ ?>
                                            <small id="" class="form-text text-danger my-2">Invalid text characters</small>
                                    <?php } ?>
                                    <input type="text" class="form-control" id="businessName" placeholder="enter designer / business name" name="businessName" required>
                                </div>
                                <div class="form-group">
                                <?php  if(isset($_GET['esignup']) &&($_GET['esignup'] == 'fail')){ ?>
                                            <small id="" class="form-text text-danger my-2">Email has been used</small>
                                    <?php } ?>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" name="phoneNo" required>
                                </div>
                                <div class="form-group">
                                    <?php  if(isset($_GET['signup']) &&($_GET['signup'] == 'failLocation')){ ?>
                                        <small id="" class="form-text text-danger my-2">Invalid text characters</small>
                                    <?php } ?>
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
                                <button type="submit" class="btn" id="butn"style="background-color: #90007F; color: #fff;">Sign Up</button>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>