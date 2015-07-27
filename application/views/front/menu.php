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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
    <script>
        var categoryType = '<?php echo "#".strtoupper($cat) ?>';
    </script>
</head>
<body>
    <div class="page-content show-content">
        
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->
        
        
        
        

        <div class="dishes-filters wood-background">
            <div class="container">
            <?php if(count($categories)>0){ ?>
                <div class="padding-10 margin-top">
                    <div class="background-white ovh filter-cats-wrap">
                        <ul class="clean-list inline-list filter-cats center-me" id="FOOD_CATEGORY">
                            <li><a href="javascript:;">All</a></li>
                            <?php foreach($categories as $category){
                                echo '<li id="'.strtoupper($category->title).'"><a href="javascript:;">'.$category->title.'</a></li>';
                            }?>
                          
                        </ul> <!-- /.filter cats -->
                    </div>
                </div>

                <div class="background-white padding margin-top dishes-block">
                    <ul class="clean-list filter-items menu-items row">
                        <?php foreach($foods as $food){
                        echo '<li class="col-md-3 col-sm-6 col-xs-6 '.strtolower($food->foodtype_title).'" id="'.$this->encryption->encrypt($food->foodid).'">
                            <div>
                                <div>
                                    <figure>
                                        <a href="'.$food->thumbnailurl.'" class="zoom-image"><img src="'.$food->thumbnailurl.'" alt="menu item" style="min-height:252px;"></a>
                                        <figcaption class="aligncenter">
                                           
                                           <!-- <a href="'.site_url().'/menu/food/'.$food->foodid.'" title="'.$food->food_title.'">'.$food->food_title.'</a> -->
                                        <a herf="#" style="cursor:pointer" onclick="showdetailpopup('.$food->foodid.')" title="'.$food->food_title.'">'.$food->food_title.'</a>
                                        </figcaption>
                                    </figure>
                                </div> <!-- <hr /> -->
                                <div class="filters-meta">
                                    <!-- <div class="tags-list aligncenter">'.$food->food_description.'
                                     </div> --><hr /><hr />
                                    <div class="price aligncenter padding-half-top">
                                        <span>$'.$food->price.'</span>
                                    </div>
                                </div>
                            </div>
                        </li>';
                        }
            }else{
                echo '<div class="background-white padding margin-top dishes-block background-green"><span class="center-me" style="font-weight:bold; color:white;">NO CATEGORY</span></div>';
            }?>


                    </ul>
                </div>
            </div>
        </div>

        <!--  Footer -->
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
        <!-- End Pop up box -->
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
    </div>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script>
        $(function(){
            if(categoryType!="#"){
                $("#FOOD_CATEGORY").find(categoryType).find("a").trigger('click');
            }
        });

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
</body>
</html>
