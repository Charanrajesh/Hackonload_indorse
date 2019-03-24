<?php 
$db="pocketclinic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];




$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="delete from doctorprofile where doctorid='$a'";
	$sql1="delete from doctor where username='$a'";
	if($con->query($sql)===TRUE&&$con->query($sql1)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("doctor information deleted  successfully ");
            window.location="doctorinfo.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>