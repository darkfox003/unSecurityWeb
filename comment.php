<?php
    $db = require('connect.php');

    $comment = $_POST['comment'];
    $sql = "INSERT INTO review VALUES (NULL, '$comment')";
    $db->query($sql);

    header("location:stored.php");
    exit(0);
?>