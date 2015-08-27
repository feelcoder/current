<?php require_once("online_connection.php");
if(isset($_POST['submit_button']))
    header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>E2Cash Money Transfer | Profile</title>            
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
                    <li class="active">Profile</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span>Profile</h2>
                    
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                           
                    <div class="row">
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
								<form name="Image" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
									<div class="btn-group pull-left camera">
										<input type="file" name="Photo" size="2000000" accept="image/gig, image/jpeg, image/x-ms-bmp,
										image/x-png" size="26"><br />
										<button class="btn btn-primary"  name="Photo" id="Photo" type="submit">Change Picture</button> 
									</div> 
								</form>
								<?php
									$username = $_SESSION["username"];
									$uploadDir = 'assets/images/users/';
									if(isset($_POST['submitPic']))
									{
										$fileName = $_FILES['Photo']['nameOfPic'];
										$tmpName = $_FILES['Photo']['tmp_name'];
										$fileSize = $_FILES['Photo']['size'];
										$fileType = $_FILES['Photo']['type'];
										
										$filePath = $uploadDir . $fileName;
										$result = move_uploaded_file($tmpName, $filePath);
										
										if(!result){
											echo '<p style="color: red">Error uploading file!</p>';
											exit;
										}
										if(!get_magic_quotes_gpc())
										{
											$fileName = addslashes($fileName);
											$filePath = addslashes($filePath);
										}
										$query = "UPDATE users set profile_picture=". $filePath . " where username=" . $username . ";";
										mysql_query($query) or die('Error, query failed: '. mysql_error);
									}
								?>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><a href="#">Change Password</a></button>
                                </div> 
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
									<div class="modal-dialog"> 
										<div class="modal-content"> 
											<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
												<h4 class="modal-title" id="myModalLabel"> Atlant Password Changer</h4> 
											</div> 
											<div class="modal-body">
												<form role="form">
													<div class="form-group">
														<label for="cpassword">Old Password:</label>
														<input type="password" class="form-control" id="cpass" placeholder="Enter old Password">
													</div>
													<div class="form-group">
														<label for="cpassword1">New Password:</label>
														<input type="password" class="form-control" id="cpass1" placeholder="Enter New Password">
													</div>
													<div class="form-group">
														<label for="cpassword2">Confirm:</label>
														<input type="password" class="form-control" id="cpass2" placeholder="Confirm New Password">
													</div>
												</form>
											</div> 
											<div class="modal-footer"> 
												<button type="button" class="btn btn-default" data-dismiss="modal">Close </button> 
												<button type="button" class="btn btn-primary"> Change Password </button> 
											</div> 
										</div><!-- /.modal-content --> 
									</div><!-- /.modal -->
								</div>
								
                            </div>
                            </div>
                        <div class="col-md-6">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="block">                              
                                <form id="jvalidate" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">                            
                                    <div class="form-group">
                                        <?php
                                            if(isset($GLOBALS['exist']))
                                                if($GLOBALS['exist'] == "true")
                                                    echo '<p><style="color: red;"><strong>Username exists already</strong></style></p>';
                                        ?>
                                        <label class="col-md-3 control-label">Username:</label>
                                        <div class="col-md-9">
                                            <?php 

                                            $current_username = $_SESSION['username'];
                                            if(isset($_POST['edit_username']))
                                                echo '    
                                                <input type="text" class="validate[required,maxSize[20]] form-control" name="username" value="'.$current_username.'"/>
                                                <span class="help-block">Required, max size = 20</span>
                                                <div class="btn-group pull-right">
                                                    <button class="btn btn-primary" type="submit" name="save_username">Save</button>
                                                </div>';
                                            
                                            else if(isset($_POST['save_username']))
                                            {
                                                $new_username = $_POST['username'];
                                                if($new_username != $current_username)
                                                {
                                                    $a = mysql_query('select count(*) from users where username = "'.$new_username.'"');
                                                    if($a)
                                                        $b = mysql_result($a,0);
                                                    if($b != 0) //username exists
                                                        echo '    
                                                        <p><style="color: red;"><strong>Username exists already</strong></style></p>
                                                        <input type="text" class="validate[required,maxSize[20]] form-control" name="username" value="'.$current_username.'"/>
                                                        <div class="btn-group pull-right">
                                                            <button class="btn btn-primary" type="submit" name="save_username">Save</button>
                                                        </div>';
                                                    else
                                                    {
                                                        //update database
                                                        $a = mysql_query('update users set username="'.$new_username.'" where username="'.$current_username.'"');
                                                        $_SESSION['username'] = $new_username;

                                                        echo '    
                                                        <input type="text" id="username" class="validate[required,maxSize[20]] form-control" name="username" value="'.$new_username.'" disabled/>
                                                        <button class="help-block" type="submit" id="edit_username" name="edit_username" onclick="setFocusToField("username")">Edit<img src="img/edit.png"/></button>
                                                        ';
                                                    }
                                                }
                                            }
                                            else
                                                echo '    
                                                <input type="text" id="username" class="validate[required,maxSize[20]] form-control" name="username" value="'.$current_username.'" disabled/>
                                                <button class="help-block" type="submit" id="edit_username" name="edit_username" onclick="setFocusToField("username")">Edit<img src="img/edit.png"/></button>
                                                ';

                                            ?>
                                        </div>
                                    </div>
                                            
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Age:</label>
                                        <div class="col-md-9">
                                            <?php

                                            $a = mysql_query('select age from users where username = "'.$_SESSION["username"].'"');
                                            $current_age = mysql_result($a, 0);

                                            if(isset($_POST['edit_age']))
                                                echo '
                                                    <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control" name="age" value="'.$current_age.'"/>
                                                    <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-primary" type="submit" name="save_age">Save</button>
                                                    </div>
                                                    ';
                                            else if(isset($_POST['save_age']))
                                            {
                                                $new_age = $_POST['age'];
                                                $a = mysql_query('update users set age="'.$new_age.'" where username="'.$_SESSION["username"].'"');

                                                echo '
                                                    <input type="text" id="age" class="validate[required,custom[integer],min[18],max[120]] form-control" name="age" value="'.$new_age.'" disabled/>
                                                    <button class="help-block" type="submit" id="edit_age" name="edit_age" onclick="setFocusToField("age")">Edit<img src="img/edit.png"/></button>';
                                            }
                                            else
                                                echo '    
                                                <input type="text" id="age" class="validate[required,custom[integer],min[18],max[120]] form-control" name="age" value="'.$current_age.'" disabled/>
                                                <button class="help-block" type="submit" id="edit_age" name="edit_age" onclick="setFocusToField("age")">Edit<img src="img/edit.png"/></button>
                                                ';
                                                
                                            ?>
                                            
                                        </div>                        
                                    </div>                      
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                            <?php

                                            $a = mysql_query('select description from users where username = "'.$_SESSION["username"].'"');
                                            $currnet_tag = mysql_result($a, 0);

                                            if(isset($_POST['edit_tag']))
                                                echo '
                                                    <input type="text" class="validate[false,maxSize[20]] form-control" name="description" value="'.$current_age.'"/>
                                                    <span class="help-block">A sentence defining you</span>
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-primary" type="submit" name="save_tag">Save</button>
                                                    </div>
                                                    ';
                                            else if(isset($_POST['save_tag']))
                                            {
                                                $new_tag = $_POST['description'];
                                                $a = mysql_query('update users set description="'.$new_tag.'" where username="'.$_SESSION["username"].'"');
                                                
                                                echo '
                                                    <input type="text" id="description" class="validate[false,maxSize[20]] form-control" name="description" value="'.$new_tag.'" disabled/>
                                                    <button class="help-block" type="submit" id="edit_tag" name="edit_tag" onclick="setFocusToField("description")">Edit<img src="img/edit.png"/></button>';
                                            }
                                            else
                                                echo '    
                                                <input type="text" id="description" class="validate[false,maxSize[20]] form-control" name="description" value="'.$currnet_tag.'" disabled/>
                                                <button class="help-block" type="submit" id="edit_tag" name="edit_tag" onclick="setFocusToField("description")">Edit<img src="img/edit.png"/></button>
                                                ';
                                                
                                            ?>
                                        </div>               
                                    </div>    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Phone number:</label>
                                        <div class="col-md-9">
                                            <?php

                                            $a = mysql_query('select phone_number from users where username = "'.$_SESSION["username"].'"');
                                            $current_phone_number = mysql_result($a, 0);

                                            if(isset($_POST['edit_phone_number']))
                                                echo '
                                                    <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="phone_number" value="'.$current_age.'"/>
                                                    <span class="help-block">Required, phone number</span>
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-primary" type="submit" name="save_phone_number">Save</button>
                                                    </div>
                                                    ';
                                            else if(isset($_POST['save_phone_number']))
                                            {
                                                $new_phone_number = $_POST['phone_number'];
                                                $a = mysql_query('update users set phone_number="'.$new_phone_number.'" where username="'.$_SESSION["username"].'"');

                                                echo '
                                                    <input type="text" id="phone_number" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="phone_number" value="'.$new_phone_number.'" disabled/>
                                                    <button class="help-block" type="submit" id="edit_phone_number" name="edit_phone_number" onclick="setFocusToField("phone_number")">Edit<img src="img/edit.png"/></button>';
                                            }
                                            else
                                                echo '    
                                                <input type="text" id="phone_number" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="phone_number" value="'.$current_phone_number.'" disabled/>
                                                <button class="help-block" type="submit" id="edit_phone_number" name="edit_phone_number" onclick="setFocusToField("phone_number")">Edit<img src="img/edit.png"/></button>
                                                ';
                                                
                                            ?>
                                            
                                        </div>               
                                    </div>             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">MTN mobile money number:</label>
                                        <div class="col-md-9">
                                            <?php

                                            $a = mysql_query('select mobile_money_number from users where username = "'.$_SESSION["username"].'"');
                                            $current_mobile_money_number = mysql_result($a, 0);

                                            if(isset($_POST['edit_mobile_money_number']))
                                                echo '
                                                    <input type="text" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="mobile_money_number" value="'.$current_age.'"/>
                                                    <span class="help-block">Required, mobile money number</span>
                                                    <div class="btn-group pull-right">
                                                        <button class="btn btn-primary" type="submit" name="save_mobile_money_number">Save</button>
                                                    </div>
                                                    ';
                                            else if(isset($_POST['save_mobile_money_number']))
                                            {
                                                $new_mobile_money_number = $_POST['mobile_money_number'];
                                                $a = mysql_query('update users set mobile_money_number="'.$new_mobile_money_number.'" where username="'.$_SESSION["username"].'"');

                                                echo '
                                                    <input type="text" id="mmoney" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="mobile_money_number" value="'.$new_mobile_money_number.'" disabled/>
                                                    <button class="help-block" type="submit" id="mobile_money_number" name="mobile_money_number" onclick="setFocusToField("mmoney")">Edit<img src="img/edit.png"/></button>';
                                            }
                                            else
                                                echo '    
                                                <input type="text" id="mmoney" class="validate[required,custom[integer],min[650000000],max[679999999]] form-control" name="mobile_money_number" value="'.$current_mobile_money_number.'" disabled/>
                                                <button class="help-block" type="submit" id="mobile_money_number" name="mobile_money_number" onclick="setFocusToField("mmoney")">Edit<img src="img/edit.png"/></button>
                                                ';
                                                
                                            ?>
                                            
                                        </div>               
                                    </div>                                      
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="submit" name="submit_button">Save</button>
                                    </div>     
									<div class="btn-group pull-left">
										<button class="btn btn-warning"><a href="#">Cancel</a></button>
									</div> 
                                </form>
                            </div>                                               
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>
                        
                        </div>
                    </div>
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
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
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 20
                        },
                        password: {
                                required: true,
                                minlength: 8,
                                maxlength: 10
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
