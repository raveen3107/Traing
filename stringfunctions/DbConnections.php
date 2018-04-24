<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cmis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM cvl_ems_login_user_credentials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> employee_id: ". $row["employee_id"]. " - user_id: ". $row["user_id"]. "password- " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 