<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "php_blog";
$conn = mysqli_connect($server, $username, $password, $database);
 if ($conn) {
    echo "connected";
 }  
 else {
    echo "not connected".mysqli_connect_error();
 }