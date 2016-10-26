<?php
function dbData()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "securityDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, email, address,teli, department,DOB , DOJ FROM auth_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
         echo "<table style='width:100%'>";
         echo "<tr><th>username</th>";
         echo "<th>Email</th>";
         echo "<th>Teliphone</th>";
         echo "<th>Address</th></tr>";

    while($row = $result->fetch_assoc()) {

         echo "<tr><td>". $row["username"]."</td><td>" .$row["email"]. "</td><td>" . $row["teli"]. "</td><td>" . $row["address"]. "</td></tr>";

    }
    echo "</table>";
} 
else {
    echo "0 results";
}
$conn->close();
}
?>