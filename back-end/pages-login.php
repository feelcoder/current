<?php error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("localhost","test","test");
     if(!$connection)
        header("Location: pages-error-500.php");
    mysql_select_db("test");

//clear any running session
//for some reason, unset was not working
if(isset($_SESSION["username"]))
    $_SESSION["username"] = "off";

//start new session
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Quick Money Transfer</title>            
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
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <!-- start login -->
                        <?php
                        //check username and password
                        if(isset($_POST["username"]) && isset($_POST["password"]))
                        {
                            $username = $_POST["username"];
                            $password = $_POST["password"];

                            $a = mysql_query('select username,password from users where username="'.$username.'"');
                            $b = mysql_fetch_array($a);

                            //for some reason, size of $b is 1. Even when the query is empty
                            if(count($b) <= 1) //username does not exist
                            {
                                echo '<p style="color: red;"><strong>Username incorrect or does not exist!</strong></p>';
                                $_SESSION["username"] = "off";
                            }
                            else //username exists
                            {
                                $d = hash('sha512',$password);   //hash password

                                //check if password is correct
                                if($d == $b[1])
                                {
                                    $_SESSION["username"] = $username;
                                    header("Location: index.php"); 
                                }
                                else
                                {
                                    echo '<p style="color: red;"><strong>Password incorrect!</strong></p>';
                                    $_SESSION["username"] = "off";
                                }
                            }
                        }
                    
                        ?>
                        <!-- end of login -->
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" name="login">Log In</button>
                        </div>
                        <div class="col-md-6">
                            <a href="form-signup.php" class="btn btn-link btn-block">Create Account</a>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2015 Quick Money Transfer
                    </div>
                    <div class="pull-right">
                        <a href="../index.php">Home</a> |
                        <a href="../about-us.php">About</a> |
                        <a href="../privacy.php">Privacy</a> |
                        <a href="../contacts.php">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>






