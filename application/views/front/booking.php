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

</head>
<body>
    <div class="page-content show-content">
        
        
        <!-- Header -->
        
        <?php include_once '_header.php';?>
        
        <!-- End Header -->

        <section class="booking">
            <div class="container ">
                <header class="entry-header aligncenter section-header section-contact-header margin-top padding-top">
                    <h2 class="entry-title">
                        Select a Date to Start Booking
                    </h2>
                    <h3 class="entry-title-desc">
                        Reservation
                    </h3>   
                </header>

                <div class="booking-form-wrap padding">
                    <h3 class="entry-title">Choose the Date</h3><hr />
                    <h5 class="entry-title" id="msg" style="color: red"></h5>
                     <form class="tt-form booking-form margin-top padding-top" data-parsley-validate="" id="booking_form" action="<?php  echo site_url('booking/sendemail')?>" method="POST" novalidate>
         
                        <div class="row form-row"><!-- Start Row -->

                            <div class="col-md-2 column no-padding"><!-- Start Column -->
                                <div class="input-cover contact-line">
                                    <select class="select" name="select" id="DAY">
                                        <?php 
                                            for($i=1;$i<=31;$i++){
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>                                                                    
                            </div>

                            <div class="col-md-2 column no-padding"><!-- Start Column -->
                                <div class="input-cover contact-line">
                                    <select class="select" name="select" id="MONTH">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>                                                                    
                            </div>

                            <div class="col-md-2 column no-padding"><!-- Start Column -->
                                <div class="input-cover contact-line">
                                    <select class="select" name="select" id="YEAR">
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>                                                                    
                            </div>

                            <div class="col-md-2 column no-padding"><!-- Start Column -->
                                <div class="input-cover contact-line">
                                    <select class="select" id="TIME" name="select">
                                        <option value="00:00">00:00</option>
                                        <option value="01:00">01:00</option>
                                        <option value="02:00">02:00</option>
                                        <option value="03:00">03:00</option>
                                        <option value="04:00">04:00</option>
                                        <option value="05:00">05:00</option>
                                        <option value="06:00">06:00</option>
                                        <option value="07:00">07:00</option>
                                        <option value="08:00">08:00</option>
                                        <option value="09:00">09:00</option>
                                        <option value="10:00">10:00</option>
                                        <option value="11:00">11:00</option>
                                        <option value="12:00">12:00</option>
                                        <option value="13:00">13:00</option>
                                        <option value="14:00">14:00</option>
                                        <option value="15:00">15:00</option>
                                        <option value="16:00">16:00</option>
                                        <option value="17:00">17:00</option>
                                        <option value="18:00">18:00</option>
                                        <option value="19:00">19:00</option>
                                        <option value="20:00">20:00</option>
                                        <option value="21:00">21:00</option>
                                        <option value="22:00">22:00</option>
                                        <option value="23:00">23:00</option>
                                    </select>
                                </div>                                                                    
                            </div>

                            <div class="col-md-4 column no-padding"><!-- Start Column -->
                                <div class="input-cover contact-line">
                                    <select class="select" name="select" id="GUEST">
                                        <option value="cousine">Guests</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div><!-- End Column -->   

                        </div>

                        <div class="row form-row"><!-- Start Row -->
                                <div class="col-md-4 column no-padding"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <input type="text" class="contact-form-line" id="NAME" placeholder="Name" name="Name" data-parsley-id="1240"><ul class="parsley-errors-list" id="parsley-id-1240"></ul>
                                    </div>
                                </div><!-- End Column -->
                             
                                <div class="col-md-4 column no-padding"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <input type="text" class="contact-form-line" id="EMAIL" data-parsley-required="true" data-parsley-type="email" placeholder="E-Mail" name="E-Mail" data-parsley-id="9294"><ul class="parsley-errors-list" id="parsley-id-9294"></ul>
                                    </div>
                                </div><!-- End Column -->
                             
                                <div class="col-md-4 column no-padding"><!-- Start Column -->
                                    <div class="input-cover contact-line">
                                        <select class="select" name="select" id="TYPE">
                                            <option value="cousine">Cousine</option>
                                            <option value="kosher">Kosher</option>
                                            <option value="vegetarian">Vegetarian</option>
                                            <option value="italian">Italian</option>
                                        </select>
                                    </div>
                                </div><!-- End Column -->

                        </div><!-- End Row -->
                     
                        <div class="row form-row"><!-- Start Row -->
                            <div class="col-md-12 column"><!-- Start Column -->
                                <div class="input-cover input-cover-text">
                                    <textarea class="contact-form-area" placeholder="" id="MESSAGE" name="Message" data-parsley-id="9027">Message</textarea><ul class="parsley-errors-list" id="parsley-id-9027"></ul>
                                </div>                              <!-- End Element -->
                            </div><!-- End Column -->
                        </div><!-- End Row -->
                     
                        <div class="row form-row"><!-- Start Row -->
                            <div class="col-md-12 column"><!-- Start Column -->
                                <input type="submit" id="btnSubmit" data-sent="Message Successfully Sent" data-sending="Sending Message" class="form-send margin-top" value="Confirm">
                            </div><!-- End Column -->
                        </div><!-- End Row -->
                        <input type="hidden" value="contact" name="id">
                    </form>

                </div>
            </div>
        </section>
        
        <div class="section section-map">
            <div class="gmap-container"></div>
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
    <script type="text/javascript">
        $(function(){
            $('#booking_form').submit(function(e){
                e.preventDefault();
                var validate_email = function validateEmail(email) {
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                };
                if($("#NAME").val().trim() == "" ){
                    $("#msg").show().text("Please enter your name!").css("color" , "red"); 
                }else if($("#EMAIL").val().trim() == "" ){
                    $("#msg").show().text("Please enter your email!").css("color" , "red"); 
                }else if($("#MESSAGE").val().trim() == "" ){
                    $("#msg").show().text("Please enter message!");
                }else if(!validate_email($("#EMAIL").val())){
                    $("#msg").show().text('Please provide a valid e-mail.').css("color" , "red"); 
                }else{
                	$("#frmWaiting").modal('show');
                    $.ajax({
                        type: "POST",
                        url: $("#booking_form").attr("action"),
                        dataType: 'json',
                        data: {
                            name: $("#NAME").val(),
                            email: $("#EMAIL").val(), 
                            message: $("#MESSAGE").val(),
                            time: $("#TIME").val(),
                            year: $("#YEAR").val(),
                            month: $("#MONTH").val(),
                            day: $("#DAY").val(),
                            guest: $("#GUEST").val(),
                            type: $("#TYPE").val()
                        },
                        success: function(data){
                            if(data["ERROR"]==false){
                            	 $("#msg").show().text("Your booking has been sent!").css("color" , "green"); 
                            }else{
                            	 $("#msg").show().text("Error ! Please try again !").css("color" , "red"); 
                            }
                            $("#frmWaiting").modal('hide');
                        },
                        error: function(data){
                            console.log(data);
                        }
                    });
                }
            });
        });
    </script>
    
    
    
    								<div class="modal fade" id="frmWaiting" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="DefaultModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
											<div class="modal-content" style="border-radius: 5px;">
											  
											  <div class="modal-body">
													<h5>Your Booking is sending. Please wait!</h5>
													<center><img src="<?php echo base_url()?>/public/style_front/images/sending.gif"/></center>
											  </div>
											  
											  
											</div><!-- /.modal-content -->
										  </div><!-- /.modal-doalog -->
										</div><!-- /#DefaultModal -->
										
</body>
</html>
