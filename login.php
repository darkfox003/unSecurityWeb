<?php
    $db = require('connect.php');

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE name='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("location:success.php");
        exit(0);
    }
    else {
        header("location:fail.php");
        exit(0);
    }
?>