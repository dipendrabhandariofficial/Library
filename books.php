<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>

.books-table {
    border-collapse: collapse;
    width: 100%;
}

.books-table th, .books-table td {
    border: 1px solid #ddd;
    padding: 8px;

}

.books-table th {
    cursor: pointer;
    background-color: #f2f2f2;
}

.books-table tr:hover {
    background-color: #ddd;
}

    
</style>
</head>
<body>
<div style="text-align: center; line-height: 1.5;">
    <font size="6">List of Books</font>
</div><br>

<?php


// Create a SQL query to retrieve the data
$sql = "SELECT * FROM `books` ORDER BY `books`.`name` ASC";
$result= mysqli_query($connect,$sql);
?>
<table class="books-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Authors</th>
        <th>Edition</th>
        <th>Status</th>
        <th>Quantity</th>
        <th>Department</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['authors'] . "</td>";
        echo "<td>" . $row['edition'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['department'] . "</td>";

        echo "</tr>";
    }
    ?>
</table>





      

</body>
</html>