<?php

if($_POST["submit"]) {
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
    $name=strtolower($_POST["name"]);
    $email=$_POST["email"];
    $pname=$_POST["pname"];
    $message=$_POST["desc"];
    $cdate=$_POST["cdate"];
    $edate=$_POST["edate"];
    $budget=$_POST["budget"];
    $val=1;
	$sql="INSERT INTO requestproject(name,email,pname,pdescription,cdate,edate,budget,permission) VALUES ('$name','$email','$pname','$message','$cdate','$edate','$budget','$val')";
	if ($conn->query($sql) === TRUE) {
    echo "<center>New record created successfully</center>";
	} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
	$conn->close();
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<?php
session_start();
$url=$_SESSION["background"];
?><html>
<head>
	<link rel="stylesheet" type="text/css" href="pro.css">

<style>
body {
	background-image: url('<?php echo $url ?>');
	background-repeat: no-repeat;
	  background-size: cover;
  font-family: 'Lucida Grande', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  padding: 20px 50px 150px;
  font-size: 17px;
  text-align: center;
}</style>
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
</ul><br><br>
<h2>REQUEST A PROJECT DEVELOPMENT</h2><br>
<form method="post" action="requestproject.php">
	<table align="center"><tr>
	<td><br>User Name: <br></td><td><br><input type="text" name="name" id="name" class="f"><br></td></tr>
	<tr><td><br>Email-Address: <br></td><td><br><input type="text" name="email" id="email" class="f"><br></td></tr>
	<tr><td><br>Project Name:<br></td><td> <br><input type="text" name="pname" id="pname" class="f"><br></td></tr>
	<tr><td><br>Project Description:<br></td><td><br><textarea name="desc" id="desc" rows="4" cols="20" class="f"></textarea><br></td></tr>
	<tr><td><br>Requested date: (mm/dd/yyyy)<br></td><td><br><input type="date" name="cdate" id="cdate" class="f"><br></td></tr>
	<tr><td><br>Expected Date of completion:(mm/dd/yyyy)<br></td><td><br><input type="date" name="edate" id="edate" class="f"><br></td></tr>
	<tr><td><br>Available Budget:( in $)<br></td><td><br><input type="text" name="budget" id="budget" class="f"><br></td></tr>
	<tr><td></td></tr></table><br><br><input type="submit" value="Submit for Evaluation" id="submit" name="submit" class="sub">
</form>
</body>
</html>
