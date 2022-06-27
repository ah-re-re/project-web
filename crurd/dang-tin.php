
	<p> Đăng tin bất động sản</p>
<table>
	<form method="POST" action="xu-li-dang-tin.php">
		<tr>
			<td>Giới thiệu</td>
			<td><textarea rows="5" name="gioi_thieu"></textarea></td>
		</tr>
		<tr>
			<td>giá</td>
			<td><input type="number" name="gia"></td>
		</tr>
		<tr>
			<td>Liên hệ</td>
			<td><input type="number" name="lien_he"></td>
		</tr>
		<tr>
			<td>Vị trí</td>
			<td><input type="text" name="vi_tri"></td>
		</tr>
		<tr>
			<td>Mô tả</td>
			<td><textarea rows="5" name="mo_ta"></textarea></td>
		</tr>
		<tr>
			<td>Ảnh</td>
			<td><input type="file" name="anh"></td>
		</tr>
		<tr>
			<td>Chọn loại hình</td>
			<td>
				<select name="ban_thue_dat">
					<option>thue</option>
					<option>ban</option>
					<option>dat trong</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="dangtin" value="Đăng tin"></td>
			<td><a href="../trangchu.php">Quay về trang chủ</a></td>
		</tr>


	</form>
</table>
