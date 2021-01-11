
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
					<form action="process-update-livingBooking.php"
method="post"> Update the price by
Using the livingBooking
</br>
</br>
<label>order Number</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select orderNumber, bookDate, livingRoomNumber, numberParticipants from
livingBooking");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($orderNumber, $bookDate, $livingRoomNumber, $numberParticipants);
$orderNumber = $row['orderNumber'];
$bookDate = $row['bookDate'];
$livingRoomNumber = $row['livingRoomNumber'];
$numberParticipants = $row['numberParticipants'];
echo '<option
value="'.$orderNumber.'">'.$orderNumber.'</option>';
}
echo "</select>";
?>
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