<?php
$servername = "localhost";
$username = "root";
$password = "YES";
$dbname = "pups";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO events (eventID, eventName, firstname, email, phonenumber, age)
VALUES (100, 'John', 'Doe', 'john@example.com', 6788366894, 23)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT firstname, lastname FROM people;"
echo $sql(firstname) . $sql(lastname);

$conn->close();
?>
