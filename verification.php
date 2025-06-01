<?php
session_start();
include 'db_connection.php';

extract($_POST);


if (isset($_POST['email']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
	exit();
	}else if (empty($pass)) {
		echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
	exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$uname' AND password='$pass'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result)===1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email']===$uname && $row['password']===$pass) {
				$_SESSION['created_at'] = $row['created_at'];
				$_SESSION['phone_number'] = $row['phone_number'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['full_name'] = $row['full_name'];
				$_SESSION['id'] = $row['id'];
				echo "<script type='text/javascript'>document.location='Dashboard.php'</script>";
			}else{
				echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
	}echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
}echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
}echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		document.location='Login.php'</script>";
}
?>