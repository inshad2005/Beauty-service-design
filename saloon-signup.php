<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Saloon Sign Up </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/bootstrap-multiselect.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require('include/page-header.php');
        ?>
        <section class="login-section">
            <div class="container">
                <div class="login-inner">
                    <form class="signup-form common-form">
                        <h3 class="form-h after-line">Saloon Sign Up</h3>
                        <p class="title-d">Begin your Beauty Service journey with 3 simple steps.</p>
                        <div class="saloon-wrap">
                            <div class="tab-on-form">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active step-li">
                                       <a href="#tab_a" data-toggle="pill" >
                                           1
                                       </a>
                                       <p>Account Creation</p> 
                                    </li>
                                    <li class="step-li">
                                       <a href="#tab_b" data-toggle="pill">
                                          2
                                       </a>
                                       <p>Verification Details</p> 
                                    </li>
                                    <li class="">
                                       <a href="#tab_c" data-toggle="pill">
                                          3
                                       </a>
                                       <p>Update Saloon Details</p> 
                                    </li>
                                </ul>
                            </div>
                            <div class="form-wrap">
                                <div class="tab-content">
                                    <div class="saloon-form tab-pane active" id="tab_a">
                                        <p class="info-text">We will never sell, share or distribute your personal information.<a href="javascript:void(0);">Read our privacy policy</a></p>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Saloon Name</label>
                                                <input type="text" placeholder="Enter Saloon Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Name</label>
                                                <input type="text" placeholder="Enter Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Email</label>
                                                <input type="text" placeholder="Enter Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Contact Number</label>
                                                <input type="text" placeholder="Enter Contact Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Password</label>
                                                <input type="password" placeholder="Enter Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Confirm Password</label>
                                                <input type="password" placeholder="Enter Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Enter Your City</label>
                                                <input type="text" placeholder="Enter Your City" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="remember-me">
                                                    <input type="checkbox" checked="checked"> I acknowledge that i have read <a href="javascript:void(0);">Terms & Condition</a>   and <a href="javascript:void(0);">Privacy Policy</a>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                            <div class="continue-btn saloon-btn">
                                                <a href="#tab_b" class="btn cut-btn" data-toggle="pill">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-form tab-pane" id="tab_b">
                                        <div class="varification-form">
                                            <h4>Please enter the OTP received on your mobile number</h4>
                                            <div class="varification-tab">
                                                <div class="col-md-offset-3 col-sm-6 col-md-6 col-xs-12">
                                                    <input type="text" placeholder="Enter Code" class="form-control">
                                                </div>
                                                <a href="javascript:void(0);" class="opt-link">Resend OTP</a>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                <div class="continue-btn saloon-btn vari">
                                                    <span class="varify">
                                                        <a href="#tab_a" class="btn cut-btn" data-toggle="pill">Back</a>
                                                    </span>
                                                    <span class="varify">
                                                        <a href="#tab_c" class="btn cut-btn" data-toggle="pill">Verify</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="saloon-form tab-pane" id="tab_c">
                                        <div class="saloon-details">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6 col-sm-6  col-xs-12">
                                                    <!-- <label>Upload Saloon Logo</label> -->
                                                    <div class="form-group custom-upload">
                                                        <div class="file-previewimg">
                                                            <img src="img/no-img.png" class="img-responsive" alt="NO-IMAGES">
                                                        </div>
                                                        <div class="profile-upload">
                                                            <div class="input-btn">
                                                                <input type="file" />
                                                                <button class="btn cus-btn"> 
                                                                <i class="fa fa-file-image-o"></i> Upload Saloon Logo</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                    <label>Select Category</label>
                                                    <div class="custom-select">
                                                        <select class="form-control multiselect" placeholder="Select Category" multiple="multiple">
                                                            <option disabled="">Select Category</option>
                                                            <option name="nsw">Saloon</option>
                                                            <option name="vic">spa</option>
                                                            <option name="qld">Stylist</option>
                                                            <option name="wa">Ayurveda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                  <label>Select Service</label>
                                                    <div class="custom-select">
                                                        <select class="form-control multiselect" placeholder="Select Services" multiple="multiple">
                                                            <option disabled="">Select Services</option>
                                                            <option name="nsw">Hair</option>
                                                            <option name="vic">Skin</option>
                                                            <option name="qld">Nail Treatment</option>
                                                            <option name="qld">Essentials</option>
                                                            <option name="qld">Innovations</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12 p-0">
                                                <div class="continue-btn saloon-btn vari">
                                                    <span class="varify">
                                                        <a href="javascript:void(0);" class="btn cut-btn" data-toggle="pill">Cancel</a>
                                                    </span>
                                                    <span class="varify">
                                                        <a href="saloon-dashboard.php" class="btn cut-btn">Submit</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php
            require('include/footer.php');
        ?>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
            }
            else{
                $('header').removeClass("sticky");
            }
        });
    </script> 
    <script>
        /*------on Back Continue Button click--------*/
        $('.continue-btn a').on('click',function(e){
            /*e.preventDefault();*/
            /*var id = $(this).attr('href');*/
            var id = $(this.hash);
            console.log(id);
            var attr_id = id[0]['id'];
            console.log(attr_id);

            $('.saloon-wrap .tab-content').find(id).addClass('active');
            $('.saloon-wrap .tab-content').find(id).siblings('.tab-pane').removeClass('active');

            $('.tab-on-form .nav.nav-pills li').has('a[href=#'+attr_id+']').siblings('li').removeClass('active');
            $('.tab-on-form .nav.nav-pills li').has('a[href=#'+attr_id+']').addClass('active');
        });

        $('.tab-on-form .nav.nav-pills li a').on('click',function(e){
            e.preventDefault();
            /*var id = $(this).attr('href');*/
            var id = $(this.hash);
            $('.saloon-wrap .tab-content').find(id).addClass('active');
            $('.saloon-wrap .tab-content').find(id).siblings('.tab-pane').removeClass('active');

            $(this).parent('li').addClass('active');
            $(this).parent('li').siblings('li').removeClass('active');
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.multiselect').multiselect();
        });
    </script>
    <script type="text/javascript">
        $('.custome-bar > li.dropdown').hover(function(){
           $(this).addClass('active').siblings('li.dropdown').removeClass('active');;
        });
    </script>
</html>