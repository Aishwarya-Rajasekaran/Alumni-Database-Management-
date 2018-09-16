<!DOCTYPE html>
<html>
<body>
<h1 style="color:#0e075b" align="center">Alumni</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "alumni";
//echo "Hello world 1!</br>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo "Hello world 2!</br>";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Hello world 3!</br>";
$user_id = mysqli_real_escape_string($conn,$_GET['user_id']);
$user_password = mysqli_real_escape_string($conn,$_GET['user_password']);

$age = mysqli_real_escape_string($conn,$_GET['age']);
$fname = mysqli_real_escape_string($conn,$_GET['firstname']);
$lname = mysqli_real_escape_string($conn,$_GET['middlename']);
$mname = mysqli_real_escape_string($conn,$_GET['lastname']);
$dno = mysqli_real_escape_string($conn,$_GET['dno']);
$street = mysqli_real_escape_string($conn,$_GET['street']);
$city = mysqli_real_escape_string($conn,$_GET['city']);
$state = mysqli_real_escape_string($conn,$_GET['state']);
$country= mysqli_real_escape_string($conn,$_GET['country']);
$pincode = mysqli_real_escape_string($conn,$_GET['pincode']);
$DOB = mysqli_real_escape_string($conn,$_GET['dob']);
$gender = mysqli_real_escape_string($conn,$_GET['gender']);
$pemail_id = mysqli_real_escape_string($conn,$_GET['email']);
$ph1 = mysqli_real_escape_string($conn,$_GET['Phone1']);
$ph2 = mysqli_real_escape_string($conn,$_GET['Phone2']);

//echo "Hello world 3.5!</br>";
$sql = "insert into ALUMNII(ph1,ph2,pemail_id,DOB,gender,age,fname,mname,lname,dno,street,city,state,countr,pincode) values('$ph1','$ph2','$pemail_id','$DOB','$gender','$age','$fname','$mname','$lname','$dno','$street','$city','$state','$countr','$pincode')";
//echo "Hello world 4!</br>";
if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "Welcome back, IIITian! Please login to continue";
} else {
    echo "You have already been registered!";
}
mysqli_close($conn);
</body>
</html>

