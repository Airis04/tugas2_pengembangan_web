<?php
ob_start();
session_start();
ob_end_clean();
$username = $_POST["email"];
$password = $_POST["password"];
if ($username == "admin@admin.com" and $password == "123") {
    $_SESSION["nama"] = "admin";
    $_SESSION["email"] = $username;


    header("location:loginsukses.php");
} else {
    header("location:login.php?login_gagal");
}
