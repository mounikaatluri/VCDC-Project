<?php
$servername = "dbserv.cs.siu.edu";
$username = "matluri";
$password = "8FYQTnwR";
$dbname="matluri";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="CREATE TABLE requestproject (name VARCHAR(30) NOT NULL, email VARCHAR(40) NOT NULL, pname VARCHAR(50) NOT NULL, pdescription VARCHAR(60000) NOT NULL, cdate DATE, edate DATE, budget INT(15), permission INT(1))";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
