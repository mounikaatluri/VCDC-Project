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
</style>
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
</ul><h3>ABOUT US</h3>
<p align="left">The system is intended to connect three types of users: investors, developers, and project
requesters.<br><br>
<b>$$$</b> Investors are the type of users that make investments in their desired area.<br><br>
<b>$$$</b> Developers are the type of users that are educated and experienced enough to develop a
project.<br><br>
<b>$$$</b> Requesters are the type of users that see the need for a system/project to exist, and can post
their request.<br><br>
In this system, users are not limited to one role, and they can prioritize their roles.
</p>
</body>
</html>
