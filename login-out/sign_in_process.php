<?php
    include_once "../dbconnect/dbconnect.php";

    $name_login = $_POST['name_login'];
    $pws = $_POST['pws'];
    $email = $_POST['email'];
    $names = $_POST['names'];

    //sql
    $sql = "INSERT INTO signin ( name_login, pws, email, names) VALUES ('$name_login','$pws','$email','$names')";
    mysqli_query($conn, $sql);
    header("location:../trangchu.php");

    mysqli_close($conn);

?>