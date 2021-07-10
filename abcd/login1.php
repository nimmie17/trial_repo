<?php
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','happycradles');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(email, pwd) values(?, ?)");
		$stmt->bind_param("ss", $email, $pwd);
		$execval = $stmt->execute();
		echo $execval;
		echo "Login Successful...";
		$stmt->close();
		$conn->close();
	}
?>