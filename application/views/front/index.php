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
    <style>
        .imgSize{
            min-height: 133.25px;
        }
        #fooditemdetail{
          word-break: break-word;
        }
    </style>

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
                        <!-- Best Hot -->    
                        <?php include_once '_besthot.php'; ?>
                        <!-- End Best Hot -->
                            <div class="col-md-7" id="FOODS">
                                <div class="content-sliders background-white padding" id="content_sliders">
                                    <?php 
                                        $count=0;
                                        foreach($categories as $category){
                                            if($category->TOTL==0){
                                                continue;
                                            }
                                            $count++;
                                    ?>
                                    <div class="relative <?php if($count>1) echo 'margin-top padding-top border-top';?>">
                                        <h2 class="entry-title no-margin"><?php echo $category->title?></h2>
                                        <div class='slider <?php echo str_replace(" ","",strtolower($category->title))?>-slider' id='<?php echo str_replace(" ","",strtolower($category->title))?>'>
                                            <ul class="slidesContainer clean-list row">
                                               <?php foreach($foods as $food){ 
                                                        if($food->foodtypeid == $category->foodtypeid){
                                                ?>
                                               <li class="">
                                                    <div>
                                                        <div>
                                                            <figure>
                                                                <a href="<?php echo $food->thumbnailurl ?>" class="zoom-image"><img src="<?php echo $food->thumbnailurl ?>" class="imgSize" alt="<?php echo $food->food_title ?>"></a>
                                                                <figcaption>
                                                                    <a onclick="showdetailpopup(<?php echo $food->foodid ?>)" href="javascript:;" title="<?php echo $food->food_title ?>"><?php echo $food->food_title ?></a>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                        <div class="price padding-half-top">
                                                            <span><?php echo '$ '.$food->price ?></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php   } 
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>



                                </div>
                            </div>
                         </div>
                    </div>
                </div>
        </section>
        
         <!-- pop up box -->
                        <div class="modal fade" id="myModal" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h2 class="entry-title" id="fooditemtitle"</h2>
                                </div>
                                <div class="modal-body" style="height: 450px;">
                                        <div class="col-sm-6">
                                           <div style="padding: 0 0 0 0;" class="content-dish-day relative">                             
                                                <figure>                                        
                                                    <a href="#"><img alt="portfolio item" src="" id="fooditemimage"></a>                                                                        
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                               <h2 class="entry-title" id="fooditemdetail"></h2>
                                            </div>
                                            
                                            <button style="font-family: Grand Hotel; font-size: 30px; width: 80px;" class="btn btn-primary" id="fooditemprice"></button>
                                            
                                        </div>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

         <script>
            function showdetailpopup(id){
            $.post("<?php echo base_url()?>menu/getfood",{id: id}, function(data){
                $("#fooditemtitle").text(data.food_title);
                $("#fooditemprice").text("$"+data.price);
                $("#fooditemdetail").html(data.food_description);
                $("#fooditemimage").attr("src",""+data.thumbnailurl+"");
                $('#myModal').modal('show');
            });
            
        }
         
        </script>
        <!-- End Pop up box -->

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
    <script type="text/javascript">
        $(function(){

            pageSliders = function() {
              "use strict";
              jQuery(document).ready(function() {

                var slider_breakfast = jQuery('#FOODS .slider').sudoSlider({
                  numeric: false,
                  responsive: true,
                  vertical: false,
                  autoHeight: true,
                  moveCount: 4,
                  prevhtml: ' <a href="#" class="prev-nav"></a> ',
                  nexthtml: ' <a href="#" class="next-nav"></a> ',
                  controlsattr: 'id="breakfast_controls" class="controls"',
                  numericattr: 'class="slider-nav"',
                  slideCount: 4,
                  continuous: false,
                  animationZIndex: 10
                });

                if (jQuery('#FOODS .slider').length) {
                  if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
                    slider_breakfast.setOption('slideCount', 3);
                    slider_breakfast.setOption('moveCount', 3);
                  } else if (jQuery(window).width() < 468) {
                    slider_breakfast.setOption('slideCount', 2);
                    slider_breakfast.setOption('moveCount', 2);
                  } else {
                    slider_breakfast.setOption('slideCount', 4);
                    slider_breakfast.setOption('moveCount', 4);
                  }

                  jQuery(window).resize(function() {
                    if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
                      slider_breakfast.setOption('slideCount', 3);
                      slider_breakfast.setOption('moveCount', 3);
                    } else if (jQuery(window).width() < 468) {
                      slider_breakfast.setOption('slideCount', 2);
                      slider_breakfast.setOption('moveCount', 2);
                    } else {
                      slider_breakfast.setOption('slideCount', 4);
                      slider_breakfast.setOption('moveCount', 4);
                    }
                  });
                }

              });
            }
            pageSliders();
        });

    </script>
</body>
</html>
