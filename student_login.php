<?php
include "navbar.php";
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <style>
    .alert {
  position: relative;
  height: auto;
  padding: 10px;
  margin: 10px;
  line-height: 1.8;
  border-radius: 5px;
  cursor: hand;
  cursor: pointer;
  font-family: sans-serif;
  font-weight: 400;
  width:310px;text-align:center; margin-left: 30%; margin-top: -335px;
}

.alertCheckbox {
  display: none;
}

:checked + .alert {
  display: none;
}

.alertText {
  display: table;
  margin: 0 auto;
  text-align: center;
  font-size: 16px;
}

.alertClose {
  float: right;
  padding-top: 5px;
  font-size: 10px;
}

.clear {
  clear: both;
}
.warning {
  background-color: #FDF7DF;
  border: 1px solid #FEEC6F;
  color: #C9971C;
}

 </style>

<body>
    <section style="height: 520px;">
        <div class="log_img" style="height: 520px;"><br><br>
            <div class="box1">
                <h1 style="text-align: center; font-size: 25px;">User Login </h1><br>
                <form action="" method="post">
                    <!-- Headings for the form -->
                    <div class="headingsContainer">
                        <h3>Sign in</h3><br>
                        <p>Sign in with your username and password</p>
                    </div>

                    <!-- Main container for all inputs -->
                    <div class="mainContainer">
                        <!-- Username -->
                        <label for="username">Your username</label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <br><br>

                        <!-- Password -->
                        <label for="password">Your password</label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <!-- sub container for the checkbox and forgot password link -->
                        <div class="subcontainer">
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit">Login</button>

                        <!-- Sign up link -->
                        <p class="register">Not a member? <a href="registration.php">Register here!</a></p>

                    </div>

                </form>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['submit'])) {
        $P = $_POST['password']; // Hash the password
        $UN = $_POST['username'];
        $count = 0;
        $res = mysqli_query($connect, "select * from `student` where username='$UN' && password ='$P' ");
        $count = mysqli_num_rows($res);
        if ($count == 0) {
           // echo '<script> alert("Username does not exist"); </script>';
           echo '<label>
           <input type="checkbox" class="alertCheckbox" autocomplete="off" />
           <div class="alert warning">
             <span class="alertClose">X</span>
             <span class="alertText"> Username and Password doesnot match
             <br class="clear"/></span>
           </div>
         </label>';


        } else {
            echo '<script> window.location.href = "index.php"; </script>';
        }
    }
    ?>
    
</body>

</html>
