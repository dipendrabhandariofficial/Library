<?php
include "connection.php";
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
    <title>Registration</title>
    <script type="text/javascript">
        function setFormValues() 
        {
            // Set the form values
            var form = document.getElementById("registrationForm");
            form.elements["firstname"].value = '<?php echo isset($_POST["firstname"]) ? addslashes($_POST["firstname"]) : "" ?>';
            form.elements["lastname"].value = '<?php echo isset($_POST["lastname"]) ? addslashes($_POST["lastname"]) : "" ?>';
            form.elements["roll"].value = '<?php echo isset($_POST["roll"]) ? addslashes($_POST["roll"]) : "" ?>';
            form.elements["phone"].value = '<?php echo isset($_POST["phone"]) ? addslashes($_POST["phone"]) : "" ?>';
            form.elements["password"].value = '<?php echo isset($_POST["password"]) ? addslashes($_POST["password"]) : "" ?>';
            form.elements["email"].value = '<?php echo isset($_POST["email"]) ? addslashes($_POST["email"]) : "" ?>';
            
        }           
    </script>
    
    
</head>
<body onload="setFormValues()" >
<section>
    <div class="log_img"><br><br><br>
    <div class="box1">
      <h1 style="text-align: center; font-size: 25px;">User Registration </h1><br>
      <form action="" method="post" id="registrationForm">
          <!-- Headings for the form -->
          <div class="headingsContainer">
              <h3>Register</h3><br>
          </div>
  
          <!-- Main container for all inputs -->
          <div class="mainContainer">
             <!-- firstname -->
             <label for="firstname"> First Name</label>
             <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" required>

              <!-- Lastname -->
              <label for="lastname"> Last Name</label>
              <input type="text" placeholder="Enter Lastname" name="lastname" required>

              <!-- Username -->
              <label for="username"> User Name</label>
              <input type="text" placeholder="Enter Username" name="username" required>
      
              <!-- Password -->
              <label for="password">Password</label>
              <input type="password" placeholder="Enter Password" name="password" required>
              
               <!-- Roll -->
               <label for="roll"> Roll No</label>
               <input type="number" placeholder="Enter Rollno " name="roll" required>

                <!-- Email -->
              <label for="email"> Email</label>
              <input type="email" placeholder="Enter Email" name="email" required>

               <!-- Phone -->
               <label for="phone"> Phone</label>
              <input type="number" placeholder="Enter Phone" name="phone" required>
  
  
              <!-- Submit button -->
              <button type="submit" name="submit">Register</button>

              <!-- Login -->
              <p class="register">Already a member?  <a href="student_login.php">Login Here!</a></p>

  
          </div>
  
      </form>
    </div>
    </div>
</section>

<?php
    if(isset($_POST['submit'])) {
        $FN = $_POST['firstname'];
        $LN = $_POST['lastname'];
        $E = $_POST['email'];
        $P = $_POST['password']; // Hash the password
        $UN = $_POST['username'];
        $R = $_POST['roll'];
        $Ph = $_POST['phone'];

        // Ensure that the connection is established
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if the username already exists
        $checkSql = "SELECT * FROM `student` WHERE `username` = '$UN'";
        $result = mysqli_query($connect, $checkSql);

        if (mysqli_num_rows($result) > 0) {
            // Username already exists
            echo '<script type="text/javascript">';
            echo 'alert("Registration Failed: Username already exists.");';
            echo 'setFormValues();'; // Call the function to set form values
            echo 'form.elements["username"].focus()';
            echo '</script>';
        } else {
            // Insert the new record
            $insertSql = "INSERT INTO `student` VALUES ('$FN','$LN','$UN','$P','$R','$E','$Ph')";
            if (mysqli_query($connect, $insertSql)) {
                echo '<script type="text/javascript">alert("Registration Successful");</script>';
                echo '<script> window.location.href = "student_login.php"; </script>';
            } else {
                // Display a generic error message
                echo '<script type="text/javascript">alert("Registration Failed. Please try again later.");</script>';
            }
        }

    }
    ?>
</body>
</html>