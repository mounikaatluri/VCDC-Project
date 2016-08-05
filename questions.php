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
<STYLE>.CSSTableGenerator {
	margin:0px;padding:0px;

	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	
}
.CSSTableGenerator tr:nth-child(odd){ background-color:#ffaaaa; }
.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
	vertical-align:middle;
	
	
	border:1px solid #7f0000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:17px;
	font-family:Times New Roman;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #D68533 5%, #7f0000);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #D68533), color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #D68533 5%, #7f0000 );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#D68533", endColorstr="#7f0000");	background: -o-linear-gradient(top,#D68533,7f0000);

	background-color:#D68533;
	border:0px solid #7f0000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:17px;
	font-family:Times New Roman;
	font-weight:bold;
	color:#e2d9d9;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff5656 5%, #7f0000);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff5656), color-stop(1, #7f0000) );
	background:-moz-linear-gradient( center top, #ff5656 5%, #7f0000);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff5656", endColorstr="#7f0000");	background: -o-linear-gradient(top,#ff5656,7f0000);

	background-color:#ff5656;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
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
if(isset($_POST['delete']))
				{
				$id=$_POST["id"];
				//echo $id;
				$sql1="DELETE FROM vcdc WHERE username='$id'";
				if ($conn->query($sql1) === TRUE) {
				} else {
				echo "Error updating record: " . $conn->error;
				}
				}
$sql="select * from contactus";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<center><h2>Contact Us Questions</h2><div class=\"CSSTableGenerator\"><table cellspacing='20'><TR><TD>NAME</TD><TD>EMAIL</TD><TD>SUBJECT</TD><TD>MESSAGE</TD><td>DELETE</td></TR>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><center><td>" . ucfirst($row["fname"]). "</td><td><a href=\"mailto:".$row["email"]."\">".$row["email"]."</a></td><td>" . $row["subject"]. "</td><td>" . $row["message"]."</td>
        <td><form name=\"quries\" action=\"questions.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"".$row["fname"]."\" /><input type=\"submit\" name=\"delete\" class=\"sub\" value=\"delete\"></form></td></tr>";
         
    }
} else {
    echo "0 results";
}
echo "</table></DIV></center>";
$conn->close();
?> 
</body>
</html>
