<?php

session_start();
//intializing variables
$email = $_POST['email'];
$password = $_POST['password'];


//DB Connection and Sign UP
$conn = new mysqli('localhost', 'root', 'co600project', 'walkingzebra');

// query to fetch Username and Password from  
    $query = "SELECT * FROM personnel WHERE email='$email' AND password='$password'"; 

    // Execute the query and store the result set 
    $result = mysqli_query($conn, $query); 


    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 

        if ($row == 1) {
            header('location: ANDAGAIN.html');
        } else if ($row < 1){
            header('location: landingpage.html'); 
            
        }

        // close the result. 
        mysqli_free_result($result); 
    } 

$conn -> close();

?>


