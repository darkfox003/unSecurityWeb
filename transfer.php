<?php

    session_start();
    $auth = $_COOKIE['auth'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = $_POST['amount'];

        makeTransfer($auth, $amount);
        header("location:bank.php");
        exit(0);
    }

    function makeTransfer($auth, $amount) {

        $db = require('connect.php');

        $stmt = $db->prepare("UPDATE bank SET balance = balance - ? WHERE auth = ?");
        $stmt->bind_param("is", $amount, $auth);
        $stmt->execute();
    }

?>