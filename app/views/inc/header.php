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
    <title> <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?> <?php echo $data['title']; ?>
        <?php else: ?>Lewilis Technolgy Services - Electronics, Computers, Antiviruses, Accessories & more<?php endif ?>
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