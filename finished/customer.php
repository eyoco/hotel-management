<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT customerid, phoneNumber, birthDate, firstName, lastName
FROM customer";
$result = $conn->query($sql);

if($result->num_rows > 0) {
 echo "<table><tr><th class='border-
class'>customerid</th><th class='border-
class'>phoneNumber</th><th class='border-
class'>birthDate</th><th class='border-
class'>firstName</th><th class='border-
class'>lastName</th></tr>"; 
 // output data of each row
 while($row = $result->fetch_assoc()) 
 { echo
 "<tr><td class='border-
class'>".$row["customerid"]."</td><td
class='border-
class'>".$row["phoneNumber"]."</td><td
class='border-
class'>".$row["birthDate"]."</td><td
class='border-
class'>".$row["firstName"]."</td><td
class='border-
class'>".$row["lastName"]."</td></tr>";
 }
 echo "</table>";
} else {
 echo "0 results";
}
CloseCon($conn);
?>