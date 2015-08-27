<?php require_once("online_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E2Cash Money Transfer | Payment Form</title>            
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
                        <a href="../index.html">E2Cash Money Transfer</a>
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
                        <a href="pages-history.php"><span class="fa fa-desktop"></span> <span class="xn-text">History</span></a>                        
                    </li>   
                    <li class="active">
                        <a href="pages-profile.php"><span class="fa fa-desktop"></span> <span class="xn-text">Profile</span></a>                        
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
                    <li><a href="form-payment-form.php">Form</a></li>
                    <li class="active">Confirm</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->              
                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                                <div class="panel-body list-group scroll" style="height: 50px;">                                
                                    <a class="list-group-item" href="#">
                                        <strong>Confirm and and Money..</strong>
                                        <div class="progress progress-small progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            </div>
                                        </div>
                                    </a>
                                </div>                                
                            </div>  

                            <!-- START SIMPLE DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Send Money</h3>                                 
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable_simple">
                                        <thead>
                                            <th>Field</th>
                                            <th>Value</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sender Name</td>
                                                <td><?php echo $_SESSION['sender_name']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Sender Phone Number</td>
                                                <td><?php echo $_SESSION['sender_phone_number']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Receiver Name</td>
                                                <td><?php echo $_SESSION['receiver_name']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Receiver Phone Number</td>
                                                <td><?php echo $_SESSION['receiver_phone_number']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Amount</td>
                                                <td><?php echo $_SESSION['amount']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Location</td>
                                                <td><?php echo $_SESSION['location']; ?></td>
                                            <tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><?php echo $_SESSION['password']; ?></td>
                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END SIMPLE DATATABLE -->
                        </div>
                        <div class="btn-group pull-left">
                            <a href="form-payment-form.php"><button class="btn btn-link btn-block" name="go_back">Go Back</button></a>
                        </div> 
                    </div>
                    <div  class="panel-body">
                        <div>
                            <p>sending <strong>(<?php echo $_SESSION['amount']; ?>)</strong> + platform charge<strong>(1000)</strong> = <strong><?php echo $_SESSION['amount'] + 1000; ?></strong><br/>
                            Click Mtn Mobile money below to send money.</p>
                            <span><strong><p>Be close to your phone, You'll get 120 seconds to confirm mobile money payment</p></strong></span>
                        </div>
                        <form action="<?php echo htmlspecialchars('pages-progress.php'); ?>" class="form-horizontal" method="post">
                            <div style="margin-left: 30%;">
                                <button type="submit" name="submit_button"><img src="../assets/img/users/mtn.jpg" width="100px"/></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- PAGE CONTENT WRAPPER -->                   

                </div>                                             
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
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS --> 
        
        
    </body>
</html>






