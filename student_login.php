<?php
  include "navbar.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
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
 
<!-- <header  style="background: black;">
  <a href="index.html" id="logo-link">
    <div class="logo">
        <img src="images/logo" alt="image not found" height="90px" width="170px" />
        <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
    </div>
</a>

    <nav>
      <ul>
        <li><a href="index.php">HOME </a></li>
        <li><a href="books.php">BOOKS </i></a></li>
        <li><a href="feedback.php">FEEDBACK</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="student_login.php" style="font-size: small;">LOGIN</a></li>
        <li><a href="student_login.php" style="font-size: small;" >LOGOUT</a></li>
        <li><a href="registration.php" style="font-size: small;">SIGN-UP</a></li><br>
      </ul>
    </nav>
</header>  -->
    <section style="height: 520px;">
        <div class="log_img"style="height: 520px;" ><br><br>
        <div class="box1">
          <h1 style="text-align: center; font-size: 25px;">User Login </h1><br>
          <form action="">
              <!-- Headings for the form -->
              <div class="headingsContainer">
                  <h3>Sign in</h3><br>
                  <p>Sign in with your username and password</p>
              </div>
      
              <!-- Main container for all inputs -->
              <div class="mainContainer">
                  <!-- Username -->
                  <label for="username">Your username</label>
                  <input type="text"   placeholder="Enter Username" name="username" required>
      
                  <br><br>
      
                  <!-- Password -->
                  <label for="pswrd">Your password</label>
                  <input type="password" placeholder="Enter Password" name="pswrd" required>
      
                  <!-- sub container for the checkbox and forgot password link -->
                  <div class="subcontainer">
                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                      <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                  </div>
      
                  <!-- Submit button -->
                  <button type="submit">Login</button>
      
                  <!-- Sign up link -->
                  <p class="register">Not a member?  <a href="registration.php">Register here!</a></p>
      
              </div>
      
          </form>
        </div>
        </div>
    </section>
    
</body>
</html>