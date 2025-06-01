<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: Login.php");
exit;
?>
<body style="background-color: black;">
	<center>
	<div style="width: 500px; height: 200px; color: white; margin-top: 250px;">
	<?php
		
		echo '<meta http-equiv="refresh" content="2;">';
		echo '<progress max=100><strong>Progress: 60%
		 done.</strong></progress><br>';
		echo '<span class="itext">Logging out, please wait!...</span>';
	?>
</div>
</center>
</body>
</html>