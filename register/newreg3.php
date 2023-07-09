<html>
	<style>
	body {
		background-color: grey;
		margin:0;
	}
	form {
		display: inline
		justify-content: center;
	}
	form input[type="submit"] {
		width: 20%;
		font-weight:bold;
		bg-color: cyan;
	}
	h1 {
		justify-content: center;
		color: skyblue;
	}
	</style>
<body>
	<h1>Student Registration Page</h1>
        <form action="http://localhost/kennyphpfiles/newreg2.php" method="POST">
        MatricNumber: <input type="number" name="matricnumber"><br/><br/>
        Password: <input type="password" name="password" id="password"><br/><br/>
        ConfirmPassword: <input type="password" name="password" id="confirmpassword"><br/><br/>
        Email: <input type="email" name="email" id="email"><br/><br/>
        <input type="submit" value="Register">
        </form>
</body>
</html>
