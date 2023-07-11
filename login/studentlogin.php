<html>
    <head>
        <title>New login</title>
</head>  

<body>
    <h3>STUDENT LOGIN PAGE</h3>
    <form action="" method="POST">
        MatricNumber:<input type="number" name="matricnumber">
        Password:<input type="password" name="password">
        <input type="submit" name="bttlogin" value="LOGIN">
            <a href="http://localhost/kennyphpfiles/newreg3.php">New users,Register Here</a>
        </button>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','clients');
?>
<?php
session_start();
if(isset($_POST['bttlogin'])){
	    $MN=$_POST['matricnumber'];
	        $PW=$_POST['password'];
	        $result=mysqli_query($conn,'select * from newlogin where matricnumber="'.$MatricNumber.'" and password="'.$Password.'"');

		if(mysqli_num_rows($result)==1){
			    $_SESSION['matricnumber']=$Matric;
			        header('location:http://localhost/kennyphpfiles/practicemode.php');
			        }
		    else{
			        echo "invalid matricnumber or password";
				    }
		    }
    ?> 
