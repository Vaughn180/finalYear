<?php

session_start();

$email = $_POST['email'];
$password = $_POST['psw'];




//DB Connection and Sign UP
$conn = new mysqli('localhost', 'root', 'co600project', 'walkingzebra');
//mysql_select_db($conn);
if ($conn->connect_error){
    die('connection failed: '.$conn->connection_error);
} else {
$sql = "INSERT INTO personnel (email, password)
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('location: ANDAGAIN.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();


?>