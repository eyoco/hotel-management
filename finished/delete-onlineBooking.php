
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
					<form action="process-delete-onlineBooking.php"
method="post"> Update by
Using the onlineBooking
</br>
</br>
<label>link</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select link from
onlineBooking");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($link);
$link = $row['link'];
echo '<option
value="'.$link.'">'.$link.'</option>';
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