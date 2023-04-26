<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_connect";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Signup Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	
	if (mysqli_query($conn, $sql)) {
		echo "Signup successful!";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
