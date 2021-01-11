




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
						
				</ul>
					
				</div>
			</div>
			<div id = "content_area">
			<style>
				img {
					display: block;
					margin-left: auto;
					margin-right: auto;
				}	
				</style>
				<div id = "banner">
<?php
include 'connect.php';
$phoneNumber = $_POST['phoneNumber'];
$position = $_POST['position'];
$name = $_POST['name'];
$responsibility = $_POST['responsibility'];
$conn = OpenCon();
$sql = "insert into bookingCoordinator (phoneNumber, position, name, responsibility) 
		values('$phoneNumber', '$position', '$name', '$responsibility')";
if ($conn->query($sql) ===
TRUE) { echo "Record updated
successfully";
} else {
echo "Error updating record: " . $conn->error;
}
?>
				</div>
				<div id = "content_area">Welcome to SOZ Hotel </div>
			</div>

			<div id = "footer">Website created by Group 16 &copy; Apr, 2020</div>
		</div>
	</body>
</html>