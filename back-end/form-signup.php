<?php error_reporting(E_ALL ^ E_DEPRECATED);
mysql_pconnect("localhost","root","00school");
mysql_select_db("test");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                  
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="../index.php">Quick Money Transfer</a>
                    </li>
                    
                    
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                           
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="pages-login.php">Sing In</a></li>
                    <li class="active">Create Account/li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Sign Up</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="block">                              
                                <form id="validate" role="form" class="form-horizontal" action="index.php">                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Username:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[8]] form-control"/>
                                            <span class="help-block">Required, max size = 100</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,minSize[5],maxSize[10]] form-control" id="password"/>
                                            <span class="help-block">Required, min size = 5, max size = 10</span>
                                        </div>
                                    </div>                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,equals[password]] form-control"/>
                                            <span class="help-block">Required, equals Password</span>
                                        </div>
                                    </div>                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Age:</label>
                                        <div class="col-md-9    ">
                                            <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control"/>
                                            <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender:</label>
                                        <div class="col-md-3">
                                            <select class="validate[required] select" id="formGender">
                                                <option value="">Choose option</option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>                           
                                            <span class="help-block">Required</span>
                                        </div>                        
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[670000000]] form-control"/>
                                            <span class="help-block">Required, phone number</span>
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">MTN mobile money number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control"/>
                                            <span class="help-block">Required, mobile money number</span>
                                        </div>
                                    </div>          
                                    <div class="form-group">                        
                                        <div class="col-md-12">
                                            <label class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="validate[required]" name="terms" value="1"/> Yes, I accept your terms and conditions.
                                                </label>
                                            </label>
                                        </div>
                                    </div>                                
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>                                                                
                                </form>
                            </div>                                               
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>
                        
                        </div>
                    </div>
                        
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 20
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 15,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->          
        
    </body>
</html>






