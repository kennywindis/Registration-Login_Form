<?php
$servername="localhost";
$username="root";
$password="";
$dbname="clients";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
	    echo "connection successful";
}
else{
	    echo "connection failed";
}
?>
