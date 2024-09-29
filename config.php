<?php

ob_start();
session_start();
$timezone = date_default_timezone_set("Asia/Kolkata");
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "sms";
$port = "3307";
$con = mysqli_connect("localhost","root","1234","sms", 3307);
$base_dir = "C:/xampp/uploads/society-management-system\\";

// ini_set('SMTP', "smtp.gmail.com");
// ini_set('smtp_port', "25");
// ini_set('sendmail_from', "purvi.harniya@gmail.com");

if (mysqli_connect_errno()) {
    echo "Could not connect to the database:" . mysqli_connect_errno();
}
?>