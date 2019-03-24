<?php 
$db="pocketclnic";
$user="root";
$pass="";
$server="localhost";
$a= $_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p4'];
$d= $_POST['p5'];
$e=$_POST['p6'];
$f=$_POST['p7'];
$g= $_POST['p9'];
$h=$_POST['p10'];
$i=$_POST['p11'];
$j=$_POST['p3'];
$k=$_POST['p8'];


$con=mysqli_connect($server,$user,$pass,$db);

if($con){
	
	$sql="UPDATE businessinfo SET firstname='$a',seccondname='$b',phonenumber='$c',email='$d',longitude='$e',latitude='$f',btype='$g',about_business='$h',userID='$i',nob='$j',address='$k' where userID='$i'";
	if($con->query($sql)===TRUE){
		echo"Record inserted";?>
		<script type="text/javascript">
            window.alert("updated successfully ");
            window.location="editent.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>