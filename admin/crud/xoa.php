<?php
  	
    include_once "../connecting/connecting.php"; 
    $id = $_GET['id'];
    $sql = "DELETE FROM signin WHERE id = $id";
    mysqli_query($conn, $sql);
    
    // header("location:F:laragon/www/backend/admin/index.php");
	
?>