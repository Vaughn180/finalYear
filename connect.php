<?php
// include ('landingPage.html')

$fname = $_POST['First name'];
$lname = $_POST['Last name'];
$email = $_POST['email'];
$password = $_POST['psw'];
$role = $_POST['role'];
$gender = $_POST['gender'];


//DB Connection:
$conn = new mysqli('localhost', 'root', 'co600project', 'walkingzebra');
echo "HELLO";

if(mysqli_connect_errno()){
    // if there is an error connectiong,  stop the script and dipsay the error message.
    exit("Failed to connect to MYSQL:" . mysqli_connect_errno());
}

try{
    $dbhandle = new PDO('mysql:host = localhost, dbname = walkingzebra', 'root','co600project');
}
catch(PDOException $e){
    die('Error Connecting to Database:' .$e->getMessage());
}

if ($dbhandle->connect_error){
    die('connection failed: '.$dbhandle->connection_error);
} else {
     $stmt = $dbhandle -> prepare ("INSERT INTO personnel (firstname, lastname, email, password, role, gender) VALUES(?,?,?,?,?,?)")
     $stmt -> bind_param("ssssss", $fname, $lname, $email, $password, $role, $gender)
     $stmt -> execute ();
     echo "reg successful";
     $stmt -> close();
     $dbhandle-> close();
     header('Location: MainPage.html');exit;
}

//check databse connection
if ($conn->connect_error){
    die('connection failed: '.$conn->connection_error);
} else {
     $stmt = $conn -> prepare ("INSERT INTO personnel (firstname, lastname, email, password, role, gender) VALUES(?,?,?,?,?,?)")
     $stmt -> bind_param("ssssss", $fname, $lname, $email, $password, $role, $gender)
     $stmt -> execute ();
     echo "reg successful";
     $stmt -> close();
     $conn-> close();
     header('Location: MainPage.html');exit;
}


?>