<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];
$h=$_POST['p8'];
$i=$_POST['p9'];

$con=mysqli_connect($server,$user,$pass,$db);
if($con){
	echo"connection successful";
	$sq="INSERT INTO userpp VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";

	if (mysqli_query($con, $sq)) {
               echo "New record created successfully";
            }
	else{
		echo"Record not inserted";
	}
}
else{
	echo"connection error";

}
?>