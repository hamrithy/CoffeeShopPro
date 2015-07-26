<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
    <div class="page-content show-content">
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <!-- Slideshow -->
        <?php include_once '_slideshow.php'; ?>
        <!-- End Slideshow -->

        <!-- Service -->

        <?php include_once '_service.php'; ?>
        <!-- End Service -->

        <!-- Best Offer -->

        <?php include_once '_bestoffer.php';?>
        <!-- End Best Offer -->

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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Mascarpone mousse with nuts & basil</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Mascarpone mousse with nuts & basil</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Sandwiches with fried bacon & sauce</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Spain Hot Latte</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Hot Choccalate</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Cappuccino</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Hot Choccalate</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Spain Hot Latte</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Sandwiches with fried bacon & sauce">Iced Latte</a>
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
                                                                    <a href="<?php echo site_url()?>/front/post" title="Mascarpone mousse with nuts & basil">Coffee Frappe</a>
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
        
        <!-- Visit us -->
        <?php include_once '_visitus.php' ; ?>


        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>

    <!-- Scripts -->
   
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
</body>
</html>
