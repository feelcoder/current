<?php error_reporting(E_ALL ^ E_DEPRECATED); 
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Quick Money Transfer- contacts</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
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
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Contacts Us</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contacts</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    
                    <div id="google-map" style="width: 100%; height: 300px;"></div>
                    
                </div>
                <!-- ./page content wrapper -->
                
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">
                    
                        <div class="row">
                            <div class="col-md-7 this-animate" data-animate="fadeInLeft">
                                
                                <div class="text-column">
                                    <h4>Contact Us</h4>
                                    <div class="text-column-info">
                                        Having any trouble with your account or any enquires?
                                        <span class="text-column-info">Fill the form below:</span>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>E-mail <span class="text-hightlight">*</span></label>
                                            <input type="email" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Subject <span class="text-hightlight">*</span></label>
                                            <input type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Message <span class="text-hightlight">*</span></label>
                                            <textarea class="form-control" rows="8"></textarea>
                                        </div>
                                        <button class="btn btn-primary btn-lg pull-right">Send Message</button>
                                        <button class="btn btn-warning btn-lg pull-left">Cancel</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-5 this-animate" data-animate="fadeInRight">
                                
                                <div class="text-column text-column-centralized">
                                    <div class="text-column-icon">
                                        <span class="fa fa-home"></span>
                                    </div>                                    
                                    <h4>Our Office</h4>
                                    <div class="text-column-info">
                                        <p><strong><span class="fa fa-map-marker"></span> Address: </strong> Limbe , Buea, South West, Cameroon</p>
                                        <p><strong><span class="fa fa-phone"></span> Phone: </strong> (237) xx xx xx xx </p>
                                        <p><strong><span class="fa fa-envelope"></span> E-mail: </strong> <a href="#">shadowc-code@gmail.com</a></p>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
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
                                        <span class="fa fa-phone"></span>
                                        +237 6 xx xx xx
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Bill Acha</strong><br>
                                        <a href="mailto:#">achabill12@gmail.com</a>
                                    </div>          
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>Daniel Carlson</strong><br>
                                        <a href="mailto:#">dancarl257@gmail.com/a>
                                    </div>                                   
                                </div>
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2014 Atlant Theme by <a href="#">Aqvatarius</a> - All Rights Reserved                            
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
        
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        
        <script type="text/javascript">
            
            var mapCords = new google.maps.LatLng(4.156174, 9.288320);
            var mapOptions = {zoom: 14,center: mapCords, mapTypeId: google.maps.MapTypeId.ROADMAP}    
            var map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

            var cords = new google.maps.LatLng(4.156174, 9.288320);
            var marker = new google.maps.Marker({position: cords, 
                                                 map: map, 
                                                 title: "Marker 1",
                                                 icon: 'http://aqvatarius.com/development/atlant-frontend/img/map-marker.png'}
                                               );
                                       
        </script>
        
        <script type="text/javascript" src="js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>






