<?php require_once("local_connection.php");

$username = '';
$password ='';
$gender = '';
$age = '';
$description = '';
$phone_number = '';
$mobile_money_number = '';
$GLOBALS['exist'] = "false";

if(isset($_POST['submit_button']))
{
    if(isset($_POST['username']))
        $username = $_POST['username'];
    if(isset($_POST['password']))
        $password = $_POST['password'];
    if(isset($_POST['gender']))
        $gender = $_POST['gender'];
    if(isset($_POST['age']))
        $age = $_POST['age'];
    if(isset($_POST['phone_number']))
        $phone_number = $_POST['phone_number'];
    if(isset($_POST['mobile_money_number']))
        $mobile_money_number = $_POST['mobile_money_number'];
    if(isset($_POST['description']))
    {
        $description = $_POST['description'];
        if($description == '')
            $description = "Just a user";
    }   

    $a = mysql_query('select count(*) from users where username = "'.$username.'"');
    if($a)
        $b = mysql_result($a,0);
    else 
        header("Location: pages-error-500.html");

    if($b != 0) //username exists
        $GLOBALS['exist'] = "true";
    else
    {
        $hash = hash('sha512',$password); 
        $a = mysql_query('insert into users values (null,"'.$username.'","'.$hash.'","'.$description.'","'.$gender.'",'.$age.',"./assets/images/users/profile_default.png","'.$phone_number.'","'.$mobile_money_number.'");');

        if(!$a)
            header("Location: pages-error-500.html");

        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E2Cash Money Transfer - Signup</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-serenity-head-light.css"/>
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
                        <a href="../index.php">E2Cash Money Transfer</a>
                    </li>
                    
                    
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                           
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="pages-login.php">Sign Up</a></li>
                    <li class="active">Create Account</li>
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
                                <form id="jvalidate" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">                            
                                    <div class="form-group">
                                        <?php
                                            if($GLOBALS['exist'] == "true")
                                                echo '<p><style="color: red;"><strong>Username exists already</strong></style></p>';
                                        ?>
                                        <label class="col-md-3 control-label">Username:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[20]] form-control" name="username"/>
                                            <span class="help-block">Required, max size = 20</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,minSize[8],maxSize[10]] form-control" id="password" name="password"/>
                                            <span class="help-block">Required, min size = 8, max size = 64</span>
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
                                            <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control" name="age"/>
                                            <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Gender:</label>
                                        <div class="col-md-3">
                                            <select class="validate[required] select" id="formGender" name="gender">
                                                <option value="">Choose option</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>                           
                                            <span class="help-block">Required</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tag</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[false,maxSize[20]] form-control" placeholder="Short tag to display by your profile picture" name="description"/>
                                            <span class="help-block">A sentence defining you</span>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="phone_number"/>
                                            <span class="help-block">Required, phone number</span>
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">MTN mobile money number:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="mobile_money_number"/>
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
                                        <button class="btn btn-primary" type="submit" name="submit_button">Submit</button>
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
                                minlength: 8,
                                maxlength: 64
                        },
                        're-password': {
                                required: true,
                                minlength: 8,
                                maxlength: 10,
                                equalTo: "#password"
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






