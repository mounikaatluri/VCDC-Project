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
$sql="select * from vcdc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<center>Current Users </center><br><br>";
    while($row = $result->fetch_assoc()) {
        echo "<center><b>FirstName: </b>" . $row["firstname"]. "  <b>- LastName: </b>" . $row["lastname"]. "<b>UserName:</b> " . $row["username"]. "<b>Password: </b>" . $row["password"]."<b>Primary Role </b>" . $row["role1"]."<b>Second Role: </b>" . $row["role2"]."<b>Least important Role: </b>" . $row["role3"]."<br></center>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
