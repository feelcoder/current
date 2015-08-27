<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$connection = mysql_pconnect("mysql.grendelhosting.com","u899108437_test","testtest");
     if(!$connection)
        header("Location: pages-error-500.html");
    mysql_select_db("u899108437_test");
session_start();
?>
