<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?>
    <?php else: ?>
    <link rel="host" href="<?php echo URLROOT; ?>">
    <meta name="description"
        content="Lewilis Technology Services, computer repair, electronics, laptops, desktop computers, computer peripherals and more">
    <meta name="author" content="the fundraiser">
    <link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <meta name="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
    <?php endif; ?>
    <link href="<?php echo URLROOT ?>/public/images/favicon.png" rel="shortcut icon">
    <title> Page Not Found | Lewilis Technology Services
    </title>
    <script src="https://kit.fontawesome.com/4bf47fa459.js" crossorigin="anonymous"></script>
    <!--====== Google Font ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,200&display=swap" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/stylesheets/css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/stylesheets/css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/stylesheets/css/app.css">

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/stylesheets/css/style.css">
    <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?>
    <?php else: ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S9PEWDP7X8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-S9PEWDP7X8');
    </script>

    <?php endif ?>
    <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?>
    <?php else: ?>
    <a href="https://api.whatsapp.com/send?phone=254710577667&text=Hi%2C+i+am+making+an+inquiry+from+lewilistechnolgyservice.co.ke."
        class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    <?php endif ?>

</head>

<body class="home __home">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt="">
        </div>
    </div>
    <div id="app">
        <!--====== Main Header ======-->
        <header class="header--style-1">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="<?php echo URLROOT; ?>">

                            <img src="images/logo/logo-1.png" alt="">Lewilis Tech</a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-1" type="text"
                                id="main-search" placeholder="Search">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                        </form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs"
                                type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                        title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="<?php echo URLROOT; ?>/users/account"><i
                                                        class="fas fa-user-circle u-s-m-r-6"></i>

                                                    <span>Account</span></a>
                                            </li>
                                            <li>

                                                <a href="<?php echo URLROOT; ?>/users/signup"><i
                                                        class="fas fa-user-plus u-s-m-r-6"></i>

                                                    <span>Signup</span></a>
                                            </li>
                                            <li>

                                                <a href="<?php echo URLROOT; ?>/users/login"><i
                                                        class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>log in</span></a>
                                            </li>
                                            <!--                                           <li>

                                    <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                        <span>Signout</span></a>
                                </li> -->
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left"
                                        title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a class="u-c-brand">ENGLISH</a>
                                                    </li>

                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:225px">
                                                    <li>

                                                        <a class="u-c-brand">ksh - Kenyan Shilling</a>
                                                    </li>

                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                        <a href="tel:+254710577667"><i class="fas fa-phone-volume"></i></a>
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:info@lewilistechnologyservice.co.ke"><i
                                                class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">

                            <button class="btn btn--icon toggle-mega-text toggle-button"
                                type="button"><Label>L</Label></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list">
                                    <li class="has-dropdown">

                                        <span class="mega-text">L</span>

                                        <!--====== Mega Menu ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mega-menu">
                                            <div class="mega-menu-wrap">
                                                <div class="mega-menu-list">
                                                    <ul>
                                                        <li class="js-active">

                                                            <a href="#!"><i class="fas fa-tv u-s-m-r-6"></i>

                                                                <span>Electronics</span></a>

                                                            <span class="js-menu-toggle js-toggle-mark"></span>
                                                        </li>
                                                        <li>

                                                            <a href="#!"><i class="fas fa-female u-s-m-r-6"></i>

                                                                <span>Software</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>
                                                        <li>

                                                            <a href="#!"><i class="fas fa-female u-s-m-r-6"></i>

                                                                <span>Bags & Other Accessories</span></a>

                                                            <span class="js-menu-toggle"></span>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <!--====== Electronics ======-->
                                                <div class="mega-menu-content js-active">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">Computer
                                                                        hardware</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">RAM</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">HARD DRIVES</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">WIFI MODULE</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">SCREENS</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">PERIPHERALS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">MOUSE</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">KEYBOARDS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">CHARGERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">OTHERS</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">LAPTOPS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">DELL</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">HEWLETTE PACKARD</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">TOSHIBA</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">ACER</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">DESKTOPS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">DELL</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">Hp</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">SERVERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">ACER</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>
                                                </div>
                                                <!--====== End - Electronics ======-->


                                                <!--====== Women ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="#!">

                                                                    <img class="u-img-fluid u-d-block" src=""
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="#!">

                                                                    <img class="u-img-fluid u-d-block" src=""
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== software ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">PROPRIETARY</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">windows</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">Adobe suite</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">Office</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">Linux</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">ANTI VIRUS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">Kaspersky</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">AVG</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">SMADAV</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">MCAFEE</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">DRIVERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">HP</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">DELL</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">MAC</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">TOSHIBA & MORE</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <br>

                                                </div>
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="#!">

                                                                    <img class="u-img-fluid u-d-block" src=""
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="#!">

                                                                    <img class="u-img-fluid u-d-block" src=""
                                                                        alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== software ======-->
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">BAGS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">laptop</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">satchels</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">HOLDERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!">laptop holders</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="#!">OTHERS</a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                                <li>

                                                                    <a href="#!"></a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <br>

                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                                type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="<?php echo URLROOT; ?>">HOME</a>
                                    </li>
                                    <li class="has-dropdown">

                                        <a>STORE<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a href="<?php echo URLROOT; ?>">Home</a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>

                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="<?php echo URLROOT; ?>/users/login">Signin / Already
                                                            Registered</a>
                                                    </li>
                                                    <li>

                                                        <a href="<?php echo URLROOT; ?>/users/signup">Signup /
                                                            Register</a>
                                                    </li>
                                                    <li>

                                                        <a href="<?php echo URLROOT; ?>/users/recovery">Lost
                                                            Password</a>
                                                    </li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <!--  <li class="has-dropdown has-dropdown--ul-left-100">

                                    <a href="dashboard.html">Dashboard<i
                                            class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                    

                                    <span class="js-menu-toggle"></span>
                                    <ul style="width:200px">
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a href="dashboard.html">Manage My Account<i
                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>



                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:180px">
                                                <li>

                                                    <a href="dash-edit-profile.html">Edit Profile</a>
                                                </li>
                                                <li>

                                                    <a href="dash-address-book.html">Edit Address Book</a>
                                                </li>
                                                <li>

                                                    <a href="dash-manage-order.html">Manage Order</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>

                                            <a href="dash-my-profile.html">My Profile</a>
                                        </li>
                                        <li class="has-dropdown has-dropdown--ul-left-100">

                                            <a href="dash-address-book.html">Address Book<i
                                                    class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>



                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:180px">
                                                <li>

                                                    <a href="dash-address-make-default.html">Address Make
                                                        Default</a>
                                                </li>
                                                <li>

                                                    <a href="dash-address-add.html">Add New Address</a>
                                                </li>
                                                <li>

                                                    <a href="dash-address-edit.html">Edit Address Book</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>

                                            <a href="dash-track-order.html">Track Order</a>
                                        </li>
                                        <li>

                                            <a href="dash-my-order.html">My Orders</a>
                                        </li>
                                        <li>

                                            <a href="dash-payment-option.html">My Payment Options</a>
                                        </li>
                                        <li>

                                            <a href="dash-cancellation.html">My Returns & Cancellations</a>
                                        </li>
                                    </ul>

                                </li> -->
                                            <li>

                                                <a href="<?php echo URLROOT; ?>/pages/cart">Cart</a>
                                            </li>
                                            <li>

                                                <a href="<?php echo URLROOT; ?>/pages/wishlist">Wishlist</a>
                                            </li>

                                        </ul>

                                    </li>
                                    <li>

                                        <a href="<?php echo URLROOT; ?>/pages/about">ABOUT US</a>
                                    </li>
                                    <li>

                                        <a href="<?php echo URLROOT; ?>/pages/contact">CONTACT US</a>
                                    </li>
                                    <li>

                                        <a href="<?php echo URLROOT; ?>/pages/faqs">FAQS</a>
                                    </li>
                                    <li>

                                        <a href="<?php echo URLROOT; ?>/pages/checkout">CHECKOUT</a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button
                                class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                                type="button"></button>

                            <span class="total-item-round">0</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li>

                                        <a href="<?php echo URLROOT; ?>"><i class="fas fa-home u-c-brand"></i></a>
                                    </li>
                                    <li>

                                        <a href="wishlist.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">2</span></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                <!--  <div class="card-mini-product">
                                        <div class="mini-product">
                                            <div class="mini-product__image-wrapper">

                                                <a class="mini-product__link" href="product-detail.html">

                                                    <img class="u-img-fluid"
                                                        src="images/product/electronic/product3.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="mini-product__info-wrapper">

                                                <span class="mini-product__category">

                                                    <a href="#!">Electronics</a></span>

                                                <span class="mini-product__name">

                                                    <a href="product-detail.html">Yellow Wireless
                                                        Headphone</a></span>

                                                <span class="mini-product__quantity">1 x</span>

                                                <span class="mini-product__price">$8</span>
                                            </div>
                                        </div>

                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                    </div> -->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->


                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">SUBTOTAL</span>

                                                    <span class="subtotal-value">0.00</span>
                                                </div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2"
                                                        href="<?php echo URLROOT; ?>/pages/checkout">PROCEED TO
                                                        CHECKOUT</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2"
                                                        href="<?php echo URLROOT; ?>/pages/cart">VIEW CART</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->
        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 u-s-m-b-30">
                                <div class="empty">
                                    <div class="empty__wrap">

                                        <span class="empty__big-text">404</span>

                                        <span class="empty__text-1">Looks like you're in wrong place.</span>

                                        <a class="empty__redirect-link btn--e-brand" href="<?php echo URLROOT ?>">GO TO
                                            HOME</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->
        </div>
        <!--====== End - App Content ======-->
        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>00100, Nairobi, Moi Avenue Cubes Exhibition</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+254) 710 577 667</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>info@lewilistechnolgyservice.co.ke</span>
                                </div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover"
                                                href="https://www.facebook.com/Lewilistechnologyservices"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#!"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#!"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#!"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/cart">Cart</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/users/account">Account</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/manufacturer">Manufacturer</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/finance">Finance</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/shop">Shop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/about">About us</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/contact">Contact Us</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/faqs">Faqs</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>/pages/order">Delivery</a>
                                                </li>
                                                <li>

                                                    <a href="<?php echo URLROOT; ?>">Store</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter"
                                            placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn"
                                            type="submit">SUBSCRIBE</button>
                                    </div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                        promotions and discounts</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2016</span>

                                    <a href="<?php echo URLROOT ?>">Lewilis Technology Services</a>

                                    <span>All Right Reserved</span>
                                </div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><img src="<?php echo URLROOT; ?>/public/images/mpesa.png" alt="" class="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="<?php echo URLROOT; ?>">Home</a>
                                        </li>
                                        <!--   <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a>
                                        </li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span>
                                    </div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del
                                                class="pd-detail__del">$28.97</del>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</span>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i
                                                    class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input
                                                            class="input-counter__text input-counter--text-primary-style"
                                                            type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span>
                                                    </div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span>
                                    </div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt="">
                                    </div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow"
                                            data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                            CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO
                                            CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        <div class="modal fade new-l" id="newsletter-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row u-s-m-x-0">
                            <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                                <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                                    <img class="u-img-fluid u-d-block"
                                        src="<?php echo URLROOT; ?>/images/images/products/newsletter.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-6 new-l__col-2">
                                <div class="new-l__section u-s-m-t-30">
                                    <div class="u-s-m-b-8 new-l--center">
                                        <h3 class="new-l__h3">Newsletter</h3>
                                    </div>
                                    <div class="u-s-m-b-30 new-l--center">
                                        <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals,
                                            special sales and more.</p>
                                    </div>
                                    <form class="new-l__form">
                                        <div class="u-s-m-b-15">

                                            <input class="news-l__input" type="text" placeholder="E-mail Address">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button>
                                        </div>
                                    </form>
                                    <div class="u-s-m-b-15 new-l--center">
                                        <p class="new-l__p2">By Signing up, you agree to receive Reshop
                                            offers,<br />promotions and other commercial messages. You may unsubscribe
                                            at any time.</p>
                                    </div>
                                    <div class="u-s-m-b-15 new-l--center">

                                        <a class="new-l__link" data-dismiss="modal">No Thanks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->
    </div>
</body>
<script src="<?php echo URLROOT ?>/public/javascript/jquery.min.js"></script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="<?php echo URLROOT ?>/public/javascript/vendor.js"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="<?php echo URLROOT ?>/public/javascript/jquery.shopnav.js"></script>

<!--====== App ======-->
<script src="<?php echo URLROOT ?>/public/javascript/app.js"></script>

<?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?>
<?php else: ?>
<!--====== Google Maps ======-->
<script src="<?php echo URLROOT ?>/public/javascript/map-init.js"></script>
<!--====== Noscript ======-->
<?php endif; ?>
<?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/products') !== false): ?>
<script src="<?php echo URLROOT ?>/public/javascript/products.min.js"></script>
<?php endif; ?>
<noscript>
    <div class="app-setting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="app-setting__wrap">
                        <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                            JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>

</html>