<?php error_reporting(E_ALL ^ E_DEPRECATED);
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Quick Money Transfer produce</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/revolution-slider/settings.css" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />                  

    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <div class="page-header">
                
                <!-- page header holder -->
                <div class="page-header-holder">
                    
                    <!-- page logo -->
                    <div class="logo">
                        <a href="index.php">Quick Money Transfer</a>
                    </div>
                    <!-- ./page logo -->
            

                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->
                    
                    <!-- navigation -->
                    <ul class="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contacts.php">Contact Us</a></li>
                        <?php
                        //check if session is on
                    
                        if(isset($_SESSION["username"]))
                            if($_SESSION["username"] != "off")
                                echo '<li><a href="back-end/pages-profile.php">'.$_SESSION["username"].'</a></li>';
                            else
                                echo '<li><a href="back-end/pages-login.php">Sign in/Create Account</a></li>';
                        ?>
                    </ul>
                    <!-- ./navigation -->                        

                    
                </div>
                <!-- ./page header holder -->
                
            </div>
            <!-- ./page header -->
            
            <!-- page content -->
            <div class="page-content">
                
                
                <!-- revolution slider -->
                <div class="banner-container">
                    <div class="banner">

                        <ul>
                            
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="500"  data-saveperformance="on">
                                <img src="img/backgrounds/bg-2.jpg" />
                                
                                <div class="tp-caption lft customout rs-parallaxlevel-0"
                                    data-x="150"
                                    data-y="80" 
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="500"
                                    data-start="700"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 2;">
                                    <img src="assets/slider-layers/atlant-title.png" alt="Atlant"/>
                                </div>
                                
                                
                                <div class="tp-caption lft customout rs-parallaxlevel-0"
                                    data-x="550"
                                    data-y="230" 
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="700"
                                    data-start="1200"
                                    data-easing="Power3.easeInOut"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 3;">
                                    <img src="assets/slider-layers/atlant_monitor.png" alt="Atlant"/>
                                </div>
                                
                                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                                    data-x="0"
                                    data-y="230" 
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-speed="500"
                                    data-start="1000"
                                    data-easing="Back.easeOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 4;">
                                    <img src="assets/slider-layers/atlant_responsive.png" alt="Atlant"/>
                                </div>
                                
                                <div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
                                    data-x="0"
                                    data-y="330" 
                                    data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-speed="500"
                                    data-start="1100"
                                    data-easing="Back.easeOut"
                                    data-splitin="none"
                                    data-splitout="none"
                                    data-elementdelay="0.1"
                                    data-endelementdelay="0.1"
                                    style="z-index: 5;">
                                    <img src="assets/slider-layers/atlant_tempalte.png" alt="Atlant"/>
                                </div>
                                
                            </li>                                    
                                                        
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="700" >
                                <img src="assets/video/video_typing_cover.jpg"  alt="video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">                                
                                
                                <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                    data-x="0"
                                    data-y="0"
                                    data-speed="1000"
                                    data-start="1100"
                                    data-easing="Power4.easeOut"
                                    data-elementdelay="0.01"
                                    data-endelementdelay="0.1"
                                    data-endspeed="1500"
                                    data-endeasing="Power4.easeIn"
                                    data-autoplay="true"
                                    data-autoplayonlyfirsttime="false"
                                    data-nextslideatend="true"
                                    data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 2;">

                                    <video class="" preload="none" width="100%" height="100%" poster="assets/video/video_typing_cover.jpg"> 
                                        <source src='assets/video/computer_typing.mp4' type='video/mp4'/>
                                        <source src='assets/video/computer_typing.webm' type='video/webm'/>
                                    </video>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="280" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1500"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_1.png"/>
                                </div>                                
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="320" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1700"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_2.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="362" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="1900"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_3.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="404" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2100"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_4.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="446" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2200"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_5.png"/>
                                </div>
                                
                                <div class="tp-caption customin ltl"
                                        data-x="600"
                                        data-y="488" 
                                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                        data-speed="500"
                                        data-start="2400"
                                        data-easing="Power4.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="1000"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3;">
                                        <img src="assets/slider-layers/second_6.png"/>
                                </div>
                                
                            </li>
                        </ul>
                        
                    </div>
                </div>                        
                <!-- ./revolution slider -->                        
                                       

                <!-- page content wrapper -->
                <div class="page-content-wrap bg-img-1">

                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="row">
                            <div class="col-md-8 this-animate" data-animate="fadeInLeft">
                                
                                <div class="block-heading block-heading-centralized">
                                    <h2 class="heading-underline">Optimized for easy money transfer</h2>
                                    <div class="block-heading-text">
                                        Quick Money transfer lets you transfer money from your MTN mobile money account to 
                                        anyone. ANYONE!! There are no ties to the receiver needing an MTN mobile money account
                                        or even haven to be an MTN subscriber.
                                        This is the easiest you have gotten so far as sending money from home is concerned.
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->                
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-texture-1 bg-dark light-elements">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                                                
                        <div class="row">
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInLeft">
                                    <div class="text-column-icon">
                                        <span class="fa fa-support"></span>
                                    </div>
                                    <h4>Reliable & Secure</h4>
                                    <div class="text-column-info">
                                        Money transfer is <strong>reliable</strong> by using the <strong>secure</strong> MTN money transfer technology.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInUp">
                                    <div class="text-column-icon">
                                        <span class="fa fa-expand"></span>
                                    </div>
                                    <h4>Fast & accurate</h4>
                                    <div class="text-column-info">
                                        Money transfer is made fast by our local money transfer agencies.
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInRight">
                                    <div class="text-column-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <h4>Time Saver</h4>
                                    <div class="text-column-info">
                                        With this system, you can save a lot of time for your work and other stuff.
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-md-4">                                
                                <div class="text-column text-column-centralized tex-column-icon-lg this-animate" data-animate="fadeInRight">
                                    <div class="text-column-icon">
                                        <span class="fa fa-clock-o"></span>
                                    </div>
                                    <h4>Free receiver</h4>
                                    <div class="text-column-info">
                                        Receiver is free from any mobile operators <strong>chains</strong>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->

                <!-- page content wrapper -->                
                <div class="page-content-wrap bg-light bg-texture-1">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    
                </div>
                <!-- ./page content wrapper -->                    
                                    
            
            </div>
            <!-- ./page content -->
            
            <!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                        
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        Limbe, Cameroon,<br/> 
                                        Buea, Cameroon
                                    </div>
                    
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Bill Acha</strong><br>
                                        <a href="mailto:#">achabill12@gmail.com</a>
                                    </div>    
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        +237 6 79 87 34 01
                                    </div>      
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Daniel Carlson</strong><br>
                                        <a href="mailto:#">dancarl257@gmail.com/a>
                                    </div>    
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        +237 6 xx xx xx
                                    </div>                               
                                </div>
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2015 shadow-code <a href="#">shadow-code</a> - All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                       
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="js/plugins/revolution-slider/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/plugins/revolution-slider/jquery.themepunch.revolution.min.js"></script>
        
        <script type="text/javascript" src="js/actions.js"></script>
        <script type="text/javascript" src="js/slider.js"></script>
        <!-- ./page scripts -->
    </body>
</html>






