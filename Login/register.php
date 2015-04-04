<?php
include "settings.php";

$connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    exit();
}

$username = $connection->real_escape_string($_POST['username']);
$password = $connection->real_escape_string($_POST['password']);
$password = md5($password);
$Email = $connection->real_escape_string($_POST['Email']);
$phonenumber = $connection->real_escape_string($_POST['phonenumber']);
$gender = $connection->real_escape_string($_POST['gender']);

if($username =="" ||$password =="" ||$Email =="" ||$phonenumber ==""){
	echo "<meta http-equiv='refresh' content='0;url=UserLoginRegister.html?status=incomplete'>";
	die();
}

$insert_query = "INSERT IGNORE INTO user_details (username,password,email,phonenumber,gender) ";
$insert_query .=" VALUES ('$username','$password','$Email','$phonenumber','$gender')";
$insert_result = $connection->query($insert_query);

if($connection->affected_rows > 0){
	echo "SUCCESS";
}
else{
	echo "<meta http-equiv='refresh' content='0;url=UserLoginRegister.html?status=duplicate'>";
	die();
}

$connection->close();
?>