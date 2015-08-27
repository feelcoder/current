<?php require_once("local_connection.php");
if(isset($_POST['submit_button']))
{
    $_SESSION['sender_name'] = $_POST['sender_name'];
    $_SESSION['sender_phone_number'] = $_POST['sender_phone_number'];
    $_SESSION['receiver_name'] =$_POST['receiver_name'];
    $_SESSION['receiver_phone_number'] = $_POST['receiver_phone_number'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['location'] = $_POST['location'];
    $_SESSION['date'] = $_POST['date'];
    $password = '';
    if(isset($_POST['password']))
        $password = $_POST['password'];
    $_SESSION['password'] = $password;

    header("Location: pages-mobile-money.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E2Cash Money Transfer | Sending Form</title>            
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
                        <a href="../index.html">Quick Money Transfer</a>
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
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="pages-transaction.php">Transaction</a></li>
                    <li class="active">Form</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span><?php if(isset($_SESSION['agency_name'])) echo $_SESSION['agency_name']; ?></h2>
                    
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                                <div class="panel-body list-group scroll" style="height: 50px;">                                
                                    <a class="list-group-item" href="#">
                                    <strong>Fill sending form..</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        </div>
                                    </div>
                                    </a>
                                </div>                                
                            </div> 
                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="block">                              
                                <form id="jvalidate" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">   
                                <h3>Me</h3>                         
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name of sender:</label>
                                        <div class="col-md-9">
                                            <input type="text"  class="validate[required,maxSize[20]] form-control" name="sender_name" value="<?php if(isset($_SESSION['sender_name'])) echo $_SESSION['sender_name']; ?>"/>
                                            <span class="help-block">Required, max size = 20</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone number of sender</label>
                                        <div class="col-md-9">
                                            <?php 
                                            $phone_number = mysql_result(mysql_query('select phone_number from users where username="'.$_SESSION["username"].'"'), 0);
                                            if(isset($_SESSION['sender_phone_number']))
                                                echo  '
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="sender_phone_number" value="'.$_SESSION['sender_phone_number'].'"/>
                                            ';
                                            else
                                            echo '
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="sender_phone_number" value="'.$phone_number.'"/>';
                                            ?>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <h3>Receiver</h3>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name of receiver:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[20]] form-control" name="receiver_name" value="<?php if(isset($_SESSION['receriver_name'])) echo $_SESSION['receiver_name']; ?>"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone number of receiver: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="receiver_phone_number" value="<?php if(isset($_SESSION['receiver_phone_number'])) echo $_SESSION['receiver_phone_number']; ?>"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Amount:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,custom[integer],min[500],max[1000000000]] form-control" name="amount" value="<?php if(isset($_SESSION['amount'])) echo $_SESSION['amount']; ?>"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Location of receiver:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[20]] form-control" name="location" value="<?php if(isset($_SESSION['location'])) echo $_SESSION['location']; ?>"/>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Date:</label>
                                        <div class="col-md-9">
                                            <?php
                                            $date = date('Y-m-d');
                                            echo '
                                            <input type="text" class="validate[required,maxSize[20]] form-control" name="date" value="'.$date.'"/>';
                                             ?>
                                            <span class="help-block">Required</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password? :</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,minSize[8],maxSize[10]] form-control" id="password" name="password" value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password']; ?>"/>
                                            <span class="help-block">Required, max = 64</span>
                                        </div>
                                    </div>  
                                    <div class="btn-group pull-left">
                                        <a href="pages-transaction.php">Back</a>
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
                             <a href="pages-login.php?state=off" name="signout" class="btn btn-success btn-lg">Yes</a>
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
                        sender_name: {
                                required: true,
                                minlength: 2,
                                maxlength: 100
                        },
                        location: {
                                required: true,
                                minlength: 2,
                                maxlength: 100
                        },
                        receiver_name: {
                                required: true,
                                minlength: 2,
                                maxlength: 100
                        },
                        sender_phone_number: {
                                required: true,
                                min: 650000000,
                                max: 699999999
                        },
                        receiver_phone_number: {
                                required: true,
                                min: 650000000,
                                max: 699999999,
                        },
                        password: {
                                required: false,
                                minlength: 8,
                                maxlength: 64
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        amount: {
                            required: true,
                            min: 500,
                        }
                    }                                        
                });   
        </script>
        
    <!-- END SCRIPTS -->          
        
    </body>
</html>
