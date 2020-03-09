<?php include("authenticate.php")> // include authenticate page
// include config page
require_once "config.php"
session_start();

$email = "";

$connection = mysqli_connect("localhost", "root", "co600project","walkingzebra");

if(mysqli_connect_errno()){
    // if there is an error connectiong,  stop the script and dipsay the error message.
    exit("Failed to connect to MYSQL:" . mysqli_connect_errno());
}


//registers user
if(isset($_POST["register_user"])) {
   // receive the values from the form
    $firstname = mysqli_real_escape_string($connection, $_POST["First name"]);
    $lastname = mysqli_real_escape_string($connection, $_POST["Last name"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $password = mysqli_real_escape_string($connection, $_POST["psw"]);
    $role = mysqli_real_escape_string($connection, $_POST["role"]); 
    $gender = mysqli_real_escape_string($connection, $_POST["gender"]);           
}

// checks to see if the user does not already exist with the same email.
$user_check = "SELECT * FROM personnel WHERE email = "$email" LIMIT 1";
$result = mysqli_query($connection, $user_check);
$user = mysqli_fetch_assoc($result)

if($user) {
    if($user["email" === $email]){
        echo "Email already exists"
    }
    //if email doesnt already exist, the new given data is inserted to the database
    else{
        $reg = "INSERT INTO personnel (firstname, lastname, email, password, role, gender) VALUES("$firstname", "$lastname", "$email", "$password", "$role", "$gender")";
        mysqli_query($connection,$reg);
        $_SESSION["email"] = $email;
        $_SESSION["success"] = "You are now logged in";
        header("Location: MainPage.html")
    }
}




?>