
<?php
include("database-connection.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="#" method="POST">
		First Name:<input type="text" name="fname">
		<br>
		Last Name:<input type="text" name="lname">
		<br>

		Gender:
		<input type="radio" name="gen"value="Male">Male<input type="radio" name="gen"value="Female">Fenale
		<br>

		DOB:
		<input type="date" name="dob">
		<br>
		Email:
		<input type="email" name="email">
		<br>
		Mobile:
		<input type="number" name="mobile">
		<br>
		Password:
		<input type="password" name="password">
		<br>

		<input type="submit" name="submit" value="Sign Up">
		
	</form>

	<?php

	if (isset($_POST['submit'])) 
	{
		 $fname=$_POST['fname'];
	     $lname=$_POST['lname'];
	     $gen=$_POST['gen'];
		 $email=$_POST['email'];
		 $mobile=$_POST['mobile'];
		 $password=$_POST['password'];

		$result= mysqli_query($mysqli, "insert into registration_form values('','$fname', '$lname', '$gen', '$email', '$mobile', '$password')");


		if ($result)
		{
			echo "Registration Successful";
		}
		else
		{
			echo "Failed";		}
	}
	  ?>

</body>
</html>