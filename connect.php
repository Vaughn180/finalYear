<?php

session_start();
// include ('landingPage.html')

$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$role = $_POST['role'];
$gender = $_POST['gender'];


//DB Connection and Sign UP
$conn = new mysqli('localhost', 'root', 'co600project', 'walkingzebra');
mysql_select_db($conn);
if ($conn->connect_error){
    die('connection failed: '.$conn->connection_error);
} else {
$sql = "INSERT INTO personnel (firstname, lastname, email, password)
VALUES ('$fname', '$lname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('location: ANDAGAIN.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

 

$conn->close();


?>