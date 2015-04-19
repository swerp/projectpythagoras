<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pythagoras";

//Jerry, this will create the connnection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, lName, fName, Email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //this will output the data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " <p>First Name: " . $row["fName"]. " <p>Last Name: " . $row["lName"]. " <p>Email: " . $row["EmailAddress"]." ";
    }
} else {
    echo "0 results";
}
$conn->close();
?>