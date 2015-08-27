<?php error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("localhost","test","test");
     if(!$connection)
        header("Location: pages-error-500.php");
    mysql_select_db("test");

session_start();
?>