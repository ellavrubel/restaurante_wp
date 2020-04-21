

<!DOCTYPE html>
<<?php bloginfo('language'); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <title><?php bloginfo('description'); ?></title>
                    <!--   Fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,700,700i|Poppins:400,500,600|Sacramento|Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <?php wp_head(); ?>


</head>

<body>

<header class="header container-fluid" style="background-image: url(<?php the_field('header'); ?>)" >
    <div class="container">
        <div class="d-flex flex-wrap-reverse flex-md-nowrap  justify-content-sm-around justify-content-md-between welcome-wrapper">
            <div class="welcome align-self-end">
            <p class="header__welcome">
Welcome to <span>restorantBD.com</span>
            </p>
            </div>
            <div class="header__search">
                <form class="header__form" action="/" target="_blank">
                    <input type="text" name="search" placeholder="Quick Search">
                    <button class="header__search-btn" type="submit" value="search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="header__login d-flex justify-content-around">

                <a class="LoginModal" href="#modalLogin"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Login.png" alt="Log in"></a>

                <p class="header__delivery">
                    For Delivery:  <?php the_field('header__delivery'); ?>
                    </p>
                <div class="col menu__gamb">
                    <a class="menu menu__toggle" href="/"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-gutters header__menu">
        <div class="container">
        <div class="row row__menu">
            <div class="col-1">
                <img class="header__logo img-fluid" src="<?php bloginfo( 'template_url' ); ?>/assets/img/Logot.png" alt="">
            </div>
            <div class="offset-2 col-9 header__nav d-flex align-self-center">
                <div class="header__list">
                    <a class="header__list-item" href="index.html">HOME</a>
                    <a class="header__list-item" href="#about">ABOUT</a>
                    <a class="header__list-item" href="index.html">PAGE</a>
                    <a class="header__list-item" href="#menu">MENU</a>
                    <a class="header__list-item" href="#gallery">GALLERY</a>
                    <a class="header__list-item" href="#blog">BLOG</a>
                    <a class="header__list-item" href="/">SHOPS</a>
                    <a class="header__list-item" href="#contact">CONTACT</a>
                    <a class="header__list-item shop" href="#modalShop"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/shop_basket.png" alt="shop-basket"></a>
                    <a class="header__list-item header__list-item_btn" href="#modalReservation">RESERVATION</a>
                </div>
            </div>
        </div>
        </div>
    </div>
        <div class="header__text animated zoomIn">
            <p class="title title_header">
                        RestorantBD is the name of pure food
                        </p>
            <p class="subtitle subtitle_header">
                        We Provide 100% Pure & Healthy Food
                        </p>
            <p class="header__text-description">
                        Europe is so much more than just ancient history, kings and queens, castles and churches. Europe is also home to some of the tastiest and most interesting food in the world – but what should you eat and where? What are some examples of traditional European food? Let us show you the 1960s
                        </p>
        </div>
        <div class="header__buttons">
            <a class="btn btn_aboutus animated fadeInLeft">ABOUT US</a>
            <a class="btn btn_seemenu animated fadeInRight">SEE MENU</a>
        </div>
        <div class="header__dots">
            <img class="reddot" src="<?php bloginfo( 'template_url' ); ?>/assets/img/reddot.png" alt="">
            <img class="whitedot" src="<?php bloginfo( 'template_url' ); ?>/assets/img/whitedot.png" alt="">
            <img class="whitedot" src="<?php bloginfo( 'template_url' ); ?>/assets/img/whitedot.png" alt="">
        </div>
</header>

