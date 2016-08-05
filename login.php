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
  
  text-align: center;
}
.sample img {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    height: 100%;
    width: 100%;
    height: auto;
    opacity: 0.6;
}
</style>
</head>
<body>
	<?php 
$x=$_GET['refer'];
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
?>
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
</ul>
<p><div class="sample" align="center" size="6"><?php
    echo "Hello ".$_SESSION["username"];
?></p><p ><font face "modern"><i>Welcome to the connection place for software technology enthusiasts.<br/>  We facilitate communication between Investors (individual or groups interested in investing in software deveopment), <br />Requesters (individual or groups interested in a particular software application) <br /> and Developers (individual or groups interested in software and application development).</p><p> You can browse the <a href="http://www2.cs.siu.edu/~matluri/project/activeprojects.php">Active Projects here</a></font></i></p>
</div>
</body>
</html>
