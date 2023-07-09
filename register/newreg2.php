<?php
include("newreg.php");
error_reporting(0);
?>
<?php
$MN=$_POST['matricnumber'];
$PW=$_POST['password'];
$CPW=$_POST['confirmpassword'];
$EM=$_POST['email'];
$query="insert into me values('$MN','$PW','$CPW','$EM')";
$data=mysqli_query($conn,$query);
if(data){
		echo "Data submitted successfully";
}
?>
