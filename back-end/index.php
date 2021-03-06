<?php require_once("local_connection.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E2Cash Money Transfer | home</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-serenity-head-light.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body class="page-container-boxed">
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
                                            $description = @mysql_result($x, 0);

                                            if(!$x)
                                                die(mysql_error());
                                            if(!$r)
                                                die(mysql_error());
                                            
                                            $path = @mysql_result($r, 0);
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
                        <a href="pages-transaction.php"><span class="fa fa-desktop"></span> <span class="xn-text">Trasaction</span></a>                        
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
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row" >
                         <div class="col-md-3" style="width: 100%;">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                  
                                        <div class="widget-title">Total transfers</div>
										<?php
											$username = '';
											if(isset($_SESSION["username"]) && $_SESSION["username"] != "off")
												$username = $_SESSION["username"];

											if($username == '')
												echo '<h1>You are not signed in! </h1><h2>Sign in or Create a new account if you currently have none.</h2>';
											else{
												
												//get id of the user
												$id = @mysql_result(mysql_query('select id from users where username ="'.$username.'"'),0);
												
												//get the total number of transfers
												$trans = @mysql_result(mysql_query('select count(*) from transactions where id='.$id.';'),0);
												
												if($trans != 0){
													echo '<div class="widget-int">'.$trans.'</div>';
												}else{				
													echo '<div class="widget-int">No Transfers</div>';
												}
											}
										?>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Last Transfer</div>
										<?php
											$username = '';
											if(isset($_SESSION["username"]) && $_SESSION["username"] != "off")
												$username = $_SESSION["username"];

											if($username == '')
												echo '<h1>You are not signed in! </h1><h2>Sign in or Create a new account if you currently have none.</h2>';
											else{
												$id = mysql_result(mysql_query('select id from users where username="'.$username.'"'),0);
                                                $result = mysql_query('select date from transactions where id='.$id.' order by date desc limit 1');
                                                $latest_transfer = '';
                                                if(!mysql_fetch_row($result))
                                                    $latest_transfer = "No transfers";
                                                else
                                                    $latest_transfer = mysql_result($result, 0);
											}
                                            echo '<div class="widget-int">'.$latest_transfer.'</div>';
										?>
                                        
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Favorite receiver</div>
										<?php
											$username = '';
											if(isset($_SESSION["username"]) && $_SESSION["username"] != "off")
												$username = $_SESSION["username"];

											if($username == '')
												echo '<h1>You are not signed in! </h1><h2>Sign in or Create a new account if you currently have none.</h2>';
											else{
												//run query to get most frequent receiver
                                                $id = mysql_result(mysql_query('select id from users where username="'.$username.'"'),0);
												$result = mysql_query('select receiver from transactions where id='.$id.' group by receiver order by count(*) desc limit 1');
                                                $receiver = '';
                                                if(!mysql_fetch_row($result))
                                                    $receiver = "No Transfers";
                                                else
                                                    $receiver = mysql_result($result, 0);
                                                echo '<div class="widget-int">'.$receiver.'</div>';
											}
										?>
                                    </div>
                                </div>                                                        
                            </div> 
                        </div>
                        <div class="col-md-3" style="width: 100%;">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="width: 100%;">
                            
                            <!-- START SALES & EVENTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Your usage statistics</h3>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
										            
                                    </ul>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
                                </div>
                            </div>
                            <!-- END SALES & EVENTS BLOCK -->

                            <!-- START VISITORS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Local Agency statistics</h3>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>                                      
                                    </ul>
                                </div>
                                <div class="panel-body padding-0">
                                    <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                                </div>
                            </div>
                            <!-- END VISITORS BLOCK -->
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

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="js/settings.js"></script> -->
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        
        <!-- <script type="text/javascript" src="js/demo_dashboard.js"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>
<script type="text/javascript">
$(function(){        
    /* reportrange */
    //This displays the time and date.
    //Nothing to be done herr
    
    if($("#reportrange").length > 0){   
        $("#reportrange").daterangepicker({                    
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM.DD.YYYY',
            separator: ' to ',
            startDate: moment().subtract('days', 29),
            endDate: moment()            
          },function(start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
        
        $("#reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }
    /* end reportrange */
    
    
    /* Donut dashboard chart */
    //This is a mapping of agency name against number of transactions carried out by the agency for a particular user
    //this example demostrates with hard coded exmples.
    <?php

    #Table of agency_id | number of transactions made
    $a = mysql_query('select agency_id, count(*) from transactions group by agency_id');

    #Transfrom the above to table of Agency_name | number of transactios made
    #Generate a map of <Agency name as key -- number of transactiosn made as value>
    $map = array();

    while($row = mysql_fetch_array($a))
    {
        $key = mysql_result(mysql_query('select name from agencies where id = '.$row[0].''),0);
        $value = $row[1];

        $pair = array("key" => $key, "value" => $value);

        array_push($map, $pair);
    }

   echo '
    Morris.Donut({
        element: "dashboard-donut-1",
        data: [';
        $i = 0;
            for($i = 0; $i < count($map) - 1; $i++)
                echo '{label: "'.$map[$i]["key"].'", value: '.$map[$i]["value"].'},';
            echo '{label: "'.$map[$i]["key"].'", value: '.$map[$i]["value"].'}';
        echo '],
        colors: ["#33414E", "#3FBAE4", "#FEA223","red"],
        resize: true
    });';
    /* END Donut dashboard chart */
    
    //This line graph is a mapping of year/month and total transactions for that month
    //i've sent you a file describing this too.

    /* Line dashboard chart */
    ?>
    Morris.Line({
      element: 'dashboard-line-1',
      data: [
        { y: '2015-08', a: 2},
        { y: '2015-09', a: 4},
        { y: '2015-10', a: 7},
        { y: '2015-11', a: 5},
        { y: '2015-12', a: 6},
        { y: '2016-01', a: 9},
        { y: '2016-02', a: 18}
      ],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Month','transactions'],
      resize: true,
      hideHover: true,
      xLabels: 'day',
      gridTextSize: '10px',
      lineColors: ['#3FBAE4'],
      gridLineColor: '#E5E5E5'
    });   
    /* EMD Line dashboard chart */
    
    
    $(".x-navigation-minimize").on("click",function(){
        setTimeout(function(){
            rdc_resize();
        },200);    
    });
    
    
});


</script>


