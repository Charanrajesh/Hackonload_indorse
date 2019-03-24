<?php

?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: entlogin.php");
exit(); }
?>
