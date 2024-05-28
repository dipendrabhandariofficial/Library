<?php
include "navbar.php";
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* style.css */

body {
    background-image: url("images/66.jpg");
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: white;
}

.wrapper {
    padding: 20px;
    margin: 50px auto;
    width: 900px;
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

h4 {
    margin-bottom: 20px;
}

.form-control {
    height: 70px;
    width: 60%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}

.btn {
    width: 100px;
    height: 35px;
    border: none;
    background-color: #5cb85c;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #4cae4c;
}

.scroll {
    width: 100%;
    height: 300px;
    overflow: auto;
    margin-top: 20px;
}

.table {
    width: 100%;
    border-radius: 10px;

    
}

.table tr {
    border-bottom: 1px solid #444;
}

.table td {
    padding: 10px;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <h4>If you have any suggestions or questions, please comment below.</h4>
        <form action="" method="post">
            <input class="form-control" type="text" name="comment" placeholder="Write something...">
            <br>
            <input class="btn" type="submit" name="submit" value="Comment">
        </form>
        <br><br>
        <div class="scroll">
            <?php
            if (isset($_POST['submit'])) {
                $comment = mysqli_real_escape_string($connect, $_POST['comment']);
                $sql = "INSERT INTO `comments` VALUES('', '$comment')";
                if (mysqli_query($connect, $sql)) {
                    $q = "SELECT * FROM `comments` ORDER BY `id` DESC";
                    $res = mysqli_query($connect, $q);

                    echo "<table class='table'>";
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['comment']) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            } else {
                $q = "SELECT * FROM `comments` ORDER BY `id` DESC";
                $res = mysqli_query($connect, $q);

                echo "<table  class='table'>";
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['comment']) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </div>
</body>
</html>
