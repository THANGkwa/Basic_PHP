<?php
$host   = "localhost";
$user   = "root";
$pass   = "Admin11";
$dbname = "phpbasicdb";

//เชื่อมฐานข้อมูล
$connect = mysqli_connect($host, $user, $pass, $dbname);

//เข้ารหัส utf8

mysqli_set_charset($connect, 'utf8');

//ตรวจสถานะการเชื่อมต่อ
if ($connect) {
    //echo "Connect database success";
} else {
    echo "Connect database fail!!";
}
