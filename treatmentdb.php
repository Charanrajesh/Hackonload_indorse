<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d= $_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];
$y=$_POST['p11'];
$trn_date = date("Y-m-d H:i:s");


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO treatmentinfo VALUES('$a','$y','$b', '$c','$d', '$e', '$f','$g','$trn_date')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("Your message sent successfully");
            window.location="addtreatment.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>