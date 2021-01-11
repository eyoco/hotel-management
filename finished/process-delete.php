<?php
include 'connect.php';
$id = $_POST['id'];
$conn = OpenCon();
$sql = "delete from customer where customerid = '$id'";
if ($conn->query($sql) ===
TRUE) { echo "Record deleted
successfully";
} else {
echo "Error deleting record: " . $conn->error;
}
?>