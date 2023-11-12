<?php
    // kết nối sql
    $mysqli = new mysqli("localhost","root","","web_bansua");

    // Check connection
    if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi Lỗi: " . $mysqli->connect_error;
    exit();
}
?>