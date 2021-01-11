
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
					<form action="process-update-Room.php"
method="post"> Update the roomStatus by
Using the Room
</br>
</br>
<label>RoomID</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select roomNumber, bookDate from
room");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($roomNumber, $bookDate);
$roomNumber = $row['roomNumber'];
$bookDate = $row['bookDate'];
echo '<option
value="'.$roomNumber.'">'.$roomNumber.'</option>';
}
echo "</select>";
?>
<br>
</br>
<label>roomStatus</label>
<input name="roomStatus" type="text"
placeholder="Enter new room status">
<br>
<br>
<input type="submit" value="Search">
</form>
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
				<div id = "banner"></div>
				<div id = "content_area">Welcome to SOZ Hotel </div>
			</div>

			<div id = "footer">Website created by Group 16 &copy; Apr, 2020</div>
		</div>
			</body>
</html>