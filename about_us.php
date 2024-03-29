<?php
session_start();
include_once 'dbconnect.php';
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/getfund/about_us.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:37 GMT -->

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
    <title>Getfund - Nonprofit, Crowdfunding & Charity HTML5 Template</title>
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
                    <a class="nav-brand" href="index.php"><img src="images/logo-header.png" alt="logo"></a>

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
                                <?php if (isset($_SESSION['usr_id'])) { ?>
                                <li>
                                    <a href="my_account.php" class="navbar-text"><b>Signed in as <?php echo $_SESSION['usr_fullname']; ?></b></a>
                                </li>
                                <li><a href="logout.php">Log Out</a></li>
                                <?php } else { ?>
                                <li> <a class="sf-with-ul" href="login.php">Login</a></li>
                                <li> <a class="sf-with-ul" href="register.php">Register</a></li>
                                <?php } ?>
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
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <section class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-5 col-sm-12">
                    <div class="section-title">
                        <span>About us</span>
                        <h2>Consulting agency with 15 years of experience</h2>
                    </div>
                    <div class="about-text">
                        <p>Collection of textile samples lay spread out on the table Samsa was a travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy</p>
                        <blockquote>
                            " Collection of textile samples lay spread out on the table Samsa was a travelling salesman and above it there hung a picture that he had recently "
                        </blockquote>
                        <div class="quoter">
                            <h5>Jhoe pitersor</h5>
                            <span>CEO of the company</span>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-7 col-sm-12">
                    <div class="about-pic-area">
                        <div class="video-area">

                            <img src="images/about.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>



    <section class="approach-section section-padding pt0">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 col-sm-12">
                    <div class="img-holder">
                        <img src="images/approach-img.jpg" alt="">
                    </div>
                </div>
                <div class=" col-md-8 col-sm-12">
                    <div class="details">
                        <h2>Our Approach</h2>
                        <p>Gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out</p>
                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Dropswho sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look ou</p>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>



    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class=" col-lg-5 col-md-5 col-sm-12">
                    <div class="img-holder">
                        <img src="images/img-1.png" alt="">
                    </div>
                </div>
                <div class=" col-lg-6 col-md-7 col-sm-12">
                    <div class="details">
                        <p>Travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the </p>
                        <h4>Michel Jhon</h4>
                        <span>Founder of Dahs Foundation</span>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>






    <footer class="site-footer">
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Our company</h3>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci. </p>
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
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Explore </h3>
                            <ul class="footer-link">
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Environment</a></li>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i> Fashion</a></li>
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
                        <p class="copyright">2019 by TemplateHouse. All Rights Reserved.</p>
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

<!-- Mirrored from preview.templatehouse.net/getfund/about_us.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:40 GMT -->

</html>
