



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
					<form action="process-update-Hotel.php"
method="post"> Update the address by
Using the Hotel
</br>
</br>
<label>HotelID</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select hotelid, name from
hotel");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($hotelid, $name);
$hotelid = $row['hotelid'];
$name = $row['name'];
echo '<option
value="'.$hotelid.'">'.$hotelid.'</option>';
}
echo "</select>";
?>
<br>
</br>
<label>address</label>
<input name="address" type="text"
placeholder="Enter new adress">
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