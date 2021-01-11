


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
					<form action="process-delete-bookingCoordinator.php"
method="post"> Update by
Using the bookingCoordinator
</br>
</br>
<label>staff ID</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select staffid, phoneNumber, name, responsibility from
bookingCoordinator");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($staffid, $phoneNumber, $name, $responsibility);
$staffid = $row['staffid'];
$phoneNumber = $row['phoneNumber'];
$name = $row['name'];
$responsibility = $row['responsibility'];
echo '<option
value="'.$staffid.'">'.$staffid.'</option>';
}
echo "</select>";
?>
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