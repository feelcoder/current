<?php error_reporting(E_ALL ^ E_DEPRECATED);
mysql_pconnect("localhost","root","00school");
mysql_select_db("test");
session_start();

//store these  variables for use in the next pages
if(isset($_POST["submit"]))
{
    $user = '';
    $receiver = '';
    $receiver_number = '';
    $mobile_money_number = '';
    $amount = '';
    $date = '';
    $location = '';

    if(isset($_POST['username']))
        $user = $_POST['username'];
    if(isset($_POST['receiver']))
        $receiver = $_POST['receiver'];
    if(isset($_POST['receiver_number']))
        $receiver_number = $_POST['receiver_number'];
    if(isset($_POST['mobile_money_number']))
        $mobile_money_number = $_POST['mobile_money_number'];
    if(isset($_POST['amount']))
        $amount = $_POST['amount'];
    if(isset($_POST['date']))
        $date = $_POST['date'];

    if(!$user != '')
        $_SESSION['user'] = $user;
    if(!$receiver != '')
        $_SESSION['receiver'] = $receiver;
    if(!$receiver_number != '')
        $_SESSION['receiver_number'] = $receiver_number;
    if(!$mobile_money_number != '')
        $_SESSION['mobile_money_number'] = $mobile_money_number;
    if(!$amount != '')
        $_SESSION['amount'] = $amount;
    if(!$date != '')
        $_SESSION['date'] = $date;
    if(!$location != '')
        $_SESSION['location'] = $location;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Quick Money Transfer </title>            
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
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                               <!-- start php -->
                                <?php
                                    //get user profile picture
                                    if(isset($_SESSION["username"]))
                                    {
                                        $username = $_SESSION["username"];
                                        if($username != "off")
                                        {
                                            $r = mysql_query('select profile_picture from users where username="'.$username.'"');
                                            $x = mysql_query('select description from users where username="'.$username.'"');
                                            $description = mysql_result($x, 0);

                                            if(!$x)
                                                die(mysql_error());
                                            if(!$r)
                                                die(mysql_error());
                                            
                                            $path = mysql_result($r, 0);
                                            echo '<img src="'.$path.'" alt="profile_picture"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">'.$username.'</div>
                                        <div class="profile-data-title">'.$description.'</div>
                                    </div>';
                                    }
                                }
                            ?>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li> 
                    <li class="active">
                        <a href="pages-transaction.php"><span class="fa fa-desktop"></span> <span class="xn-text">Trasaction</span></a>                        
                    </li>       
                    <li class="active">
                        <a href="pages-history.php"><span class="fa fa-desktop"></span> <span class="xn-text">History</span></a>                        
                    </li>   
                    <li class="active">
                        <a href="pages-mobile-money.php"><span class="fa fa-desktop"></span> <span class="xn-text">Mobile Money</span></a>                        
                    </li>   
                    <li class="active">
                        <a href="pages-settings.php"><span class="fa fa-desktop"></span> <span class="xn-text">Settings</span></a>                        
                    </li>         
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <li>
                        <a href="pages-profile.php"><span style ="margin-top: 2px; float: right;"><?php if(isset($_SESSION["username"]) && $_SESSION["username"] != "off") echo $_SESSION[
                        "username"]; ?></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->   
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                           
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="pages-transaction.php">Select agency</a></li>
                    <li class="active">fill form</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                  
                    <h2><span class="fa fa-arrow-circle-o-left"><?php if(isset($_SESSION["agency"])) echo $_SESSION["agency"]; ?></span></h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                                <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-body list-group scroll" style="height: 50px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Fill form..</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">60%</div>
                                    </div>
                                </a>
                                
                            </div>                                
                        </div>  
                    <div class="row">
                        <div class="col-md-6">

                            <!-- START JQUERY VALIDATION PLUGIN -->
                            <div class="block">
                                <form id="jvalidate" role="form" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                                <div class="panel-body">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Username:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?php if(isset($_SESSION["username]") && $_SESSION["username"] != "off") echo $_SESSION["username"] ?>" name="username"/>
                                            <span class="help-block">min size = 2, max size = 20</span>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Mobile Money Number:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="mask_ssn form-control" value="" name="mobile_money_number"/>
                                                <span class="help-block">Example: 679-87-6543</span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Amount:</label>
                                        <div class="col-md-9">
                                            <input type="text"  value="" name="amount"/>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>          
                                    <div class="form-group">
                                    <label class="col-md-3 control-label">Today:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="mask_date form-control" value="<?php echo date("Y-m-d"); ?>" name="date"/>
                                            <span class="help-block">Example: 2012-12-21</span>         
                                        </div>
                                    </div>
                                    <h4>Receiver</h4>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name of Receiver:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="receiver"/>
                                            <span class="help-block">min size = 2, max size = 20</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Town:</label>  
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="location"/>
                                            <span class="help-block">min size = 2, max size = 20</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Phone Number:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="mask_ssn form-control" value="" name="receiver_number"/>
                                                <span class="help-block">Example: 679-87-6543</span>
                                            </div>
                                    </div>

                                    <a href="pages-transaction.php" style ="float: left;"><input type="button" class="btn btn-info btn-block" value="back" /><a/>    
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                    </div>  
                                </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                        
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->
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
                    }                                        
                });                                    

        </script>
        
    <!-- END SCRIPTS -->          
        
    </body>
</html>






