<?php

$redirect=Model::getRedirect();
$url='';

foreach ($redirect as $row){ ?>

    <?php
    if ($_SERVER['QUERY_STRING']=='url='.$row['currentUrl'].''){
        header('location:'.URL.''.$row['targetUrl']);
    }
    ?>

<?php } ?>
<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <base href="<?= URL; ?>">
    <?php
    include "meta.php";
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/css/royal-preload.css" />
</head>

<body class="royal_preloader">
<div id="page" class="site">
    <header id="site-header" class="site-header header-style-2 sticky-header header-fullwidth">

        <?php
        $model=new Model;
        $menu=$model->getMenu();
        ?>

        <!-- Main header start -->
        <div class="octf-main-header">
            <div class="octf-area-wrap">
                <div class="container-fluid octf-mainbar-container">
                    <div class="octf-mainbar">
                        <div class="octf-mainbar-row octf-row">
                            <div class="octf-col">
                                <div id="site-logo" class="site-logo">
                                    <a href="<?= URL ?>">
                                        <img class="logo-static" src="assets/images/optimized-nxo9.png" alt="Onum">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul id="primary-menu" class="menu" style="display: flex;">
                                        <?php
                                        $i=0;
                                        foreach ($menu as $level1){ ?>
                                            <li style="display: flex;order: <?= $level1['menuOrder']; ?>" class="<?php if (isset($level1['children'])){echo 'menu-item-has-children';} ?>">

                                                <a href="<?= $level1['link']; ?>">
                                                    <?= $level1['title']; ?>
                                                </a>

                                                    <?php if (isset($level1['children'])){ ?>

                                                        <ul class="sub-menu">
                                                            <?php
                                                            if (isset($level1['children'])){
                                                                $children=$level1['children'];
                                                            }else{
                                                                $children=[];
                                                            }

                                                            foreach ($children as $level2){ ?>
                                                                <li>
                                                                    <a href="<?= $level2['link']; ?>">
                                                                        <?= $level2['title']; ?>
                                                                    </a>
                                                                </li>


                                                            <?php } ?>
                                                        </ul>

                                                    <?php } ?>

                                        </li>
                                        <?php } ?>
                                    </ul>
                                </nav><!-- #site-navigation -->
                            </div>
                            <div class="octf-col text-right">
                                <!-- Call To Action -->
                                <div class="octf-btn-cta">

                                    <div class="octf-header-module">
                                        <div class="toggle_search octf-cta-icons">
                                            <i class="flaticon-search"></i>
                                        </div>
                                        <!-- Form Search on Header -->
                                        <div class="h-search-form-field">
                                            <div class="h-search-form-inner">
                                                <form role="search" method="get" id="search-form" class="search-form" action="">
                                                    <input type="search" class="search-field" placeholder="جستجو..." value="" name="s">
                                                    <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="octf-header-module">
                                        <div class="btn-cta-group btn-cta-header">
                                            <a class="octf-btn octf-btn-third" href="#">تماس با ما</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main header close -->

        <!-- Header mobile open -->
        <div class="header_mobile">
            <div class="container">
                <div class="mlogo_wrapper clearfix">
                    <div class="mobile_logo">
                        <a href="<?= URL; ?>"><img src="assets/images/optimized-nxo9.png" alt="Onum" data-lazy-src="assets/images/logo-dark.svg">
                            <noscript><img src="assets/images/logo-dark.svg" alt="Onum"></noscript>
                        </a>
                    </div>
                    <div class="octf-btn-cta">
                        <div class="octf-header-module cart-btn-hover">
                            <div class="h-cart-btn octf-cta-icons">
                                <a class="cart-contents" href="cart.html" title="View your shopping cart">
                                    <i class="flaticon-supermarket"></i>
                                    <span class="count">0</span>
                                </a>
                            </div>
                            <div class="site-header-cart">
                                <div class="widget woocommerce widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="mmenu_wrapper">
                    <div class="mobile_nav">
                        <ul style="display: flex;flex-direction: column;" id="menu-main-menu" class="mobile_mainmenu">
                            <?php
                            foreach ($menu as $level1){ ?>
                                <li style="order: <?= $level1['menuOrder']; ?>" class="menu-item-has-children current-menu-item current-menu-ancestor">
                                    <a href="<?= $level1['link']; ?>" >
                                        <?= $level1['title']; ?>
                                    </a>
                                    <?php if (isset($level1['children'])){ ?>

                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($level1['children'])){
                                                $children=$level1['children'];
                                            }else{
                                                $children=[];
                                            }

                                            foreach ($children as $level2){ ?>
                                                <li>
                                                    <a href="<?= $level2['link']; ?>">
                                                        <?= $level2['title']; ?>
                                                    </a>
                                                </li>


                                            <?php } ?>
                                        </ul>

                                    <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header mobile close -->

    </header>

</div><!-- #page -->


</body>
</html>
<script type="text/javascript">
    window.jQuery = window.$ = jQuery;
    (function($) { "use strict";
        //Preloader
        Royal_Preloader.config({
            mode           : 'logo',
            logo           : 'images/logo-dark.svg',
            logo_size      : [160, 75],
            showProgress   : true,
            showPercentage : true,
            text_colour: '#000000',
            background:  '#ffffff'
        });
    })(jQuery);
</script>