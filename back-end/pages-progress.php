<?php error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("localhost","test","test");
     if(!$connection)
        header("Location: pages-error-500.php");
    mysql_select_db("test");
session_start();

$_SESSION["mobile_money"] = "on";
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>QuickMoney- progress</title>            
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
                        <a href="pages-profile.php"><span style ="margin-top: 2px; float: right;"><?php if(isset($_SESSION["username"])) echo $_SESSION[
                        "username"]; ?></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- You can no longer return once arrived here -->
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li class="active">Dashboard</a></li>
                    <li class="active">Select agency</a></li>
                    <li class="active">sending form</a></li>
                    <li class="active">progress</li>
                </ul>
                <!-- END BREADCRUMB -->                
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span>Progress</h3>                                
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <!-- simulate mobile money transfer -->
                                    <?php
                                        if(isset($_SESSION["mobile_money"]) && if($_SESSION["mobile_money"]) == "on")
                                        {
                                                echo '<strong>Sending money.. Answer SMS confirmation</strong>
                                    <div class="progress progress-xlarge progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                                    </div>
                                    <small class="text-muted">'.if(isset($_SESSION["receiver_name"])) echo $_SESSION["receiver_name"].', '.$if(isset($_SESSION["date"])) echo $_SESSION["date"] .'/ 90%</small>';
                                        for($i = 0; $i < 10000000; $i++)
                                            ;
                                            $_SESSION["mobile_money"] = "off";
                                            header("Location: pages-progress.php");
                                        }
                                        else
                                        {
                                            if(isset($_SESSION["mobile_money"]) && $_SESSION["mobile_money"]=="off")
                                                    echo '<strong>SUCCESS!</strong>
                                    <div class="progress progress-xlarge progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">10%</div>
                                    </div>
                                    <small class="text-muted">'.if(isset($_SESSION["receiver_name"])) echo $_SESSION["receiver_name"].', '.$if(isset($_SESSION["date"])) echo $_SESSION["date"] .'/ 100%</small>';
                                        }
                                    ?>
                                    <!-- end simulation -->
                                </a>
                                
                            </div>                                
                        </div>                        
                    <!-- END TASKS -->   
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

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>     
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






