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
$select_query = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
$select_result = $connection->query($select_query);
if($select_result->num_rows >=1){
	echo "SUCCESS";
}
else {
	die("Failed");
}
$connection->close();
?>