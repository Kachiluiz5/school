<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from world5.commonsupport.com/html2/kindergarten/checkout-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:53:29 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Nashville Kindergarten || Responsive HTML 5 Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/common-style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body class="checkout-pages">
<div class="preloader"></div>
<header class="header clearfix">
    <div class="main-header stricky bubble">
        <div class="container">
            <div class="logo pull-left">
                <a href="index.php">
                    <img src="images/logo/4.png" alt="Awesome Image" style="width: 150px; height:100px;">
                </a>
            </div>

            <div class="nav-outer">
                <div class="header-top">
                    <div class="contact">
                        <span class="icon fa fa-phone"></span>Call :  +(62) 123 456 7890
                    </div>
                    <div class="register">
                        <a href="#">Register</a>
                        <a href="#">Login </a>
                    </div>

                    <div id="polyglotLanguageSwitcher">
                        <form action="#">
                            <select id="polyglot-language-options">
                                <option id="en" value="en" selected>Eng</option>
                                <option id="fr" value="fr">Fre</option>
                                <option id="de" value="de">Ger</option>
                                <option id="it" value="it">Ita</option>
                                <option id="es" value="es">Spa</option>
                            </select>
                        </form>
                    </div>
                    <div id="top-search" class="top-search">
                        <span class="flaticon-search search"></span>
                        <ul class="search-box">
                            <li>
                                <form action="#">
                                    <input type="text" placeholder="Search for something...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="cart">
                        <a href="cart-page.php"><span class="flaticon-shop"></span></a>
                    </div>
                </div>
                <nav class="mainmenu-area">
                    <div class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>

                        <div class="navbar-collapse collapse text-center">  
                            <ul>
                                <li class="dropdown">
                                    <a href="index.php">Home</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="index.php">Home One</a>
                                        </li>
                                        <li><a href="index-2.php">Home Two</a></li>
                                        <li><a href="index-3.php">Home three</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="events.php">Events</a>
                                    <ul class="submenu">
                                        <li><a href="events.php">Events</a></li>
                                        <li><a href="events-detrails.php">Events details</a></li>
                                    </ul>
                                </li>
                                <li class="current dropdown">
                                    <a href="blog.php">pages</a>
                                    <ul class="submenu">
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="class.php">Class</a></li>
                                        <li><a href="blog.php">Third level</a>
                                            <ul class="submenu">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="class.php">Class</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="gallery.php">Gallery</a>
                                    <ul class="submenu">
                                        <li><a href="gallery.php">Gallery v1</a></li>
                                        <li><a href="gallery-2.php">Gallery v2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="blog.php">News</a>
                                    <ul class="submenu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="single-blog.php">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="shop.php">shop</a>
                                    <ul class="submenu">
                                        <li><a href="product-details.php">product details</a></li>
                                        <li><a href="cart-page.php">cart page</a></li>
                                        <li><a href="checkout-page.php">checkout page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>  
                        </div> 
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>



<section class="page-title center">
    <div class="container">
        <h2>checkout</h2>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="checkout-page.php">checkout</a></li>
        </ul>
    </div>
</section>



