<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	if($_POST["approve1"]) {
	$sql="INSERT INTO send_request1 VALUES('$a', '$b')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("apppoinment successfully sent");
            window.location="specilalist.php";
            </script>
			<?php 
}
	}
	if($_POST["approve"]) {
	 $sql = " delete from send_request1 where sender_id='$a' and user_id='$b'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("apppoinment successfully sent");
            window.location="appointmentnotification.php";
            </script>
			<?php 
}
	}
	else{
	echo"connection error";
}




}
?>








  
   