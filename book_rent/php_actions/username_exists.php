<?php

echo "php username_exists";


$servername = "localhost";
$admin_username = "henrik"; // admin can manage LIBRARY_DB: add, remove users from users table; add, remove books from books table
$admin_password = "leghi1996"; // admin can manage LIBRARY_DB: add, remove users from users table; add, remove books from books table
$dbname = "henrik";


// Create connection
$conn = mysqli_connect($servername, $admin_username, $admin_password, $dbname);
// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username, password, email
FROM LIBRARY_DB";

$stmt = $mysqli->prepare(sql);
$stmt->bind_param("s", $_POST['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $username, $password, $email,);
$stmt->fetch();
$stmt->close();

echo $id . " " . $username . " " . $password . " " . $email . "<br>";

?>