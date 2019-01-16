<?php
/*
// Connection to server with 
$servername = "localhost";
$sql_username = "username";
$sql_password = "password";

// Create connection
$conn = mysqli_connect($servername, $sql_username, $sql_password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM $user_table";
*/

$login_username = $_POST["login_username"];
$login_password = $_POST["login_password"];

if($login_username == "user" && $login_password == "password"){
	header("Location: http://ubuntuserver/~henrik/book_rent/user_homepage.html");
	exit();
}
else if($login_username == "admin" && $login_password == "admin"){
	header("Location: http://ubuntuserver/~henrik/book_rent/admin_homepage.html");
	exit();
}
else{
	header("Location: http://ubuntuserver/~henrik/book_rent/index.html");
	exit();
}

?>