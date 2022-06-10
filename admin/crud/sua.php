<?php 

	include_once "../connecting/connecting.php"; 
	$id=$_GET['id'];
 	$gioi_thieu= $_POST['gioi_thieu'];
	$gia= $_POST['gia'];
	$lien_he= $_POST['lien_he'];
	$vi_tri= $_POST['vi_tri'];
	$mo_ta= $_POST['mo_ta'];
	$anh= $_POST['anh'];
	$ban_thue_dat= $_POST['ban_thue_dat'];


 	$sql = "UPDATE `nha_dat_ban` SET `gioi_thieu`='$gioi_thieu',`gia`='$gia',`lien_he`='$lien_he',`vi_tri`='$vi_tri',`mo_ta`='$mo_ta',`anh`='$anh',`ban_thue_dat`='$ban_thue_dat' WHERE `id`=$id";
 	mysqli_query($conn, $sql);
 	header("location:../index.php");
?>