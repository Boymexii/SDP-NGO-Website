<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}
 
include_once 'db_connect.php';

//set validation error flag as false 
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
     
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$fullname)) {
        $error = true;
        $fullname_error = "fullname must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
        $error = true;
        $username_error = "Username must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(fullname,username,email,choice,password) VALUES('" . $fullname . "', '" . $username . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>


<!doctype html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/getfund/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:41 GMT -->

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
    <title>Register - ProjectFund</title>
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
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                    <?php
                        //Connect to our MySQL database using the PDO extension.
                        $pdo = new PDO('mysql:host=localhost;dbname=ngo', 'root', 'root');
                        //Our select statement. This will retrieve the data that we want.
                        $sql = "SELECT id, choice FROM user_type limit 2";
                        //Prepare the select statement.
                        $stmt = $pdo->prepare($sql);
                        //Execute the statement.
                        $stmt->execute();
                        //Retrieve the rows using fetchAll.
                        $user_types = $stmt->fetchAll();
                    ?>
                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="fullname" placeholder="Full Name" value="<?php if($error) echo $fullname; ?>">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fas fa-user-friends"></i> </span> </div>

                    <div class="wrap-input100 validate-input" data-validate="">
                        <input class="input100" type="text" name="username" placeholder="User Name" value="<?php if($error) echo $username; ?>">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fas fa-user-tie"></i> </span> </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" name="email" placeholder="Email" value="<?php if($error) echo $email; ?>">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-envelope" aria-hidden="true"></i> </span> </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span> </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
                        <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span> </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="signup"> Register </button>
                    </div>
                </form>
                <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
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
                                            <input type="radio" value="O" name="t3" checked="">
                                            One Time</label>
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
                                    <?php
                                        //Connect to our MySQL database using the PDO extension.
                                        $pdo = new PDO('mysql:host=localhost;dbname=ngo', 'root', 'root');
                                        //Our select statement. This will retrieve the data that we want.
                                        $sql = "SELECT id, name FROM category";
                                        //Prepare the select statement.
                                        $stmt = $pdo->prepare($sql);
                                        //Execute the statement.
                                        $stmt->execute();
                                        //Retrieve the rows using fetchAll.
                                        $categories = $stmt->fetchAll();
                                    ?>
                                    <label><strong class="">I Want to Donate for</strong></label>
                                    <select class="form-control select2" name="category">
                                        <?php foreach($categories as $category): ?>
                                        <option value="<?= $category['name']; ?>"><?= $category['name']; ?></option>
                                        <?php endforeach; ?>
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
                                        <option value="INR">INR - Indian Rupee</option>
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

<!-- Mirrored from preview.templatehouse.net/getfund/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:41 GMT -->

</html>
