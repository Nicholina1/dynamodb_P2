<?php


// echo "Hello World";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123") {
        header("Location: guestlist.php");
    } else {
        echo "Invalid username or password";
    }
}