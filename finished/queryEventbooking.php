






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
$sql = "SELECT orderNumber, bookDate, eventRoomNumber, numberParticipants, price
FROM eventBooking";
$result = $conn->query($sql);

if($result->num_rows > 0) {
	echo "<table><tr><th class='border-
class'>orderNumber</th><th class='border-
class'>bookDate</th><th class='border-
class'>eventRoomNumber</th><th class='border-
class'>numberParticipants</th><th class='border-
class'>price</th></tr>";	
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{ echo
	"<tr><td class='border-
class'>".$row["orderNumber"]."</td><td
class='border-
class'>".$row["bookDate"]."</td><td
class='border-
class'>".$row["eventRoomNumber"]."</td><td
class='border-
class'>".$row["numberParticipants"]."</td><td
class='border-
class'>".$row["price"]."</td></tr>";
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