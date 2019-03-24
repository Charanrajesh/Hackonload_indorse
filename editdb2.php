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
$j=$_POST['pp'];
$k=$_POST['ppp'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="UPDATE doctorprofile SET firstname='$a',lasttname='$b',clinicname='$c',phonenumber='$d',doctorid='$e',address='$f',workexperience='$g',tfrom='$h',tto='$i',specilisation='$j',city='$k' where doctorid='$e'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("updated successfully ");
            window.location="editdoctor.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>