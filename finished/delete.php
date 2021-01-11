<form action="process-delete.php"
method="post"> Delete the Customer ZIP by
Using the Customer
</br>
</br>
<label>Customer</label>
<?php
include 'connect.php';
$conn = OpenCon();
$result = $conn->query("select customerid, customername from
customer");
echo "<select name='id'>";
while ($row = $result->fetch_assoc())
{
unset($customerid,
$customername);
$customerid = $row['customerid'];
$customername = $row['customername'];
echo '<option
value="'.$customerid.'">'.$customername.'</option>';
}
echo "</select>";
?>
<input type="submit" value="Search">
</form>