<?php
// Initialize the session
session_start();


// Include config file
require_once "config.php";


// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: MainPage.html");
    exit;
}
//if the user is not logged in then it redirects to landing Page
if(!isset($_SESSION["loggedin"])){
    header("Location: landingPage.html");
    exit;
}

/*this prepares our sql statement which wil prevent SQL injection.
it will select the id and password from the personell table and bind the email to the SQL statement, execute and then store the result.*/

if($statement = $connection->prepare("SELECT id, password FROM personnel WHERE email = ?")){
    //binding parameters so email is a string, so i can use "s"
    $statement-> bind_param("s", $_POST["email"]);
    $statement->execute();
    //this will store the result so we can check if the acccount exists in the database.
    $statement->store_result();
   
    if($statement->number_of_rows > 0){
        $statement->bind_result($id,$password);
        $statement->fetch();
    // Succesfull verification, So user has logged in
        if(($_POST["password"] === $password)){
            //generates a session so we know user has logged in.
            session_regenerate_id();
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["name"] = $_POST["email"];
            $_SESSION["id"] = $id;

            echo "Welcome" .$_SESSION["name"] . "!";
            header("Location: MainPage.html");
        }
        else{
            echo "Incorrect Password";
        }
        else{
            echo "Incorrect email";
        }
    }   
    $statement->close();
}

?>


