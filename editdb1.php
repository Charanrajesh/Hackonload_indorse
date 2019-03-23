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
$g= $_POST['p7'];
$h=$_POST['p8'];
$i=$_POST['p9'];



$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="UPDATE userprofile SET firstname='$a',seccondname='$b',phonenumber='$c',email='$d',longitude='$e',latitude='$f',address='$g',gender='$h',bloodgroup='$i' where email='$d'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("updated successfully ");
            window.location="edituser.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>