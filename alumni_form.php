<?php


$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "alumni_connect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$alumni_name = $_POST['alumni_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$passout_year = $_POST['passout_year'];
$branch = $_POST['branch'];
$skills = $_POST['skills'];
$interest = $_POST['interest'];
$location = $_POST['location'];
$job = $_POST['job'];
$pic = $_POST['pic'];

// Insert data into database
$sql = "INSERT INTO alumni_registered (alumni_name, username, password , email ,gender, mobile_no, passout_year, branch, skills, interest, location, job, pic) 
        VALUES ('$alumni_name', '$username', '$password', '$email', '$gender', '$mobile_no', '$passout_year', '$branch', '$skills', '$interest', '$location', '$job', '$pic')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
