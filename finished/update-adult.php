
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
					<form action="process-update-adult.php"
method="post"> Update the age by
Using the adult
</br>
</br>
<label>adult ID</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select adultid from
adult");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($adultid);
$adultid = $row['adultid'];
echo '<option
value="'.$adultid.'">'.$adultid.'</option>';
}
echo "</select>";
?>
<br>
</br>
<label>age</label>
<input name="age" type="text"
placeholder="Enter the current age">
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