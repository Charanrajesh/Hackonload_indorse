<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO chat VALUES('$a', '$b','$c')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("message successfully sent");
            window.location="chat.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>