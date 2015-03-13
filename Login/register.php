<?php
include "settings.php";

$connection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    exit();
}
$firstname = $connection->real_escape_string($_POST['firstname']);
$lastname = $connection->real_escape_string($_POST['lastname']);
$Email = $connection->real_escape_string($_POST['Email']);
$phonenumber = $connection->real_escape_string($_POST['phonenumber']);
$gender = $connection->real_escape_string($_POST['gender']);
$dob = $connection->real_escape_string($_POST['dob']);
$city = $connection->real_escape_string($_POST['city']);
$location = $connection->real_escape_string($_POST['location']);
$insert_query = "INSERT INTO login_details (firstname,lastname,email,phonenumber,gender,dob,city,location) ";
$insert_query .=" VALUES ('$firstname','$lastname','$Email','$phonenumber','$gender','$dob','$city','$location')";
$insert_result = $connection->query($insert_query);

if(!$insert_result) {
    die("Failed");
}
else {
    echo "SUCCESS";
}

$connection->close();
?>