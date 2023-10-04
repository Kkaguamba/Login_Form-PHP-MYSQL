<?php

$sname ="localhost";
$uname = "root";
$password = "";
$dbname = "login_testdb";

$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn){
    echo "Connection failed!";
}