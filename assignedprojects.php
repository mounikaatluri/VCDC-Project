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
<style>
	.CSSTableGenerator {
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
					//echo "checkingfrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
				$id=$_POST["id"];
				//echo $id;
			$sql1="DELETE FROM requestproject WHERE id=$id";
				if ($conn->query($sql1) === TRUE) {
				//echo "Project Deleted successfully";
				} else {
				echo "Error updating record: " . $conn->error;
				}
				}
    $sql="select * from requestproject";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        echo "<h2>Assigned Projects</h2>";
            echo "<center><div class=\"CSSTableGenerator\"><table cellspacing='20'><table cellspacing='20'><tr><td>Project ID</td><td>Project Name</td><td>Assigned Person Name</td><td>Due Date</td><td>Budget</td><td>DELETE</td></tr>";

        while($row = $result->fetch_assoc()) {
            strtotime($row["edate"]);
            time()-strtotime($row["edate"]);
		 if(($row["permission"]=='2'))
            {
        echo "<tr><center><td>".$row["id"]."</td><td>" . ucfirst($row["pname"]). "</td><td>" . ucfirst($row["name"]). "</td><td>" . $row["edate"]. "</td><td>" . $row["budget"]."</td>
        <td><form name=\"quries12\" action=\"assignedprojects.php\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"".$row["id"]."\" /><input type=\"submit\" name=\"delete\" class=\"sub\" value=\"delete\"></form></td></tr>";
    
        }}
    } else {
        echo "NO results";
    }
    echo "</table></div></center>";
    $conn->close();
    ?>
</body>
</html>

