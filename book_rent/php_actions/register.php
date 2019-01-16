<?php

// Connection to server with MySQL db
$servername = "localhost";
$sql_username = "username";
$sql_password = "password";
$sql_dbname = "dbname";


// Create connection
$conn = mysqli_connect($servername, $sql_username, $sql_password, $sql_dbname);
// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


$register_username = $_POST["register_username"]; // registration username
$register_password = $_POST["register_password"]; // registration password
$register_email = $_POST["register_email"]; // registration email
$date = date("Y-n-d H:m:s"); // registration date and time

// Insert SQL query
$sql = "INSERT INTO LIBRARY_DB (id, username, password, email, date)
VALUES ('', '$register_username', '$register_password', '$register_email', '$date')";

if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
    /*if(mysqli_errno($conn) == 1062){
    	echo "problem";
    }
    else{
    	//header("Location: http://ubuntuserver/~henrik/book_rent/index.php");
    }*/
}

mysqli_close($conn);

?>