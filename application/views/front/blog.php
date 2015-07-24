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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style_front/css/screen.css">

    <script src="<?php echo base_url()?>public/style_front/js/modernizr.js"></script>
</head>
<body>
    <div class="page-content show-content">
    
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="wood-background post-content blog-content">
            <div class="container ">
                <div class="margin-top padding-top">
                    <div class="row no-margin">
                        <div class="col-md-9 no-padding ">
                            <div class="margin-right-6">
                                <ul class="clean-list background-white ">
                              
                              
                              
                                <?php foreach ($listPost as $p ){ ?>
                                <li class="post padding ">
                                    <header>
                                        <figure>
                                            <a href="post.html">
                                                <img src="<?php echo $p->thumbnailurl?>" alt="Featured Image" />
                                            </a>
                                        </figure>

                                        <div class="header-meta row no-margin">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <span class="date center-me pre-line aligncenter margin-half-top">
                                                    29
                                                    Jun
                                                </span>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <h2 class="entry-title"><?php echo $p->title ?></h2>
                                                <ul class="clean-list post-meta-list border-top row">
                                                    <li class="no-padding">
                                                        <a href="#" class="meta-link comments">1 comment</a> /
                                                        <a class="text-red hover-text-dark-red author" href="#">By Jack Raulf</a> / 
                                                        <div class="tag-list inline">
                                                            <a href="#" rel="tag">food</a>, <a href="#" rel="tag">chicken</a>
                                                        </div>

                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </header>
                                    <div class="entry-content border padding">
                                        <p class="padding">
                                            <?php echo $p->shortdescription ?>  
                                        </p>
                                    </div>
                                    <div class="read-more half-padding border ovh">
                                        <a href="post.html" class="alignright">Read More</a>
                                    </div>
                                </li>
								<?php } ?>


                                

                                 
                                </ul>
                                <div class="pagination margin-right-6">
                                    <ul class="page-numbers center-me clean-list ">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 no-padding">
                            <div class="main-sidebar sidebar-right">

                                <div class="widget widget-item widget_search">
                                    <form class="search-form" action="http://localhost/downtown/" role="search" method="get">
                                        <div class="submit-wrap">
                                            <input type="submit" class="search-button search-submit submit" value="">
                                        </div>
                                        <div class="search-wrap ovh">
                                           <input type="text" placeholder="Search" name="s" class="search-line opacity">
                                        </div>
                                    </form>
                                </div>

                                <div class="widget widget-item widget_recent_entries">      
                                    <h3>Recent Posts</h3>       
                                    <ul>
                                        <li>
                                            <a href="#">Catch the Wave</a>
                                        </li>
                                        <li>
                                            <a href="#">Bicycle Is Cool</a>
                                        </li>
                                        <li>
                                            <a href="#">How To Cook Healthy Food</a>
                                        </li>
                                        <li>
                                            <a href="#">Travel And Collect Impressions</a>
                                        </li>
                                        <li>
                                            <a href="#">Work Hard Or Go Home</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-item widget_recent_posts">
                                    <h3 >Recent News</h3>       
                                    <ul class="clean-list ovh">
                                        <li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="post.html">
                                                        <img src="<?php echo base_url()?>public/style_front/images/dishes/crispy-bacon-sandwich.jpg" alt="Сrispy Bacon sandwich" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding">
                                                <div class="entry-content inline">
                                                    <time class="text-center" datetime="2014-07-24">24.07.2014</time><a href="post.html" class="entry-title">Сrispy Bacon sandwich</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="post.html">
                                                        <img src="<?php echo base_url()?>public/style_front/images/dishes/sandwiches-fried-bacon.jpg" alt="Sandwiches Fried Bacon" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding">
                                                <div class="entry-content inline">
                                                    <time class="text-center" datetime="2014-08-11">11.08.2014</time><a href="post.html" class="entry-title">Sandwiches Fried Bacon</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="post.html">
                                                        <img src="<?php echo base_url()?>public/style_front/images/dishes/mascarpone-mousse.jpg" alt="Mascarpone Mousse" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding">
                                                <div class="entry-content inline">
                                                    <time class="text-center" datetime="2014-08-15">15.08.2014</time><a href="post.html" class="entry-title">How To Cook Healthy Food</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="post.html">
                                                        <img src="<?php echo base_url()?>public/style_front/images/dishes/icecream.jpg" alt="Icecream" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding">
                                                <div class="entry-content inline">
                                                    <time class="text-center" datetime="2014-08-16">16.08.2014</time><a href="post.html" class="entry-title">Icecream</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="row no-margin">
                                            <div class="col-md-3 no-padding">
                                                <figure>
                                                    <a href="post.html">
                                                        <img src="<?php echo base_url()?>public/style_front/images/dishes/donut-with-scrambled-eggs.jpg" alt="Donut with scrambled eggs" />
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-md-9 no-padding">
                                                <div class="entry-content inline">
                                                    <time class="text-center" datetime="2014-08-18">18.08.2014</time><a href="post.html" class="entry-title">Donut with scrambled eggs</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-item widget_archive">
                                    <h3>Archives</h3>
                                    <ul class="toggle-vertical archive-list clean-list grey-background ovh">
                                        <li>
                                            <input type="checkbox" id="toggle_archive" name="toggle-helper">
                                            <label for="toggle_archive" class="uppercase margin"><i class=""></i>2014</label>

                                            <div class="toggle-content text-dark-blue">
                                                <ul class="clean-list">
                                                    <li><a href="blog4635.html?page=single-blog">2013</a></li>
                                                    <li><a href="blog4635.html?page=single-blog">2012</a></li>
                                                    <li><a href="blog4635.html?page=single-blog">2011</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-item twitter_widget tesla_twitter_widget">
                                    <h3>Twitter</h3>
                                    <div class="tt_twitter">
                                        <ul class="twitter">
                                            <li>Thanks <a href="http://twitter.com/olidale">@olidale</a>, we'll think about creating a <a href="http://twitter.com/search?q=%23WordPress&amp;src=hash">#WordPress</a> plugin, regards!<span class="date">1 day ago</span></li>
                                            <li>How To: HTML5 Background Video <a href="http://t.co/E82ExrpLmI">http://t.co/E82ExrpLmI</a><span class="date">4 days ago</span></li><li class="last">Hi <a href="http://twitter.com/olidale">@olidale</a>, it's a custom one, do you like it?<span class="date">4 days ago</span></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="widget widget-item widget_categories">
                                    <h3>Categories</h3>
                                    <ul>
                                        <li class="cat-item cat-item-19"><a title="View all posts filed under Healty Food" href="http://teslathemes.com/demo/wp/sportify/?cat=19">Healty Food</a>
                                        </li>
                                        <li class="cat-item cat-item-1"><a title="View all posts filed under Sportify" href="http://teslathemes.com/demo/wp/sportify/?cat=1">Sportify</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-item widget_tag_cloud">
                                    <h3>Tags</h3>
                                    <div class="tagcloud">
                                        <a style="font-size: 22pt;" title="2 topics" class="" >Resaturant</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" href="#">Food</a>
                                        <a style="font-size: 14pt;" title="2 topics" class="" >Chinese foods</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Recept</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Meat</a>
                                        <a style="font-size: 8pt;" title="1 topic" class="" >Chicken</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--  Footer -->
        
        <?php include_once '_footer.php';?>
        
        <!--  End Footer -->
        
        
        
    </div>
    
    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/plugins.js"></script>
    <script src="<?php echo base_url()?>public/style_front/js/options.js"></script>
    <script type="text/javascript">
        var pagination = {
            id:'.pagination',
            currentPage: 1,
            perPage: 10,
            totalCount: 50,
            init: function(currentPage,perPage,totalCount,callback){
                this.currentPage = currentPage;
                this.perPage = perPage;
                this.totalCount = totalCount;
                this.generate();
                this.handlePageNumber();
                if(callback){
                   callback(this.perPage,this.offset());
                }
            },
            totalPages: function(){
                return Math.ceil(this.totalCount/this.perPage);
            },
            offset: function(){
                return (this.currentPage - 1) * this.perPage;
            },
            previousPage: function(){
                return this.currentPage - 1;
            },
            nextPage: function(){
                return parseInt(this.currentPage) + 1;
            },
            hasPreviousPage: function(){
                return this.previousPage() >=1 ? true : false;
            },
            hasNextPage: function(){
                return this.nextPage() <= this.totalPages() ? true : false;
            },
            generate: function(){
                var pages="";
                if(this.hasPreviousPage()){
                   pages +='<li style="padding-right: 50px;"><a style="width:60px;"href="javascript:;" class="first page-numbers">First</a></li>';
                }
                if(this.hasPreviousPage()){
                   pages +='<li style="padding-right: 85px;"><a style="width:85px;"href="javascript:;" class="prev page-numbers">Previous</a></li>';
                }
                var start = this.currentPage-4;
                var end = parseInt(this.currentPage)+4;
                if(start<=0){
                    end-= start-1;
                    start=1;
                }
                if(end>this.totalPages()){
                    end = this.totalPages();
                }
                for(var i=start;i<=end;i++){

                    if(this.currentPage==i){
                        pages +='<li><a href="javascript:;" class="page-numbers current">'+ i +'</a></li>';
                    }else{
                        pages +='<li><a href="javascript:;" class="page-numbers">'+ i +'</a></li>';
                    }
                }
                if(this.hasNextPage()){
                    pages +='<li><a href="javascript:;" class="next page-numbers">Next</a></li>';
                }
                if(this.hasNextPage()){
                   pages +='<li style="padding-left: 20px;"><a style="width:50px;"href="javascript:;" class="last page-numbers">Last</a></li>';
                }
                $(this.id).html('');
                $(this.id).html('<ul class="page-numbers center-me clean-list ">'+ pages +'</ul>');
            },
            handlePageNumber: function(){
                _this = this;
                $(this.id+' ul li').click(function(){
                    if($(this).find("a").hasClass("prev")){
                        if(_this.hasPreviousPage()){
                            _this.currentPage--;
                        }                        
                    }else if($(this).find("a").hasClass("next")){
                        if(_this.hasNextPage()){
                            _this.currentPage++;
                        }
                    }else if($(this).find("a").hasClass("first")){
                        if(_this.hasPreviousPage()){
                            _this.currentPage = 1;
                        }
                    }else if($(this).find("a").hasClass("last")){
                        if(_this.hasNextPage()){
                            _this.currentPage = _this.totalPages();
                        }
                    }else if($(this).find("a").hasClass("current")){

                    }else{
                        $(this).parents("ul").find("a").removeClass("current");
                        $(this).find("a").addClass("current");   
                        _this.currentPage = $(this).find("a").html();
                    }
                    _this.init(_this.currentPage,_this.perPage,_this.totalCount);
                });
            }
        };

        pagination.init(1,15,300);

        
/*        fillData = function(){
            $.ajax({
                type: "POST",
                url: '<?php  echo site_url()?>/blog/updateuserstatuspro',
                dataType: 'json',
                data: {
                    perPage: perPage,
                    pageNo: pageNo
                },
                success: function(data){
                    console.log("DATA:",data);                    
                }
            });
        }*/
    </script>
</body>
</html>
