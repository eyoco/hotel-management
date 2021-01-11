

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
					<form action="process-update-Customer.php"
method="post"> Update the phone number by
Using the Customer
</br>
</br>
<label>Customer</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select customerid, firstName, lastName from
customer");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($customerid, $firstName, $lastName);
$customerid = $row['customerid'];
$firstName = $row['firstName'];
$lastName = $row['lastName'];
echo '<option
value="'.$customerid.'">'.$customerid.'</option>';
}
echo "</select>";
?>
<br>
</br>
<label>phone Number</label>
<input name="phoneNumber" type="text"
placeholder="Enter new phone number">
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
