<?php
$connect=mysqli_connect("localhost","root","","library");
if(!$connect)
{
    die("connection failed".mysqli_connect_error().mysqli_connect_errno());

}
//echo"connected";
?>