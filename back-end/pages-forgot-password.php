<?php error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("localhost","test","test");
     if(!$connection)
        header("Location: pages-error-500.php");
    mysql_select_db("test");

session_start();

if(isset($_SESSION["username"]))
    $_SESSION["username"] = "off";


?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Quick Money Transfer | Password Reset</title>            
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
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Forgotten Password? Fill the form below</strong></div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <!-- start login -->
                        <?php
						
                        //check username and password
                        if(isset($_POST["username"]) && isset($_POST["email"]))
                        {
                            $username = $_POST["username"];
							$email = $_POST["email"];
							
							//error checking
							if(!empty($username)){
								echo '<p style="color: red;"><strong>Empty Username field. Please fill it!</strong></p>';
								header("Location: pages-forgot-password.php");
							}

                            $a = mysql_query('select username from users where username="'.$username.'"');
                            $b = mysql_fetch_array($a);

                            //for some reason, size of $b is 1. Even when the query is empty
                            if(count($b) <= 1) //username does not exist
                            {
                                echo '<p style="color: red;"><strong>Username incorrect or does not exist!</strong></p>';
                                $_SESSION["username"] = "off";
                            }
                            else //username exists
                            {
								//TODO: send mail to the user 
								if(!empty($email))
								{
									require 'PHPMailerAutoload.php';
									
									$mail = new PHPMailer;
									
									$mail->isSMTP();
									$mail->Host = 'smtp.gmail.com';
									$mail->SMTPAuth = true;
									$mail->Username = 'dancarl758@gmail.com';
									$mail->Password = 'finch@123';
									$mail->SMTPSecure = 'tls';
									$mail->Port = 587;
									$mail->setFrom('dancarl758@gmail.com', 'Daniel Carlson');
									$mail->addReplyTo('achabill12@gmail.com', 'Acha Bill');
									$mail->addAddress($email);
									$mail->WordWrap = 50;
									$mail->isHTML(true);
									
									$mail->Subject = 'Here is your new password!';
									
									//Generate the new password
									function random_string($length){
										$key = '';
										$keys = array_merge(range(0, 9), range('a', 'z'));
										
										for($i = 0; $i < $length; $i++){
											$key .= $keys[array_rand($keys)];
										}
										return $key;
									}
									$token = random_string(10);
									
									$body = 'Enter this password in the form presented to you on the web page now.\nThanks in advance for your patience:\n';
									$body .= '\t\tConfirmation password: ' . $token;
									
									$mail->Body = $body;
									$mail->AltBody = $body;
									
									if(!$mail->send()){
										echo '<p style="color: red;"><strong>Message could not be sent!</strong></p>';
										echo '<p style="color: red;"><strong>'. $mail->ErrorInfo . '</strong></p>;';
										exit;
									} else {
										//TODO: display form for password receive through email
										
									}
								} else {
									echo '<p style="color: red;"><strong>Empty email field. Please fill it!</strong></p>';
								}
								
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
                            <input type="email" class="form-control" name="email" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group pull-right" >
                            <button class="btn btn-info btn-block" name="login">Send Email</button>
                        </div> 
                    </div>
                    </form>
					<div class="btn-group pull-left">
						<a href="pages-login.php"><button class="btn btn-link btn-block" name="go_back">Go Back</button></a>
					</div>
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






