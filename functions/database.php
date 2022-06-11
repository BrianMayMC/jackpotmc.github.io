<?php
    $hostname = "localhost";
    $username = "id18726258_root";
    $password = "xTF5}4chFaNTot(B";
    $databaseName = "id18726258_jackpotdb";
    $conn = new mysqli($hostname, $username, $password, $databaseName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>