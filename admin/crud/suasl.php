<?php 
	include_once "../connecting/connecting.php"; 

	$id=$_GET['id'];
	

	$sql = "SELECT * FROM nha_dat_ban WHERE 1";
	$values = mysqli_query($conn, $sql);
	foreach ($values as $v) {
		if ($id == $v["id"]) {
			$gioi_thieu = $v["gioi_thieu"];
			$gia = $v["gia"];
			$lien_he = $v["lien_he"];
			$vi_tri = $v["vi_tri"];
			$mo_ta = $v["mo_ta"];
			$anh = $v["anh"];

		}
	}
?>

	<!-- <p> dang tin bat dong san</p>
<table>
	<form method="POST" action="sua.php?id=<?php echo $_GET['id'] ?>">
		<tr>
			<td>gioi thieu</td>
			<td><textarea rows="5" name="gioi_thieu">
				<?php echo $gioi_thieu ?>
			</textarea></td>
		</tr>
		<tr>
			<td>gia</td>
			<td><input type="number" name="gia" value="<?php echo $gia ?>" > </td>
		</tr>
		<tr>
			<td>lien he</td>
			<td><input type="number" name="lien_he" value="<?php echo $lien_he ?>"></td>
		</tr>
		<tr>
			<td>vi tri</td>
			<td><input type="text" name="vi_tri" value="<?php echo $vi_tri ?>"></td>
		</tr>
		<tr>
			<td>mo ta</td>
			<td><textarea rows="5" name="mo_ta">
				<?php echo $mo_ta ?>
			</textarea></td>
		</tr>
		<tr>
			<td>anh</td>
			<td><input type="file" name="anh" value="<?php echo $anh ?>"></td>
		</tr>
		<tr>
			<td>chon san pham</td>
			<td>
				<select name="ban_thue_dat" >
					<option>thue</option>
					<option>ban</option>
					<option>dat trong</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="suatin" value="sửa tin bất động sản"></td>
		</tr>


	</form>
</table> -->

<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>
<body>
    <div id="wrapper">
        <form method="POST" action="sua.php?id=<?php echo $_GET['id'] ?>">
            <fieldset>
                <legend>sửa</legend>
                <div>
                    <textarea rows="5" name="gioi_thieu">
				<?php echo $gioi_thieu ?>
			</textarea>
                </div>
                <div>
                    <input type="number" name="gia" value="<?php echo $gia ?>" >
                </div>
                <div>
                    <input type="number" name="lien_he" value="<?php echo $lien_he ?>">
                </div>
                <div>
                    <input type="text" name="vi_tri" value="<?php echo $vi_tri ?>">
                </div>
                
                
                <div>
                    <div class="small">this textarea is just for test so you can see the placeholder working on textarea as well</div>
                    <textarea rows="5" name="mo_ta">
				<?php echo $mo_ta ?>
			</textarea>
                </div>    
                <div>
                    <input type="file" name="anh" value="<?php echo $anh ?>">
                </div>
                <div>
                <select name="ban_thue_dat">
                  <option>thue</option>
                  <option>ban</option>
                  <option>dat trong</option>
               </select>
               </div>
                <input type="submit" name="dangtin" value="Đăng tin">
                
            </fieldset>    
        </form>
    </div>
</body>
</html>