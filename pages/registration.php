<?php

	session_start();
	//header('location:login.php');

	$con = mysqli_connect('localhost', 'root', '');

	mysqli_select_db($con, 'user_signup');

	$name = $_POST['user'];
	$pass = $_POST['password'];

	$s = " select * from usertable where name = '$name'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num==1){
		if (! (isset($_POST['fullname']) && strlen($_POST['fullname']))) 
				{
				echo "<script type=\"text/javascript\">window.alert('Username already taken !');
				window.location.href = '/projekti_php/pages/login.php';</script>"; 
				exit;
				}
	}
	else {
		$reg = "insert into usertable(name, password) values ('$name','$pass')";
		mysqli_query($con, $reg);
		// echo "Registration Successfull";
		if (! (isset($_POST['fullname']) && strlen($_POST['fullname']))) 
				{
				echo "<script type=\"text/javascript\">window.alert('Registration Successful');
				window.location.href = '/projekti_php/pages/login.php';</script>"; 
				exit;
				}

	}
?>