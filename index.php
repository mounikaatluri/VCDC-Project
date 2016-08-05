<?php
session_start();
?>
<html>
<head>
<script>
function register()
{
window.location="http://www2.cs.siu.edu/~matluri/project/registration.php";
}
</script>
<link rel="stylesheet" type="text/css" href="pro.css">
</head>
<body>
<div id="vcdc" >
<img id="a" src="logo.jpg"><img id="b" src="log1.PNG"></div>
<center>
<h2 align="center">WELCOME</h2>
<p>Venture Capital Developers connection is a website that connects developers and inversters. <br>If you are not a member please sign up to access all features</p>

<input type="button" class="btn" VALUE="REGISTER" onclick="register()"></input>
<br><br><br><br>
<div> 
<h2>LOGIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
<form action="index.php" method="post">
<table><tr><th><br>User Name:  </th><td><br><input type="text" name="fn" id="fn" class="f"><br></td></tr>
<tr><th><br>Password:  </th><td><br><input type="password" id="ln" name="ln" class="f"><br></td></tr></table>
<BR><input type="submit" CLASS="sub" value="LOGIN" id="login1" name="login1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="RESET" CLASS="sub" value="RESET" ONCLICK="RESET()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></form>
</center>
<?php
if(isset($_POST['login1']))
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
	$fn=strtolower($_POST["fn"]);
	$ln=strtolower($_POST["ln"]);
	$sql = "SELECT username,password,role1 FROM vcdc";
$result = $conn->query($sql);
      $x=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if((($fn==$row["username"])&&($ln==$row["password"]))||(($_POST["fn"]==$row["username"])&&($_POST["ln"]==$row["password"])))
		{
			$_SESSION["username"]=$fn;
			echo $row["role1"];
			
			if($row["role1"]=="requestor")
			{
			$_SESSION["background"]='http://www2.cs.siu.edu/~matluri/project/background/bg2.jpg';
		}
		if($row["role1"]=="investor")
			{
			$_SESSION["background"]='http://www2.cs.siu.edu/~matluri/project/background/a.jpg';
		}
		if($row["role1"]=="developer")
			{
			$_SESSION["background"]='http://www2.cs.siu.edu/~matluri/project/background/b.jpg';
		}
        header("Location: http://www2.cs.siu.edu/~matluri/project/login.php"); /* Redirect browser */
        $x=1;
		exit();
		}
		if(($fn=="admin")&&($ln=="admin"))
		{
		$_SESSION["background"]='http://www2.cs.siu.edu/~matluri/project/background/x.jpg';
		header("Location: http://www2.cs.siu.edu/~matluri/project/quries.php"); /* Redirect browser */
        $x=1;
		exit();	
		}
    }
    echo "<center><h2>USERNAME and PASSWORD donot match</h2></center>";

}
 else {
    echo "Empty database";
}

$conn->close();
}	
?>
</body>
</html>
