

<html>
	<head>
		<title>SOZ Hotel Information Management</title>
		<link rel="stylesheet" type="text/css" href="template.css"> 
	</head>
	<body>
		<div id = "container">
			<div id = "header">
				<div id = "logo"><img src = "logo.jpg"  height="110%" width="110%"></div>
				<div id = "navbar">
					<ul>
						<li><a href = "home.php">Back to home</a></li>
						
				</div>
			</div>
			<div id = "content_area">
<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT staffid, phoneNumber, position, name, responsibility
FROM bookingCoordinator";
$result = $conn->query($sql);

if($result->num_rows > 0) {
 echo "<table><tr><th class='border-
class'>staffid</th><th class='border-
class'>phoneNumber</th><th class='border-
class'>position</th><th class='border-
class'>name</th><th class='border-
class'>responsibility</th></tr>"; 
 // output data of each row
 while($row = $result->fetch_assoc()) 
 { echo
 "<tr><td class='border-
class'>".$row["staffid"]."</td><td
class='border-
class'>".$row["phoneNumber"]."</td><td
class='border-
class'>".$row["position"]."</td><td
class='border-
class'>".$row["name"]."</td><td
class='border-
class'>".$row["responsibility"]."</td></tr>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
CloseCon($conn);
?>
			<style>
				img {
					display: block;
					margin-left: auto;
					margin-right: auto;
				}	
				</style>
				<div id = "banner">></div>
				<div id = "content_area">Welcome to SOZ Hotel </div>
			</div>

			<div id = "footer">Website created by Group 16 &copy; Apr, 2020</div>
		</div>
	</body>
</html>

