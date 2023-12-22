<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="loginform.css" /> -->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    
</head>
<body>
     <!-- <header style="background: black;">
      <a href="index.php" id="logo-link">
        <div class="logo">
            <img src="images/logo" alt="image not found" height="90px" width="170px" />
            <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
    </a>

    <nav>
        <ul>
          <li><a href="index.php">HOME </a></li>
          <li><a href="">BOOKS </i></a></li>
          <li><a href="">FEEDBACK</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li><a href="student_login.php" style="font-size: small;">LOGIN</a></li>
          <li><a href="student_login.php" style="font-size: small;" >LOGOUT</a></li>
          <li><a href="registration.php" style="font-size: small;">SIGN-UP</a></li><br>
        </ul>
      </nav>
</header> -->

<section>
    <div class="log_img"><br><br><br>
    <div class="box1">
      <h1 style="text-align: center; font-size: 25px;">User Registration </h1><br>
      <form action="">
          <!-- Headings for the form -->
          <div class="headingsContainer">
              <h3>Register</h3><br>
          </div>
  
          <!-- Main container for all inputs -->
          <div class="mainContainer">
             <!-- firstname -->
             <label for="Firstname"> First Name</label>
             <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" required>

              <!-- Lastname -->
              <label for="Lastname"> Last Name</label>
              <input type="text" placeholder="Enter Lastname" name="Lastname" required>

              <!-- Username -->
              <label for="username"> User Name</label>
              <input type="text" placeholder="Enter Username" name="username" required>
      
              <!-- Password -->
              <label for="pswrd">Password</label>
              <input type="password" placeholder="Enter Password" name="pswrd" required>
              
               <!-- Roll -->
               <label for="Rollno"> Roll No</label>
               <input type="number" placeholder="Enter Rollno " name="Rollno" required>

                <!-- Email -->
              <label for="email"> Email</label>
              <input type="email" placeholder="Enter Email" name="email" required>
  
  
              <!-- Submit button -->
              <button type="submit">Register</button>

              <!-- Login -->
              <p class="register">Already a member?  <a href="student_login.php">Login Here!</a></p>

  
          </div>
  
      </form>
    </div>
    </div>
</section>