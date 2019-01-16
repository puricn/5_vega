<?php

// Connection to server with MySQL db
$servername = "localhost";
$sql_username = "user";
$sql_password = "password";
$sql_dbname = "dbname";

// Create connection
$conn = mysqli_connect($servername, $sql_username, $sql_password, $sql_dbname);
// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

/*
$mysqli = new mysqli("localhost", "henrik", "leghi1996", "henrik");
if($mysqli->connect_error) {
  exit('Could not connect');
}*/

$sql = "SELECT *
FROM LIBRARY_DB";

//get results from database
$result = mysqli_query($conn, $sql);
$all_users = [];  //declare an array for saving property

//showing property
while ($property = mysqli_fetch_field($result)) {
    //echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_users, $property->name);  //save those to array
}

echo "<table id = 'book_table'>";
echo "<tr>";
echo "<td>Book ID</td>";
echo "<td>Author</td>";
echo "<td>Title</td>";
echo "<td>Publisher</td>";
echo "<td>Out</td>";
echo "</tr>";

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach($all_users as $item){
        echo "<td>" . $row[$item] . "</td>"; //get items using property value
    }
    echo "</tr>";
}
echo "</table>";

?>