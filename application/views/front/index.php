<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TSD Web Template</title>
    <meta name="description" content="Great theme for creative people">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/style_front/img/favicon/favicon-apple.html" /> <!-- 152x152 -->
    <link rel="icon" href="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="<?php echo base_url()?>public/style_front/img/favicon/favicon.html"> <!-- 32x32 or 64x64 -->
    
    <!-- Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>

</head>
<body>
    <div class="page-content show-content">
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="section section-slider">
                <div id="home_slider" class="home-slider">
                    <ul class="clean-list slidesContainer">
                        <li class="slide">
                                <header class="aligncenter">
                                    <h2 class="entry-title">*Welcome to Cafe Chataeu*</h2>
                                    <h3 class="entry-title-secondary">Summer Menu</h3>
                                    <a href="<?php echo site_url()?>/front/menu" class="view center-me">View<i></i></a>
                                </header>
                        </li>

                        <li class="slide">
                            <div class="container">
                                <header class="aligncenter">
                                    <h2 class="entry-title">*The Best F&amp;B Services*</h2>
                                    <h3 class="entry-title-secondary">Lunch Time</h3>
                                    <a href="<?php echo site_url()?>/front/menu" class="view center-me">View<i></i></a>
                                </header>
                            </div>
                        </li>

                        <li class="slide">
                            <div class="container">
                                <header class="aligncenter">
                                    <h2 class="entry-title">*Alex Food Court*</h2>
                                    <h3 class="entry-title-secondary">Food Guide</h3>
                                    <a href="<?php echo site_url()?>/front/menu" class="view center-me">View<i></i></a>
                                </header>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <section class="section section-services">
            <div class="container">
                <header class="entry-header aligncenter section-header section-services-header margin-top-60">
                    <h2 class="entry-title">
                        Services
                    </h2>
                    <h3 class="entry-title-desc">
                        Visit our Cafe Shop, impeccable service will impress you
                    </h3>   
                </header>
            
                <ul class="clean-list services-list featured-items row">
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="<?php echo site_url()?>/front/recipe" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
                                    <img src="<?php echo base_url()?>public/style_front/images/services/best-cousine.jpg" alt="Best Cousine" class="" />
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-orange best-cousine-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="<?php echo site_url()?>/front/recipe">Best cousine</a></h4><hr />
                                <div class="content padding">
                                    <p>
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
                                    </p>
                                </div>
                                    <div class="svg-container">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="<?php echo site_url()?>/front/recipe" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
                                    <img src="<?php echo base_url()?>public/style_front/images/services/ideal-place.jpg" alt="Ideal Place" class="" />
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-orange ideal-place-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="<?php echo site_url()?>/front/recipe">Hot Lovers</a></h4><hr />
                                <div class="content padding">
                                    <p>
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
                                    </p>
                                </div>
                                    <div class="svg-container">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4">
                        <div>
                            <figure class="ovh">
                                <a href="<?php echo site_url()?>/front/recipe" class="font-4x grey text-dark-blue hover-blue hover-scale-120 transition-medium">
                                    <img src="<?php echo base_url()?>public/style_front/images/services/good-rest.jpg" alt="Good Rest" />
                                </a>
                            </figure>
                            <div class="content-block background-white border-top-green good-rest-icon service-icon">
                                <h4 class="entry-title pre-line padding"><a href="<?php echo site_url()?>/front/recipe">Cold Lover</a></h4><hr />
                                <div class="content padding">
                                    <p>
                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart
                                    </p>
                                </div>
                                    <div class="svg-container">
                                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                            <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4" /></svg>
                                    </div>
                            </div>
                        </div>
                    </li>
                </ul><!-- /.featured-items -->
                
            </div>
        </section>

        <section class="section section-offer">
            <div class="container">
                <div class="offer-block section-block margin-section-block">
                    <div class="row no-margin">
                        <div class="col-md-6 no-padding">
                            <div class="offer-background"></div>
                        </div>
                        <div class="col-md-6 no-padding">
                            <header>
                                <h2 class="entry-title aligncenter background-blue no-margin">Best Offer</h2>
                            </header>
                            <div class="offer content-offer">
                                <h3 class="entry-title no-margin aligncenter">Breakfasts<strong class="crearfix">07<sup>00</sup> - 10 <sup>00</sup></strong></h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                        <div class="shape-round double-round round-offer">
                                            <div class="round-center">
                                                <div class="center-me">only for<strong class="background-white">$5</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-dishes">
            <div class="container">
                <div class="section-block dishes-block">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="content-dish-day relative">
                                   <header class="round-offer">
                                        <div class="shape-round background-green dish-icon">
                                                <h2 class="entry-title center-me">dish of 
                                                the day</h2>
                                        </div>
                                   </header>

                                   <figure>
                                        <a href="<?php echo site_url()?>/front/post"><img src="<?php echo base_url()?>public/style_front/images/dish-of-day.jpg" alt="portfolio item"></a>
                                        <figcaption class="background-white">
                                            <h2 class="entry-title no-margin aligncenter padding-top">Best Hot</h2>
                                            <div class="price center-me background-orange half-padding">$ 2.30</div>
                                        </figcaption>
                                    </figure>
                               </div>
                            </div>

                            <div class="col-md-7">
                                <div class="content-sliders background-white padding" id="content_sliders">
                                    <div class="relative">
                                        <h2 class="entry-title no-margin">Snack</h2>
                                        <div class="slider breakfast-slider" id="breakfast">
                                            <ul class="slidesContainer clean-list row">
                                               <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts &amp; basil">Mascarpone mousse with nuts &amp; basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$14.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Donut with scrambled eggs and bacon</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$11.00</span>
                                                        </div>
                                                    </div>
                                                </li>                                                

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts &amp; basil">Mascarpone mousse with nuts &amp; basil</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$14.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cookies-with-honey-cream.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Cookies with honey cream and bananas</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$07.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-with-fried-bacon.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Sandwiches with fried bacon &amp; sauce</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$10.00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative margin-top padding-top border-top">
                                        <h2 class="entry-title no-margin">Hot</h2>
                                        <div class="slider lunch-slider" id="lunch">
                                            <ul class="slidesContainer clean-list row">
                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts &amp; basil">Spain Hot Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Hot Choccalate</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot3.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot3.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Hazelnut latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$04.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot4.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot4.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Cappuccino</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Hot Choccalate</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/hot1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts &amp; basil">Spain Hot Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="relative margin-top padding-top border-top">
                                        <h2 class="entry-title no-margin">Cold</h2>
                                        <div class="slider lunch-slider" id="dinner">
                                            <ul class="slidesContainer clean-list row">

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold1.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold1.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon &amp; sauce">Iced Latte</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold2.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold2.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts &amp; basil">Coffee Frappe</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$4.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold3.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold3.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Mocha Coffee</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li  class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold4.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold4.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Donut with scrambled eggs and bacon">Iced Caramel Macchiato</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$3.00</span>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo base_url()?>public/style_front/images/dishes/cold5.jpg" class="zoom-image"><img src="<?php echo base_url()?>public/style_front/images/dishes/cold5.jpg" alt="menu item"></a>
                                                                <figcaption>
                                                                    <a href="<?php echo site_url()?>/front/post" title="Cookies with honey cream and bananas">Ice Condensed Milk Coffee</a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span>$03.50</span>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>
                         </div>
                    </div>
                </div>
        </section>

        <section class="section section-visit-us">
            <div class="container">
                <div class="section-block visit-us-block">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <header>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2 class="entry-title ">Visit Us</h2>
                                        <h3 class="entry-title-description no-margin">visit our restaurant, impeccable service will impress you</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="chief"></div>
                                    </div>
                                </div>
                            </header>

                            <div class="visit-us content-visit-us">
                                <p>
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment
                                </p>
                                <h3 class="entry-title">We are waiting for you every day    08 - 23</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section section-map">
            <div class="gmap-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0735697958407!2d104.90781285!3d11.54658025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511db3ecf735%3A0x5cf67bd86b8a5463!2sAmerican+International+School!5e0!3m2!1sen!2s!4v1433996719629" height="480" style="border:0"></iframe>
            </div>
        </div>

        
        
        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>

</body>
</html>
