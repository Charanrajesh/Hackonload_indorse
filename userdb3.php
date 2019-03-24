<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from send_request where sender_id='$a' and user_id='$b'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("apppoinment successfully Cancelled");
            window.location="deletephp.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>