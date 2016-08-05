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
</ul><br><br><br>
<table id="t01" align="center"><tr><th>ADMIN NAME</th><th>NUMBER</th><th>EMAIL-ADDRESS</th></tr><tr><td>NAMDAR MOGHARREBAN</td><td>6183037089</td><td>namdar@siu.edu</td></tr></table>
<p>ENQUIRY FORM</p>
<form name="contact" action="contactus.php" method="post">
<table align="center" cellpadding="10"><tr><th><p>Full Name*</p>
<input type="text" name="fname" class="f">
<p>Email*</p>
<input type="text" name="email" class="f">
<p>Confirm Email*</p>
<input type="text" name="cemail" class="f">
<p>Subject*</p>
<input type="text" name="subject" class="f">
</th><th>Message*<br>
<textarea rows="10" cols="25" name="message" class="f"></textarea></th></tr>
<tr><th colspan="2"><input type="submit" name="submit" value="SUBMIT ENQUIRY" class="sub"></th>
</tr></table></form>
<?php
if(isset($_POST['submit']))
{
   check();
}
function check()
{
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
	$fn=strtolower($_POST["fname"]);
	$email=strtolower($_POST["email"]);
	$subject=strtolower($_POST["subject"]);
	$message=strtolower($_POST["message"]);
	$sql="INSERT INTO contactus(fname,email,subject,message) VALUES ('$fn','$email','$subject','$message')";
	if ($conn->query($sql) === TRUE) {
    echo "<center>Query submitted successfully</center>";
	} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
	$conn->close();
}
?></body>
</html>
