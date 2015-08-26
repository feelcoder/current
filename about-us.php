<?php error_reporting(E_ALL ^ E_DEPRECATED);
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Quick Money Transfer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        
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
                        <li><a href="contacts.php">Contact Us</a></li>
                         <?php
                        //check if session is on
                    
                        if(isset($_SESSION["username"]))
                            if($_SESSION["username"] != "off")
                                echo '<li><a href="back-end/index.php">'.$_SESSION["username"].'</a></li>';
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
                            <h1>About Us</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">About Us</li>
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
                    <!-- page content holder -->
                    <div class="page-content-holder">
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">Meet the Team</h2>
                            <div class="block-heading-text">
								<strong><blockquote>Coming together is a beginning. Keeping together is progress. Working together is success.<br /> 
																											-Henry Ford</blockquote>
								<blockquote>Alone we can do so little; together we can do so much. <br />
																										-Helen Keller</blockquote>
								<blockquote>So powerful is the light of unity that it can illuminate the whole earth. </blockquote></strong>
								<strong><i>TOGETHER WE MAKE THE WORLD A BRIGHTER PLACE</i></strong>
                                
                            </div>

                             <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                        <img src="assets/img/users/user2.jpg" alt="John Doe" class="img-circle">
                                    </div>
                                    <h6>Acha Bill</h6>
                                    <div class="text-column-subtitle">Founder of Atlant</div>
                                    <div class="text-column-info">
                                        Software Developer and UI and UX developer
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-3" style="float: right">                 
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                        <img src="assets/img/users/user4.jpg" alt="Brad Pitt" class="img-circle">
                                    </div>
                                    <h6>Daniel Carlson</h6>
                                    <div class="text-column-subtitle">Co-Founder of Atlant</div>
                                    <div class="text-column-info">
                                       Software Developer and backend engineer
                                    </div>
                                </div>                                
                            </div>


                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                

                <!-- page content wrapper -->
                <div class="page-content-wrap">
                    
                    <div class="divider"><div class="box"><span class="fa fa-angle-down"></span></div></div>                    
                    
                    <!-- page content holder -->
                    <div class="page-content-holder">                        
                        
                        <div class="block-heading block-heading-centralized this-animate" data-animate="fadeInDown">
                            <h2 class="heading-underline">Meet Our Partners</h2>
                            <div class="block-heading-text">
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                        <img src="assets/img/users/activespaces.jpg" alt="John Doe" class="img-circle">
                                    </div>
                                    <h5>Active Spaces</h5>
                                    <div class="text-column-subtitle">Partner</div>
                                    <div class="text-column-info">
                                        Business orientation and sensitization
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                        <img src="assets/img/users/mtn.jpg" alt="Dmitry Ivaniuk" class="img-circle">
                                    </div>
                                    <h5>MTN Cameroon</h5>
                                    <div class="text-column-subtitle">Partner</div>
                                    <div class="text-column-info">
                                        Multinational telecommunication company
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-3" style="float:right">                  
                                <div class="text-column text-column-centralized this-animate" data-animate="fadeIn">
                                    <div class="text-column-image">
                                        <img src="assets/img/users/microsoft.jpg" alt="Nadia Ali" class="img-circle">
                                    </div>
                                    <h5>Microsoft</h5>
                                    <div class="text-column-subtitle">One of the world's largest tech Companies</div>
                                    <div class="text-column-info">
                                        Bring local agencies and US together under a on umbrella 
                                    </div>
                                </div>                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>                
                <!-- ./page content wrapper -->
                
                <!-- page content wrapper -->
                
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
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2015 Quick Money Transfer<a href="#">shadow-coders</a> - All Rights Reserved                            
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
        
        <script type="text/javascript" src="js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>






