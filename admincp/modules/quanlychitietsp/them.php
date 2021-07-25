<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data" >
    <table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Thêm chi tiết sp</div></td>
		
	</tr>
	<tr>
		<td width="14%">Tên sp</td>
		<td width="86%"><input type="text" name="tensp"></td>
	</tr>
	<tr>
		<td>Giá sp</td>
		<td><input type="text" name="gia"></td>
	</tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh"></td>
	</tr>
	<tr>
		<td>Mô tả sp</td>
		<td><textarea name="motasp" cols="40" rows="15"></textarea></td>
	</tr>

		<?php 
			
			include('modules/config.php');	
			
			$sql = "SELECT*FROM loaisp";
			$run = mysqli_query($conn,$sql);	
		?>
	<tr>
		<td>Lọai sp</td>
		<td><select name="loaisp">
		<?php  
			while($dong = mysqli_fetch_array($run)) {
				?>
					<option value="<?php echo $dong['id_loaisp']?>" selected="selected"><?php echo $dong['tenloaisp']?> </option>
			<?php  
		}
		?>
	</select></td>
	</tr>
	<tr>
		<td>Thứ tự</td>
		<td><input type="text" name="thutu"></td>
	</tr>
	<tr>
		<td height="28" colspan="2"><div align="center">
       <button name="them" value="them" onclick = "return confirm('Are you sure');">Thêm</button></div></td>
		
	</tr>
</table>
</form>