<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a1= $_POST['p'];
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$e=$_POST['p4'];
$f=$_POST['p5'];
$g=$_POST['p6'];
$h=$_POST['p7'];
$i=$_POST['p8'];
$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="INSERT INTO test VALUES('$a1','$a', '$b', '$c', '$e', '$f', '$g', '$h', '$i')";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("test Added Succesfully ");
            window.location="addtest.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>