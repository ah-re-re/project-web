<?php
  	
    include_once "../connecting/connecting.php"; 
    $id = $_GET['id'];
    $sql = "DELETE FROM nha_dat_ban WHERE id = $id";
    mysqli_query($conn, $sql);
    
     header("location:../index.php");
	
?>