<?php
session_start();

// Handle logout
if (isset($_GET["logout"])) {
    // Set the username session variable to null
    $_SESSION["email"] = null;
    // Destroy the session and redirect to the homepage
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>PrintStudioX</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/logo.png" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img src="images/logo-2.png" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <aside>
                        <!--Social Icons in Header-->
                        <?php
                            if (isset($_SESSION["email"])){
                            // User is logged in, display "Log Out" button
                            echo '<form action="?logout" method="post">';
                            echo '<ul class="social-icons">';
                            echo '<li><button class="button-28" role="button" type="submit">LOG OUT</button><li>';
                            echo '</ul>';
                            echo '</form>';
                        } else {
                            // User is not logged in, display "Log In" button
                            echo '<ul class="social-icons">';
                            echo '<li><a href="login.html">Sign Up</a></li>';
                            echo '<li><button class="button-28" role="button" id="loginButton">LOGIN</button></li>';
                            echo '</ul>';
                        }
                        ?>                        
                        <!--End of Social Icons in Header-->

                    </aside>
                    <script>
                        // Get a reference to the login button
                        var loginButton = document.getElementById('loginButton');
                
                        // Add a click event listener to the button
                        loginButton.addEventListener('click', function() {
                            // Redirect to the login HTML file
                            window.location.href = 'login.html';
                        });
                    </script>
                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="#banner">Home</a>
                            </li>
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#clients">Clients</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#pricing">Pricing</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1>AFFORDABLE PRINT HUB</h1>
                    <h2>PrintStudioX is a platform that offers a wide range of budget-friendly printing services for various needs.</h2>
                </div>
                <?php
                    if (isset($_SESSION["email"])){
                        // User is logged in, display "Log Out" button
                        echo '<a href="placeorder.html" class="button">PLACE ORDER</a>">';
                    } else {
                        // User is not logged in, display "Log In" button
                        echo '<a href="login.html" class="button">PLACE ORDER</a>';
                    }
                ?>

            </div>

        </div><!--End of Row-->
    </header>

    <!--Main Content Area-->
    <main id="content">

        <!--Introduction-->
        <section id="services" class="introduction scrollto">

            <div class="row clearfix">

                <div class="col-3">
                    <div class="section-heading">
                        <h3>SUCCESS</h3>
                        <h2 class="section-title">How We Help You To Sell Your Product</h2>
                        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.1s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-truck fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Delivery</h4>
                            <p>Has ne tritani atomorum conclusionemque, in dolorum volumus cotidieque eum. At vis choro
                                neglegentur iudico</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.3s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-bolt fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Easy to Use</h4>
                            <p>Cu vero ipsum vim, doctus facilisi sea in. Eam ex falli honestatis repudiandae, sit
                                detracto mediocrem disputationi</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-tablet fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Fully Responsive</h4>
                            <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                                nemore vivendum</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                    <!--Icon Block-->
                    <div class="col-2 icon-block icon-top wow fadeInUp" data-wow-delay="0.5s">
                        <!--Icon-->
                        <div class="icon">
                            <i class="fa fa-rocket fa-2x"></i>
                        </div>
                        <!--Icon Block Description-->
                        <div class="icon-block-description">
                            <h4>Parallax Effect</h4>
                            <p>Id porro tritani recusabo usu, eum intellegam consequuntur et. Fugit debet ea sit, an pro
                                nemore vivendum</p>
                        </div>
                    </div>
                    <!--End of Icon Block-->

                </div>

            </div>


        </section>
        <!--End of Introduction-->

        <section id="about" class="secondary-color text-center scrollto clearfix ">
            <div class="row no-padding-bottom clearfix">


                <!--Content Left Side-->
                <div class="col-3">
                    <!--User Testimonial-->
                    <blockquote class="testimonial text-right bigtest">
                        <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua</q>
                        <footer>— John Doe, Happy Customer</footer>
                    </blockquote>
                    <!-- End of Testimonial-->

                </div>
                <!--End Content Left Side-->

                <!--Content of the Right Side-->
                <div class="col-3">
                    <div class="section-heading">
                        <h3>BELIEVING</h3>
                        <h2 class="section-title">Focusing On What Matters Most</h2>
                        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet!
                    </p>
                    <!-- Just replace the Video ID "UYJ5IjBRlW8" with the ID of your video on YouTube (Found within the URL) -->
                    
                </div>
                <!--End Content Right Side-->

                <div class="col-3">
                    <img src="images/dancer.jpg" alt="Dancer"/>
                </div>

            </div>
                <!--End Pricing Block-->

            </div>
        </section>



        <!--Testimonials-->
        <aside id="clients" class="scrollto text-center" data-enllax-ratio=".2">

            <div class="row clearfix">

                <div class="section-heading">
                    <h3>FEEDBACK</h3>
                    <h2 class="section-title">What our customers are saying</h2>
                </div>

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-1.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>John Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-2.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>Roslyn Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

                <!--User Testimonial-->
                <blockquote class="col-3 testimonial classic">
                    <img src="images/user-images/user-3.jpg" alt="User"/>
                    <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua</q>
                    <footer>Thomas Doe - Happy Customer</footer>
                </blockquote>
                <!-- End of Testimonial-->

            </div>

        </aside>
        <!--End of Testimonials-->

        <!--Clients-->
        <section id="testimonials" class="scrollto clearfix">
            <div class="row clearfix">

                <div class="col-3">

                    <div class="section-heading">
                        <h3>TRUST</h3>
                        <h2 class="section-title">Companies who use our services</h2>
                        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam!</p>
                    </div>

                </div>

                <div class="col-2-3">

                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo1.png" alt="Company"/>
                        <div class="client-overlay"><span>Tree</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo2.png" alt="Company"/>
                        <div class="client-overlay"><span>Fingerprint</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo3.png" alt="Company"/>
                        <div class="client-overlay"><span>The Man</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo4.png" alt="Company"/>
                        <div class="client-overlay"><span>Mustache</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo5.png" alt="Company"/>
                        <div class="client-overlay"><span>Goat</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo6.png" alt="Company"/>
                        <div class="client-overlay"><span>Justice</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo7.png" alt="Company"/>
                        <div class="client-overlay"><span>Ball</span></div>
                    </a>
                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo8.png" alt="Company"/>
                        <div class="client-overlay"><span>Cold</span></div>
                    </a>

                    <a href="#" class="col-3">
                        <img src="images/company-images/company-logo9.png" alt="Company"/>
                        <div class="client-overlay"><span>Cold</span></div>
                    </a>

                </div>

            </div>
        </section>
        <!--End of Clients-->

        <!--Pricing Tables-->
        <div id="pricing" class="scrollto clearfix">

            <div class="row clearfix">

                <div class="section-heading">
                    <h3>YOUR CHOICE</h3>
                    <h2 class="section-title">We have the right package for you</h2>
                </div>

                <!--Pricing Block-->
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-block-content">
                        <h3>Personal</h3>
                        <p class="pricing-sub">The standard version</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>19</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>5 Downloads</li>
                            <li>2 Extensions</li>
                            <li>Tutorials</li>
                            <li>Forum Support</li>
                            <li>1 year free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>
                <!--End Pricing Block-->

                <!--Pricing Block-->
                <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-block-content">
                        <h3>Student</h3>
                        <p class="pricing-sub">Most popular choice</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>29</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>15 Downloads</li>
                            <li>5 Extensions</li>
                            <li>Tutorials with Files</li>
                            <li>Forum Support</li>
                            <li>2 years free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>
                <!--End Pricing Block-->

                <!--Pricing Block-->
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pricing-block-content">
                        <h3>Business</h3>
                        <p class="pricing-sub">For the whole team</p>
                        <div class="pricing">
                            <div class="price"><span>$</span>49</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <ul>
                            <li>Unlimited Downloads</li>
                            <li>Unlimited Extensions</li>
                            <li>HD Video Tutorials</li>
                            <li>Chat Support</li>
                            <li>Lifetime free updates</li>
                        </ul>
                        <a href="#" class="button">BUY TODAY</a>
                    </div>
                </div>


        </div>
        <!--End of Pricing Tables-->
    </main>
    <!--End Main Content Area-->


    <!--Footer-->
    <footer id="landing-footer" class="clearfix">
        <div class="row clearfix">

            <p id="copyright" class="col-2">Made with love by <a href="https://www.shapingrain.com">KinG</a></p>

            <!--Social Icons in Footer-->
            <ul class="col-2 social-icons">
                <li>
                    <a target="_blank" title="Facebook" href="https://www.facebook.com/username">
                        <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Google+" href="http://google.com/+username">
                        <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Instagram" href="http://www.instagram.com/username">
                        <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="behance" href="http://www.behance.net">
                        <i class="fa fa-behance fa-1x"></i><span>Behance</span>
                    </a>
                </li>
            </ul>
            <!--End of Social Icons in Footer-->
        </div>
    </footer>
    <!--End of Footer-->

</div>
<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
</html>