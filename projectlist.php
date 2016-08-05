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
    				 if(isset($_POST['delete']))
				{
					//echo "checkingfrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
				$id=$_POST["id"];
				//echo "$id";
				$sql1="DELETE FROM requestproject WHERE id=$id";
				if ($conn->query($sql1) === TRUE) {
				//echo "Project Deleted successfully";
				} else {
				echo "Error updating record: " . $conn->error;
				}
				}
    $sql="select DISTINCT * from requestproject";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        echo "<h2>PROJECT LIST</h2>";
        while($row = $result->fetch_assoc()) {
            strtotime($row["edate"]);
            time()-strtotime($row["edate"]);
		 if(($row["permission"]!='2'))
            {
                echo "<form name=\"quries\" action=\"projectlist.php\" method=\"post\"><table align=\"left\"><tr><td><b>PROJECT ID: " . $row["id"]. " </b><br> </td></tr><tr><td><b>PROJECT NAME: </b>" . $row["pname"]. " <br>
                 </td></tr><tr><td><b> PROJECT DESCRIPTION </b>" . $row["pdescription"]. "<br></td></tr><tr><td><b>DUE DATE:</b> " . $row["edate"]. "<b> &nbsp;&nbsp;&nbsp;BUDGET: </b>" . $row["budget"]."</td></tr><tr>
                 <td><input type=\"hidden\" name=\"id\" value=\"".$row["id"]."\" /><input type=\"submit\" name=\"delete\" class=\"sub\" value=\"delete\"><br><br><br></td></tr></table></form>";

				echo "<br><br><br><br>";
			}	
        }
    } else {
        echo "NO results";
    }
    $conn->close();
    ?>
</body>
</html>

