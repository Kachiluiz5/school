<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from world5.commonsupport.com/html2/kindergarten/cart-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:53:25 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Nashville Kindergarten || Responsive HTML 5 Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/common-style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body class="cart-page">
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
        <h2>cart page</h2>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="cart-page.php">cart</a></li>
        </ul>
    </div>
</section>



<!--Cart Section-->
<section class="cart-section">
    <div class="container">
        
        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th class="prod-column">Product</th>
                            <th>&nbsp;</th>
                            <th class="price">Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="remove"><a href="#" class="remove-btn"><span class="fa fa-trash-o"></span></a></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td colspan="2" class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="images/product/13.jpg" alt=""></a></figure>
                                    <h3 class="prod-title padd-top-20">Stuffed soft sitting</h3>
                                </div>
                            </td>
                            <td class="price">$ 155</td>
                            <td class="qty"><input class="quantity-spinner" type="text" value="1" name="quantity"></td>
                            <td class="sub-total">$ 155</td>
                            <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-times"></span></a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
            <div class="update-cart-box clearfix">
                <div class="pull-left">
                    <div class="apply-coupon clearfix">
                        <div class="form-group clearfix">
                            <input type="text" name="coupon-code" value="" placeholder="Your coupon code">
                        </div>
                        <div class="form-group clearfix">
                            <button type="button" class="thm-btn thm-blue-bg btn-style-one">Apply</button>
                        </div>
                    </div>
                </div>
                
                <div class="pull-right">
                    <button type="button" class="thm-btn update-cart btn-style-one">Update Cart</button> &nbsp;
                </div>
                
            </div>
            
            
            <div class="row clearfix">

                
                <div class="column cart-total col-md-6 col-sm-12 col-xs-12 col-md-offset-6">
                    <h3>Cart Totals</h3>
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li class="clearfix"><span class="col col-title">Sub Total</span><span class="col">$15.00</span></li>
                        <li class="clearfix total"><span class="col col-title">Order Total</span><span class="col">$15.00</span></li>
                    </ul>
                    
                    <div class="margin-top-30"><a href="checkout-page.php" class="thm-btn thm-blue-bg btn-style-one">Proceed to Checkout <span class="fa fa-long-arrow-right"></span></a></div>
                </div>
                
            </div>
            
            
        </div>
        
    </div>
</section>






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

<!-- Mirrored from world5.commonsupport.com/html2/kindergarten/cart-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Mar 2023 10:53:25 GMT -->
</html>
