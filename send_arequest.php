
<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a=$_POST['sender_id'];
$b=$_SESSION['username'];

$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	echo"connection successful";
	$sql="INSERT INTO send_arequest VALUES('$a','$b')";

	if (mysqli_query($con, $sql)) {
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