





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
$id = $_POST['id'];
$numberRoomNeeded = $_POST['numberRoomNeeded'];
$conn = OpenCon();
$sql = "update groupBooking set numberRoomNeeded =
'$numberRoomNeeded' where groupid = '$id'";
if ($conn->query($sql) ===
TRUE) { echo "Record updated
successfully";
} else {
echo "Error updating record: " . $conn->error;
}
?>

<div id="buttoms">
	<buttom id="home" onclick="window.location.href = 'home.php';">Back to home</buttom>
</div>

<html>
<style>
	#buttoms {
		text-align: center;
	}
	buttom {
		width: 300px;
		height: 40px;
	}
</style>
</html>
				</div>
				<div id = "content_area">Welcome to SOZ Hotel </div>
			</div>

			<div id = "footer">Website created by Group 16 &copy; Apr, 2020</div>
		</div>
	</body>
</html>