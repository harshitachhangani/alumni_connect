<?php
// Database Connection
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_connect";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Login Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) == 1) {
		// User Authenticated Successfully
		echo "Login successful!";
	} else {
		// Authentication Failed
		echo "Invalid email or password";
	}
	
	mysqli_close($conn);
}
?>
