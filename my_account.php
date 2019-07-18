<?php
session_start();
include_once 'dbconnect.php';
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from preview.templatehouse.net/getfund/create_a_campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:31 GMT -->

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
    <title>Welcome <?php echo $_SESSION['usr_fullname']; ?> - Project Fund</title>
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
                    <a class="nav-brand" href="index.php">Project Fund</a>

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
                                <li> <a class="sf-with-ul" href="#">Create a Campaign</a></li>
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
                            <h2><?php echo $_SESSION['usr_fullname']; ?>'s Account (<?php echo $_SESSION['usr_choice']; ?>)</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="limiter campaign_create pt50 pb50">

        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <h2>My Profile</h2>
                    <br>
                    <img src="images/man.png" style="height: 180px; width: 180px;">
                </div>
                <div class="col-md-4">
                    <h2>My Short Bio</h2>
                    <br>
                    <form action="" method="">
                        <textarea name="bio" class="form-control" rows="5"></textarea>
                        <button type="submit" name="submit" class="btn btn-primary">Send Bio</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2>Update Details</h2>
                    <br>
                    <form action="" method="">
                        <input type="email" class="form-control" value="" name="email" placeholder="E-mail Address">
                        <input type="password" class="form-control" value="" name="password" placeholder="Old Password">
                        <input type="password" class="form-control" value="" name="cpassword" placeholder="New Password">
                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>

            <br>

            <h2>My Campaigns</h2>

            <div class="row">

                <div class="col-md-4 col-sm-12 col-xs-12">

                    <div class="campaign-item"> <a class="overlay" href=""> <img src="images/campaigns_01.jpg" alt=""> <span class="fas fa-link"></span> </a>
                        <?php
                        $con = mysqli_connect("localhost","root","root","ngo");
                        $result_query = "select * from campaign WHERE fullname ='$_SESSION[usr_fullname]'";
	
                        $run_result = mysqli_query($con,$result_query);


                       while($row_result=mysqli_fetch_array($run_result)){

                        $category=$row_result['category'];
                        $title=$row_result['title'];
                        $fullname=$row_result['fullname'];
                        $recommended_amount=$row_result['recommended_amount'];
                        $short_description=$row_result['short_description'];
        
        
        
                        echo "<div class='campaign-box'> <a href='#' class='category'>$category</a>
                            <h3><a href='campaign_detail.php'>$title </a></h3>
                            <div class='campaign-description'>$short_description</div>
                            <div class='campaign-author'><a class='author-icon' href='#'><img src='images/author-01.png' alt=''></a>Posted by <a class='author-name' href='#'>$fullname</a></div>
                            <div class='process'>
                                <div class='progress'>
                                    <div class='progress-bar'>
                                        <div class='progress-value'><span>0</span>%</div>
                                    </div>
                                </div>
                                <div class='process-info'>
                                    <div class='process-pledged'><span>50</span>Days left</div>
                                    <div class='process-funded'><span>0</span>Donors</div>
                                    <div class='process-time''><span>₦$recommended_amount</span>Amount Needed</div>
                                </div>
                            </div>
                        </div> "; 
            
		              }

                    ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="Footer-nav">
                            <h3>Our Company</h3>
                            <p>Project Fund is a digital space provided for to help get funds for projects and also provide a platform for other NGO's to recieve fundings for your projects and achieve their short term or long term goals. </p>
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
                        <p class="copyright">2019 by Project Fund. All Rights Reserved.</p>
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
    <script src="js/slick.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
</body>

<!-- Mirrored from preview.templatehouse.net/getfund/create_a_campaign.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jun 2019 05:17:32 GMT -->

</html>
