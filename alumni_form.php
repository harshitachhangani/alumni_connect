<?php
require_once'login.php';
$con=new mysqli($server,$username,$password,$db);
if($con->connect_error)die($con->connect_error);
if (isset($_POST['submit']))
 {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $passwd = $_POST['password'];
    $phone=$_POST['phone'];
    $skill=$_POST['skill'];
    $passout=$_POST['passout_year'];
    $gender=$_POST['gender'];
    $branch=$_POST['branch'];
    $interest=$_POST['interest'];
    $job=$_POST['job'];
    $location=$_POST['location'];
    $insertquery="INSERT INTO `alumni_registered` ('Alumni_name','username','password','email','gender','mobile_no','passout_year','branch','skills','interest','location','current_job','pic') VALUES ('$name','$username','$password','$email','$gender','$phone','$passout','$branch','$skill','$interest','$location','$job')";
    $res = $con->query($insertquery);
    if(!$res)
    {
    
            die("Database access failed:".$con->error);

    }else
    {
        header("Location: index.html");
    }
     }
     ?>
</html>