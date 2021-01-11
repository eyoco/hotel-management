




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
					<form action="process-insert-LivingBooking.php"
method="post"> Update the price by
Using the eventBooking
</br>
</br>
<label>room Number</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select roomNumber from
room");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($roomNumber);
$roomNumber = $row['roomNumber'];
echo '<option
value="'.$roomNumber.'">'.$roomNumber.'</option>';
}
echo "</select>";
?>
<br>
</br>
<label>booking Date</label>
<input name="bookDate" type="text"
placeholder="Enter new booking date">
<br>
</br>
<label>number of participants</label>
<input name="numberParticipants" type="text"
placeholder="Enter new number of participants">
<br>
</br>
<label>price</label>
<input name="price" type="text"
placeholder="Enter new price">
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