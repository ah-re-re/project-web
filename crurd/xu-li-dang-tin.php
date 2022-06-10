<?php 


include_once "../dbconnect/dbconnect.php";
$gioi_thieu= $_POST['gioi_thieu'];
$gia= $_POST['gia'];
$lien_he= $_POST['lien_he'];
$vi_tri= $_POST['vi_tri'];
$mo_ta= $_POST['mo_ta'];
$anh= $_POST['anh'];
$ban_thue_dat= $_POST['ban_thue_dat'];




$sql = "INSERT INTO nha_dat_ban(gioi_thieu, gia, lien_he, vi_tri, mo_ta, anh, ban_thue_dat) VALUES ('".$gioi_thieu."','".$gia."','".$lien_he."','".$vi_tri."','".$mo_ta."','".$anh."', '".$ban_thue_dat."')";
	mysqli_query($conn, $sql);
	header("Location:dang-tin.php");

 ?>