<div class="checkout-page">
    <div class="container">

        <!--Default Links-->
        <ul class="default-links">
            <li>Exisitng Customer? <a href="#">Click here to login</a></li>
        </ul>

        <div class="row clearfix">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <!--Billing Details-->
                <div class="billing-details">
                    <div class="shop-form">
                        <form method="post" action="http://world5.commonsupport.com/html2/kindergarten/checkout.php">

                            <div class="default-title"><h2>Billing Details</h2></div>

                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Company name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address <sup>*</sup> </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Town / City <sup>*</sup> </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Postcode / Zip</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>


                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address </div>
                                    <input type="email" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>



                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country <sup>*</sup> </div>
                                    <select name="country">
                                        <option>United Kingdom (UK)</option>
                                        <option>Pakistan</option>
                                        <option>USA</option>
                                        <option>CANADA</option>
                                        <option>INDIA</option>
                                    </select>
                                </div>

                               

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> ??? <label for="account-option">Creat an account?</label></div>
                                </div>

                            </div>
                        </form>

                    </div>

                </div><!--End Billing Details-->
            </div>

            <div class="col-md-5 col-sm-12 col-xs-12">
                <!--Your Order-->
                <div class="your-order">
                    <div class="default-title"><h2>Your Order</h2></div>
                    <!--Orders Table-->
                    <ul class="orders-table">
                        <li class="table-header clearfix"><div class="col">Product</div><div class="col">Total</div></li>
                        <li class="clearfix"><div class="col st-2"><div class="prod-box"><img src="images/product/6.jpg" width="45" height="60" alt=""> Grunge Fashion</div> </div><div class="col st-2">$15.00</div></li>
                        <li class="clearfix"><div class="col st-4">SubTotal</div><div class="col st-4">$15.00</div></li>
                        <li class="clearfix total"><div class="col st-3">Order Total</div><div class="col st-3">$15.00</div></li>
                    </ul>

                    <div class="coupon-code">
                        <div class="form-group">
                            <div class="field-group"><input type="text" name="code" value="" placeholder="Enter coupon code if have" required=""></div>
                            <div class="field-group btn-field"><button type="submit" class="theme-btn btn-style-one">Apply</button></div>
                        </div>
                    </div>

                </div><!--End Your Order-->


                <!--Place Order-->
                <div class="place-order">
                    <div class="default-title"><h2>Payment Method</h2></div>


                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Cheque Payment</strong><span class="small-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Paypal</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2">
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <button type="button" class="theme-btn btn-style-one">Place Order <span class="fa fa-long-arrow-right"></span></button>

                </div><!--End Place Order-->
            </div>

        </div>

    </div>
</div>



<section class="footer">

    <div class="footer-bottom">
        <div class="footer-bottom-bg">
            <div class="container">
                <div class="pull-left">
                    <figure><a href="#"><img src="images/logo/2.png" alt=""></a></figure>
                </div>
                <div class="pull-right">
                    <div class="menu">
                        <ul class="clearfix">
                            <li><a href="index.php">home</a></li>
                            <li><a href="event.php">event</a></li>
                            <li><a href="blog.php">page</a></li>
                            <li><a href="gallery.php">gallery</a></li>
                            <li><a href="news.php">news</a></li>
                            <li><a href="shop.php">shop</a></li>
                            <li><a href="contact.php">contact</a></li>
                        </ul>
                    </div>
                    <div class="copy-right">
                        Copyright ?? <a href="mailto:support@templatepath.com"><span>Templatepath</span></a> 2016
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>


<!--Scroll to top-->
<div class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></div>



        <!-- jQuery js -->
    <script src="assets/jquery/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery ui js -->
    <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- wow js -->
    <script src="assets/wow.js"></script>

    <!-- owl carousel js -->
    <script src="assets/owl.carousel-2/owl.carousel.min.js"></script>              <!-- jquery.bxslider js -->
    <script src="assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    <!-- jQuery validation -->
    <script src="assets/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- gmap.js helper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
    <!-- gmap.js -->
    <script src="assets/gmaps.js"></script>
    
    <!-- mixit u -->
    <script src="assets/jquery.mixitup.min.js"></script>
    <script src="assets/isotope.pkgd.min.js"></script>
    <script src="assets/jquery.countdown.min.js"></script>
    <script src="assets/masterslider/masterslider.js"></script>
    <script src="assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/SmoothScroll.js"></script>

    <!-- revolution slider js -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script src="assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="assets/scrollbar.js"></script>
    
    <script src="js/default-map-script.js"></script>
    <script src="js/script.js"></script>








</body>

<!-- Mirrored from world5.commonsupport.com/html2/kindergarten/checkout-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:53:29 GMT -->
</html>
