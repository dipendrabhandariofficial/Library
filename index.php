<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body >
    <div class="wrapper">
      <header>
        <a href="index.php" id="logo-link">
          <div class="logo">
              <img src="images/logo" alt="image not found" height="90px" width="170px" />
              <h1 style="color: white;">LIBRARY MANAGEMENT SYSTEM</h1>
          </div>
      </a>
          
        

        <nav>
          <ul>
            <li><a href="index.php">HOME </a></li>
            <li><a href="books.php">BOOKS </i></a></li>
            <li><a href="student_login.php">STUDENT-LOGIN</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <div class="sec_img">
        <br /><br /><br />
        <div class="box" style=" background: -webkit-linear-gradient(to right, #999515, #159957);
        background: linear-gradient(to right, #155799, #159957);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;">
          <h1 style="text-align: center; font-size: 45px; color:#ff0">
            Welcome to Library
          </h1>
          <br /><div class="line"></div> 
          <h1 style="color:#ff0 ;text-align: center; font-size: 30px; font-family: Verdana, Geneva, Tahoma, sans-serif;">Open at 9:00 AM</h1>
          <br />
          <h1 style="color:#ff0;text-align: center; font-size: 30px; font-family: Verdana, Geneva, Tahoma, sans-serif;"> Closes at 4:30 PM</h1>
          <br />
        </div>
        </div>
        
      </section>
      <footer>
        <br>
            <p  style="color:white;text-align: center;"> 
             <a href ="mailto:dipendrabhandari0000@gmail.com" style="text-decoration: none;color: white;">Mail US</a></p><br>
            <p style="color:white;text-align: center;"> Phone: 021411091</p><br>
      </footer>
    </div>
  </body>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  var prevScrollPos = window.pageYOffset;
  var header = document.querySelector("header");

  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    // Check if the user has scrolled to the footer
    var isFooterVisible = document.body.scrollHeight - window.innerHeight <= currentScrollPos + 1;

    if (currentScrollPos === 0) {
      // At the top of the page
      header.classList.remove("scrolled");
    } else if (prevScrollPos > currentScrollPos || isFooterVisible) {
      // Scrolling up or at the footer
      header.classList.add("scrolled");
    } else {
      // Scrolling down
      header.classList.remove("scrolled");
    }

    prevScrollPos = currentScrollPos;
  };
});

  </script>
</html>
