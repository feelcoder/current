<?php error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("localhost","test","test");
     if(!$connection)
        header("Location: pages-error-500.php");
    mysql_select_db("test");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Quick Money Transfer - home</title>            
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

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Dashboard</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                         <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total transfers</div>
                                        <div class="widget-int">548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Last Transfer</div>
                                        <div class="widget-int">27/08/2014 15:23</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Favorite receiver</div>
                                        <div class="widget-int">Antonia</div>
                                    </div>
                                </div>                                                        
                            </div> 
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
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
                        <div class="col-md-4">
                            
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
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <!-- <script type="text/javascript" src="js/demo_dashboard.js"></script>-->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>
<?php
echo '
<script type="text/javascript">
$(function(){        
    /* reportrange */
    if($("#reportrange").length > 0){   
        $("#reportrange").daterangepicker({                    
            ranges: {
               "Today": [moment(), moment()],
               "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
               "Last 7 Days": [moment().subtract(6, "days"), moment()],
               "Last 30 Days": [moment().subtract(29, "days"), moment()],
               "This Month": [moment().startOf("month"), moment().endOf("month")],
               "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
            },
            opens: "left",
            buttonClasses: ["btn btn-default"],
            applyClass: "btn-small btn-primary",
            cancelClass: "btn-small",
            format: "MM.DD.YYYY",
            separator: " to ",
            startDate: moment().subtract("days", 29),
            endDate: moment()            
          },function(start, end) {
              $("#reportrange span").php(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        });
        
        $("#reportrange span").php(moment().subtract("days", 29).format("MMMM D, YYYY") + " - " + moment().format("MMMM D, YYYY"));
    }
    /* end reportrange */';

    /* Donut dashboard chart */
    
    $result = "select name,id from agencies";
    $details = array();

    while($row = mysql_fetch_array($result))
    {
        $r = mysql_query("select count(*) from history where agency_id=".$row[1]);
        $a = mysql_result($row,0);
        $b = mysql_result($r,0);

        array_push($details, array("name" => $a, "count" => $b));
    }

    echo '
    Morris.Donut({
        element: "dashboard-donut-1",
        data:[';
        $i = 0;
        for($i = 0; i < count($details) - 1; $i++)
            echo '{label: "'.$details[$i]["name"].'" , value: '.$details[$i]["count"].'}';
        echo '{label: "'.$details[$i]["name"].'" , value: '.$details[$i]["count"].'}
        ],
        colors: [';
        for($i = 0; i < count($details) - 1; $i++)
            if($i%2 == 0)
                echo '"33414E",';
            else if($i%3 == 0)
                echo '"3FBAE4",';
            else
                echo '"FEA223",';
            echo '"3FBAE4"],
        resize: true
    });
    /* END Donut dashboard chart */

    /* Line dashboard chart */
    Morris.Line({
      element: "dashboard-line-1",
      data: [';

        $result = mysql_query("select date from history");
        $r = mysql_result($result, 0);  //first date of transaction

        $time=strtotime($r);
        $month=date("F",$time);
        $year=date("Y",$time);

      echo '],
      xkey: "y",
      ykeys: ["a"],
      labels: ["Trasnfers",],
      resize: true,
      hideHover: true,
      xLabels: "Month",
      gridTextSize: "10px",
      lineColors: ["#3FBAE4","#33414E"],
      gridLineColor: "#E5E5E5"
    });   
    /* EMD Line dashboard chart */
    
    
    $(".x-navigation-minimize").on("click",function(){
        setTimeout(function(){
            rdc_resize();
        },200);    
    });
    
    
});
</script>';
?>



