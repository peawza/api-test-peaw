<?php
$con = mysqli_connect("localhost", "root", "1234", "peawkub");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}//else echo "connected success";