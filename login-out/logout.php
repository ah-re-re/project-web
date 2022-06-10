<?php session_start(); 
 
if (isset($_SESSION['name_login'])){
    unset($_SESSION['name_login']); // xóa session login
}
?>
<a href="../trangchu.php">HOME</a>