<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: doctorlogin.php"); // Redirecting To Home Page
}
?>