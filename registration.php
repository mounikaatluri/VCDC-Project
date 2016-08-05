<html>
<head>
	<script>
		function password()
		{
			var password=document.register.pass;
			var cpassword=document.register.cpass;
			if(cpassword.value!=password.value)
			{
				alert("Passwords should match");
			}
		}
		function login()
		{
			window.location="http://www2.cs.siu.edu/~matluri/project/index.php";
		}
	</script>
<style>
	body
{
	background-image: url("bg1.jpg");
	background-repeat: no-repeat;
	  background-size: cover;
	  text-align: center;

}

	.tooltip {
	display:none;
	position:absolute;
	border:1px solid #333;
	background-color:#161616;
	border-radius:5px;
	padding:10px;
	color:#fff;
	font-size:12px Arial;
}

th{
text-align: left;
}
.f {
	border: 2px dashed #66CCFF;
	width: 230px;
}
table
{
	font-size:18px;
    font-family: "Times New Roman", Times, serif;

}
.btn {
    background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  -webkit-border-radius: 7;
  -moz-border-radius: 7;
  border-radius: 7px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 4px 10px 4px 10px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
#vcdc{
margin-left: auto;
margin-right:auto;
margin-top:-0.1in;
margin-left:-0.1in;
margin-right:-0.1in;}
#a{
max-width:30%;
}
#b{
margin-top:-1in;
max-width:100%;
margin-right:-1in;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript">
$(document).ready(function() {
// Tooltip only Text
$('.masterTooltip').hover(function(){
        // Hover over code
        var title = $(this).attr('title');
        $(this).data('tipText', title).removeAttr('title');
        $('<p class="tooltip"></p>')
        .text(title)
        .appendTo('body')
        .fadeIn('slow');
}, function() {
        // Hover out code
        $(this).attr('title', $(this).data('tipText'));
        $('.tooltip').remove();
}).mousemove(function(e) {
        var mousex = e.pageX + 20; //Get X coordinates
        var mousey = e.pageY + 10; //Get Y coordinates
        $('.tooltip')
        .css({ top: mousey, left: mousex })
});
});
</script>

<title>MOUNIKA</title>
</head>
<body>
<form name="register" action="registration.php" method="post">
	<div id="vcdc" >
<img id="a" src="logo.jpg"><img id="b" src="log1.PNG"></div>
<center>
<h2 >REGISTER</h2>

<table><tr><th><br>First Name</th><td><br><input type="text" style="border: 2px dashed #66CCFF;width: 230px;" title="Enter your First name" id="fn" name="fn"><br></td></tr>
<tr><th><br>Last Name</th><td><br><input type="text" style="border: 2px dashed #66CCFF;width: 230px;" title="Enter your Last name" id="ln" name="ln" ><br></td></tr>
<tr><th><br>User Name</th><td><br><input  style="border: 2px dashed #66CCFF;width: 230px;" title="Enter your UserName for this account" type="text" id="un" name="un" ><br></td></tr>
<tr><th><br>Password</th><td><br><input style="border: 2px dashed #66CCFF;width: 230px;" title="Enter your password" type="password" id="pass" name="pass" ><br></td></tr>
<tr><th><br>Confirm Password</th><td><br><input style="border: 2px dashed #66CCFF;width: 230px;" type="password" id="cpass" class="masterTooltip" name="cpass" onblur="password()"><br></td></tr>
<tr><th><br>Email</th><td><br><input style="border: 2px dashed #66CCFF;width: 230px;" title="Enter your email address" type="email" id="email" name="email" ><br></td></tr>
<tr><th><br>Your primary role in this system</th><td><br><input type="radio" title="Make investments in desired area" name="first" value="investor" class="masterTooltip">Investor<input type="radio" title="Develops Project" name="first" value="developer" class="masterTooltip">Developer<input type="radio" title="Will post request based on their need of project" name="first" value="requestor" class="masterTooltip">Requestor<br></td>
<tr><th><br>Your secondary role in this system</th><td><br><input type="radio" name="second" value="investor" title="Make investments in desired area" class="masterTooltip">Investor<input type="radio" title="Develops Project" name="second" value="developer" class="masterTooltip">Developer<input type="radio" title="Will post request based on their need of project" name="second" value="requestor" class="masterTooltip">Requestor<br></td>
<tr><th><br>Your final role in this system</th><td><br><input type="radio" name="third" value="investor" title="Make investments in desired area" class="masterTooltip">Investor<input type="radio" title="Develops Project" name="third" value="developer" class="masterTooltip">Developer<input type="radio" name="third" title="Will post request based on their need of project" value="requestor" class="masterTooltip">Requestor<br></td></tr></TABLE>
<BR><input type="submit" CLASS="btn" value="REGISTER" id="register" name="register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="RESET" CLASS="btn" value="RESET" ONCLICK="RESET()">
</center>
</form>
<?php
if(isset($_POST['register']))
{
   regi();
}
function regi()
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
	$fn=$_POST["fn"];
	$ln=$_POST["ln"];
	$un=$_POST["un"];
	$pass=$_POST["pass"];
	$email=$_POST["email"];
    $first=$_POST["first"];
    $second=$_POST["second"];
    $third=$_POST["third"]; 
	$sql="INSERT INTO vcdc(firstname,lastname,username,password,email,role1,role2,role3) VALUES ('$fn','$ln','$un','$pass','$email','$first','$second','$third')";
	if ($conn->query($sql) === TRUE) {
    echo "<center>New record created successfully</center><input type=\"button\" class=\"btn\" value=\"Login Page\" onclick=\"login()\"";
	} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
	$conn->close();
}
?>
</body>
</html>
