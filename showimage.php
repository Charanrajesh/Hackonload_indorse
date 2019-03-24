<?php

mysql_connect("localhost","root","");
mysql_select_db("pocketclinic");
if(isset($_POST['submit']))
{
	$db="pocketClinic";
$user="root";
$pass="";
$server="localhost";




$con=mysqli_connect($server,$user,$pass,$db);
	if($con){
if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT * FROM `blob` WHERE `id`='$id'");
	while($row = mysql_fetch_assoc($query))
	{
		$imageData = $row["image"];
	}
	header("content-type: image/jpeg");
	echo $imageData;
}
else
{
	echo "Error!";
}
	}
}
?>