<html>
<head>
<link rel="stylesheet" type="text/css" href="pro.css">

</head>
<body>
	<div id="vcdc" >
<img id="a" src="logo.jpg"><img id="b" src="log1.PNG"></div>
<ul>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/login.php'">Home</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/aboutus.php'">About US</li>
<li>Projects<ul><li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/activeprojects.php'">Active Projects</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/availableprojects.php'">List Of Available Projects</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/requestproject.php'">Request A Project Development</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/previousproject.php'">Previous Projects</li></ul></li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/contactus.php'">Contact US</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/index.php'">Logout </li>
</ul><br><br><br>
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
	$sql="select * from requestproject";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h2>ACTIVE PROJECTS</h2>";
	    while($row = $result->fetch_assoc()) {
			$date=date('d-m-Y',$row["edate"]);
			strtotime($date);
			time()-strtotime($date);
			if((time()-(60*60*24)) < strtotime($date))
			{
        echo "<table align=\"left\"><tr><td><b>PROJECT NAME: </b>" . $row["pname"]. " <br> </td></tr><tr><td><b> PROJECT DESCRIPTION </b>" . $row["pdescription"]. "<br></td></tr><tr><td><b>DUE DATE:</b> " . $date. "<b> &nbsp;&nbsp;&nbsp;BUDGET: </b>" . $row["budget"]."<br></td></tr></table>";
			}
		}
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
