

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
					<form action="process-delete-groupBooking.php"
method="post"> Update by
Using the groupBooking
</br>
</br>
<label>group ID</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select groupid, numberParticipants from
groupBooking");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($groupid, $numberParticipants);
$groupid = $row['groupid'];
$numberParticipants = $row['numberParticipants'];
echo '<option
value="'.$groupid.'">'.$groupid.'</option>';
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