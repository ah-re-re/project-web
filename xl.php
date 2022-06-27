<?php

session_start();
include_once "dbconnect/dbconnect.php";
    
if (isset($_SESSION['login'])) {

    header("location:crurd/dangtin.php");
}
else {
    // echo "Please log in first to see this page.";
    header("location:login-out/dangnhap.php");
}

?>