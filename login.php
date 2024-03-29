<?php
session_start(); 

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'db_connect.php'; 

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_fullname'] = $row['fullname'];
        $_SESSION['usr_choice'] = $row['choice'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
    }
}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/getfund/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:40 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <title>Login - ProjectFund</title>
</head>

<body>
    <!-- Header topbar -->
    <div class="topbar pt10 pb10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <ul class="list-inline">
                        <li> <a href="#">FAQ</a> </li>
                        <li class="text-white">|</li>
                        <li> <a href="about_us.php">About Us</a> </li>
                        <li class="text-white">|</li>
                        <li> <a href="contact_us.php">Contact Us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul class="socials-top text-right">
                        <li><a target="_Blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_Blank" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_Blank" href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a target="_Blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_Blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header topbar -->

    <!-- Start Main Menu Area -->
    <div class="main-header-area header-sticky">
        <div class="container">
            <div class="getfund-nav-container breakpoint-off">
                <!-- getfund Menu -->
                <nav class="getfund-navbar justify-content-between" id="listingNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php">ProjectFund</a>

                    <!-- Navbar Toggler -->
                    <div class="getfund-navbar-toggler"> <span class="navbarToggler"><span></span><span></span><span></span></span> </div>

                    <!-- Menu -->
                    <div class="getfund-menu">

                        <!-- close btn -->
                        <div class="getfundcloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="getfundnav">
                            <ul>
                                <li> <a class="sf-with-ul" href="index.php">Home</a></li>
                                <li> <a class="sf-with-ul" href="explore.php">Explore</a></li>
                                <li> <a class="sf-with-ul" href="create_a_campaign.php">Create a Campaign</a></li>
                                <li> <a class="sf-with-ul" href="login.php">Login</a></li>
                                <li> <a class="sf-with-ul" href="register.php">Register</a></li>
                                <li class="right-side">
                                    <ul>
                                        <li><a href="donate.html" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i>Donate Now</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Main Menu Area -->

    <!-- Start Main Banner Area -->
    <div class="main-banner item-bg-one inner-banner">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <h2>login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                    <span class="login100-form-title"> Member Login </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-envelope" aria-hidden="true"></i> </span> </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login" type="submit"> Login </button>
                    </div>
                    <div class="text-center p-t-136"> <a class="txt2" href="register.php"> Create your Account <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i> </a> </div>
                </form>
                <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Our company</h3>
                            <p>ProjectFund is a digital space provided for to help get funds for projects and also provide a platform for other NGO's to recieve fundings for your projects and achieve their short term or long term goals. </p>
                            <div class="paymentM"><img src="images/payment-method.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Campaign</h3>
                            <ul class="footer-link">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Campaign</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Pricing </a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Support</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Discover</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Terms of Use</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Explore </h3>
                            <ul class="footer-link">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Environment</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Health</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Innovation</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Nonprofit</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Travels</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 col-xs-12">
                        <div class="Footer-nav newsletter">
                            <h3>Newsletter</h3>
                            <form action="https://preview.templatehouse.net/getfund/s" method="POST" id="newsletterForm">
                                <input type="text" value="" name="s" placeholder="Enter your email...">
                                <button type="submit" value=""><span class="fas fa-paper-plane"></span></button>
                            </form>
                            <div class="follow">
                                <h3>Follow us</h3>
                                <ul>
                                    <li><a target="_Blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_Blank" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_Blank" href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a target="_Blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a target="_Blank" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .footer-menu -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <p class="copyright">2019 by ProjectFund. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Make a Donation Now!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <form class="paypal_donate_form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-20 text-black">
                                    <label><strong>Donation Type</strong></label>
                                    <div class="radio">
                                        <label class="radio-inline">
                                            <input type="radio" value="D" name="t3" checked="">
                                            Daily</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="W" name="t3">
                                            Weekly</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="M" name="t3">
                                            Monthly</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="Y" name="t3">
                                            Yearly</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20 text-black">
                                    <label><strong class="">I Want to Donate for</strong></label>
                                    <select name="item_name" class="form-control">
                                        <option value="Educate Children">Educate Children</option>
                                        <option value="Child Camps">Child Camps</option>
                                        <option value="Clean Water for Life">Clean Water for Life</option>
                                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20 text-black">
                                    <label><strong>Currency</strong></label>
                                    <select name="currency_code" class="form-control">
                                        <option value="">Select Currency</option>
                                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                                        <option value="HKD">HKD - Hong Kong Dollars</option>
                                        <option value="HUF">HUF - Hungarian Forints</option>
                                        <option value="INR">INR - Indian Rupee</option>
                                        <option value="ILS">ILS - Israeli New Shekels</option>
                                        <option value="JPY">JPY - Japanese Yen</option>
                                        <option value="MYR">MYR - Malaysian Ringgit</option>
                                        <option value="CHF">CHF - Swiss Francs</option>
                                        <option value="THB">THB - Thai Baht</option>
                                        <option value="TRY">TRY - Turkish Liras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-20 text-black">
                                    <label><strong>How much do you want to donate?</strong></label>
                                    <div class="radio">
                                        <label class="radio-inline">
                                            <input type="radio" name="amount" value="20">
                                            $20</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="amount" value="50">
                                            $50</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="amount" value="100">
                                            $100</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="amount" value="200">
                                            $200</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="amount" value="500">
                                            $500</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-black"> <img src="images/payment-card-logo-sm.png" alt=""> </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Donate Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Volunteer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Become a Volunteer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <form class="paypal_donate_form" name="job_apply_form" action="#" method="post" enctype="#" novalidate>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <small>*</small></label>
                                    <input name="form_name" type="text" placeholder="Enter Name" required class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <small>*</small></label>
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_sex">Sex <small>*</small></label>
                                    <select id="form_sex" name="form_sex" class="form-control required valid" aria-required="true" aria-invalid="false">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_branch">Choose Branch <small>*</small></label>
                                    <select id="form_branch" name="form_branch" class="form-control required valid" aria-required="true" aria-invalid="false">
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message <small>*</small></label>
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Your cover letter/message sent to the employer" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form_attachment">C/V Upload</label>
                            <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                            <br />
                            <small>Maximum upload file size: 2 MB</small> </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Apply Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/getfund-nav.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from preview.templatehouse.net/getfund/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:41 GMT -->

</html>
