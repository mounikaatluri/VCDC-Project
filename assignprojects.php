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
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/quries.php'">Home</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/users.php'">List Users</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/assignprojects.php'">Assign Projects</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/projectlist.php'">Project List</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/assignedprojects.php'">Assigned Projects</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/questions.php'">Contact US</li>
<li onclick="location.href='http://www2.cs.siu.edu/~matluri/project/index.php'">Logout </li>
</ul><br><br>

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
echo "Assign the projects to a developer by selecting the project ID and click on the \"ASSIGN\" button. <br> Complete the form and click on the \"ASSIGN PROJECT TO THE DEVELOPER\"<br><br>";
echo "<form name=\"assignproject\" action=\"assignprojects.php\" method=\"post\">
Enter Project ID : <select name=\"id\" class=\"f\">";
$sql1="select * from requestproject";
    $result1 = $conn->query($sql1); 
     if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
			if($row1["permission"]!=2)
				{
				
echo "<option  value=\"".$row1["id"]."\">".$row1["id"]." ".$row1["pname"]."</option>";
}
}}
echo "</select><br><br><input type=\"submit\" name=\"delete\" value=\"ASSIGN\" class=\"sub\"></form><br>";
    if(isset($_POST['delete']))
{   
$sql2="SELECT username,role1 FROM vcdc";
$result2 = $conn->query($sql2);
	 echo "<form method=\"post\" action=\"assignprojects.php\"><table align=\"center\"><tr>
	<td><br>Name:</td><td><br><select name=\"id1\" class=\"f\">";
 while($row2 = $result2->fetch_assoc()) {
if($row2["role1"]=="developer"){			
	echo "<option  value=\"".$row2["username"]."\">".$row2["username"]."</option>";
}
}
echo "</select></td>";
$id=$_POST["id"];
 $sql="select * from requestproject";
    $result = $conn->query($sql); 
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
			if(($row["id"]==$id))
            {
				
				echo "<font size=\"4\" color=\"red\">".$row["pname"]."</font>";
				$check=$row["pname"];
				$pdes=$row["pdescription"];
				$ed=$row["edate"];
				$bud=$row["budget"];

	echo "<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email-Address:</td><td><br><input type=\"text\" name=\"email\" id=\"email\" class=\"f\"><br></td></tr>
	<tr><td><br>Project Name:<br></td><td> <br><input type=\"text\" name=\"pname\" id=\"pname\" class=\"f\" value=\"$check\"><br></td></tr>
	<tr><td><br>Project Description:<br></td><td><br><textarea name=\"desc\" id=\"desc\" rows=\"4\" cols=\"20\" class=\"f\">$pdes</textarea><br></td></tr>
	<tr><td><br>Assigned Date: (mm/dd/yyyy)<br></td><td><br><input type=\"date\" name=\"cdate\" id=\"cdate\" class=\"f\"><br></td>
	<td><br>Expected Completion Date:<br \>(mm/dd/yyyy)<br></td><td><br><input type=\"date\" name=\"edate\" id=\"edate\" class=\"f\" value=\"$ed\"><br></td></tr>
	<tr><td><br>Available Budget:( in $)<br></td><td><br><input type=\"text\" name=\"budget\" id=\"budget\" class=\"f\" value=\"$bud\"><br></td></tr>
	<tr><td></td></tr></table><br><br><input type=\"submit\" value=\"ASSIGN PROJECT TO THE DEVELOPER\" id=\"submit\" name=\"submit\" class=\"sub\"></form>";
	
}
}
}
}
    if(isset($_POST['submit']))
    {
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pname=$_POST["pname"];
		$message=$_POST["desc"];
		$cdate=$_POST["cdate"];
		$edate=$_POST["edate"];
		$budget=$_POST["budget"];
		$val=2;
		$sql="INSERT INTO requestproject(name,email,pname,pdescription,cdate,edate,budget,permission) VALUES ('$name','$email','$pname','$message','$cdate','$edate','$budget','$val')";
		if ($conn->query($sql) === TRUE) {
		echo "<center>PROJECT ASSIGNED SUCCESSFULLY</center>";
		} else {
		echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
			$sql3="UPDATE requestproject SET permission='3' WHERE pname='$pname' AND permission='1'";
		if ($conn->query($sql3) === TRUE) {
		//echo "<center>PROJECT -- ASSIGNED SUCCESSFULLY</center>";
		} else {
		echo "Error: " . $sql1 . "<br>" . $conn->error;
		}
	}


$conn->close();
?> 
</body>
</html>
