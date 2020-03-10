<?php include("connect.php") ?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<!--I minimised the style stuff-->
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('canterbury.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
h1{color: #0d6129;text-align: center;}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.home-button {
  background-color: transparent;
  color: #0d6129;
  border: 1px solid #0d6129;
  margin: auto;
  padding: 8px;
}

/* Full-width input fields */
input[type=text], input[type=password], select.dropdown {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: grey;
  color: white;
  border: 2px solid #e7e7e7;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {background-color: #4CAF50;}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 1% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>

<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  <div class = "w3-display-middle", id="white-strip" style="margin:auto;width:100%;background-color: #e7e7e7;opacity:0.9;" > 
      <h1 class="w3-jumbo w3-animate-top">Walking Zebra</h1>
      <hr class="w3-border-grey" style="margin:auto;width:40%">
       
      <div class = "align", style="margin:auto; margin-top: 10px; margin-bottom: 10px; width:40%;">
        <!-- Login popup stuff -->
      <button class="button home-button" onclick="document.getElementById('id01').style.display='block'" style="width:49%;">Login</button>
      <!-- Sign up popup stuff -->
      <button class="button home-button" onclick="document.getElementById('id02').style.display='block'" style="width:49%;">Sign Up</button>
        
    </div>
  </div>
</div>
  
<div id="id01" class="modal">
  <!--Div for the image-->
  <!--Form begins-->
  <form class="modal-content animate" action="authenticate.php." method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <!-- Div for the Email, PassW and Login bits-->
    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email Address..." name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password..." name="password" required>
        
      <button type="submit" name="login" value="login">Login</button>
    </div>

    <!-- The forgot password and cancel button stuff -->
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  <!--End of Form-->
</div>

<!-- End of login modal stuff -->

<!--Sign Up modal form-->
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="connect.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="fname"><b>First name</b></label>
      <input type="text" placeholder="First name..." name="First name" required>

      <label for="lname"><b>Last name</b></label>
      <input type="text" placeholder="Last name..." name="Last name" required>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email Address..." name="email" value =" <?php echo $email; ?>"> 

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="role"><b>Role</b></label>
      <select id ="role" name ="role" class="dropdown" required>
        <option value ="Admin"> Admin</option>
        <option value="Council Member">Council Member</option>
        <option value ="Supervisor">Supervisor</option>
      </select>

      <label for="gender"><b>Gender</b></label>
      <select id="gender" name="gender" class= "dropdown" required>
        <option value="Male">Male</option>
        <option value ="Female">Female</option>
        <option value = "prefer not to say">I prefer not to say </option> 
      </select>      
      <button type="submit" name="register_user"> Sign up</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal1) {
        modal.style.display = "none";
        modal1.style.display = "none";
    }
}
</script>
</body>
</html>
