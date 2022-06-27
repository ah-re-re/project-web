<?php session_start(); 
 
if (isset($_SESSION['login'])){
    session_destroy();
    unset($_SESSION['login']); // xóa session login
}
 header("location:../trangchu.php");
?>
<!-- <a href="../trangchu.php">HOME</a> -->