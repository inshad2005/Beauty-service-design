<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Customer Sign Up </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/bootstrap-multiselect.css" rel="stylesheet">
        <style type="text/css">
            .tab-on-form .nav-stacked > li {
                 width: 50%;
            }
        </style>
    </head>
    <body>
        <?php
            require('include/page-header.php');
        ?>
        <section class="login-section">
            <div class="container">
                <div class="login-inner">
                    <form class="signup-form common-form">
                        <h3 class="form-h after-line">Customer Sign Up</h3>
                        <p class="title-d customer-sign">We Value our Customers</p>
                        <div class="saloon-wrap">
                            <div class="tab-on-form">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active step-li">
                                       <a href="#tab_a" data-toggle="pill" >
                                           1
                                       </a>
                                       <p>Account Creation</p> 
                                    </li>
                                    <li class="">
                                       <a href="#tab_b" data-toggle="pill">
                                          2
                                       </a>
                                       <p>Verification Details</p> 
                                    </li>
                                </ul>
                            </div>
                            <div class="form-wrap">
                                <div class="tab-content">
                                    <div class="saloon-form tab-pane active" id="tab_a">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter First Name</label>
                                                <input type="text" placeholder="Enter Name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Last Name</label>
                                                <input type="text" placeholder="Enter Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Email</label>
                                                <input type="text" placeholder="Enter Email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Contact Number</label>
                                                <input type="text" placeholder="Enter Contact Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Enter Password</label>
                                                <input type="password" placeholder="Enter Password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label>Select Gender</label>
                                                <div class="custom-select">
                                                    <select class="form-control" placeholder="Select Gender">
                                                        <option disabled="">Select Gender</option>
                                                        <option name="nsw">Male</option>
                                                        <option name="vic">Female</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label>Select City</label>
                                                <div class="custom-select">
                                                    <select class="form-control" placeholder="Select City">
                                                        <option disabled="">Select City</option>
                                                        <option name="nsw">Dubai</option>
                                                        <option name="vic">Abu Dhabi</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
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
    <script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>
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
</html>