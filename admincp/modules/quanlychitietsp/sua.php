<?php 
 	include('modules/config.php');
 	$id = $_GET['id']; 
	$sql = "SELECT *FROM chitietsp WHERE id_sp='$id'";
	$run=mysqli_query($conn,$sql);
	$dong= mysqli_fetch_array($run);
?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Sửa chi tiết sp</div></td>
          
	</tr>
	<tr>
		<td width="23%">Tên sp</td>
		<td width="77%"><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
	</tr>
	<tr>
		<td>Giá sp</td>
		<td><input type="text" name="gia" value="<?php echo $dong['gia']?>"></td>
	</tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads<?php echo $dong['hinhanh']?>" width="60" height="60" /></td>
	</tr>
	<tr>
		<td>Mô tả sp</td>
		<td><textarea name="motasp" cols="40" rows="15"><?php $dong['mota']?></textarea></td>
	</tr>

		<?php 
			
			include('modules/config.php');	
			
			$sql_loaisp = "SELECT*FROM loaisp";
			$run_loaisp = mysqli_query($conn,$sql_loaisp);	
		?>
	<tr>
		<td>Loại sp</td>
		<td><select name="loaisp">
		<?php  
			while($dong_loaisp = mysqli_fetch_array($run_loaisp)) {
				if($dong['id_loaisp'] ==$dong_loaisp['id_loaisp'])
				{
					
				?>
					<option selected="selected" value="<?php echo $dong_loaisp['id_loaisp']?>" selected="selected"><?php echo $dong_loaisp['tenloaisp']?> </option>
			<?php  
		}else
		{
		?>
        <option value="<?php echo $dong_loaisp['id_loaisp']?>" selected="selected"><?php echo $dong_loaisp['tenloaisp']?> </option>
        <?php 
		}
		}
		?>
	</select></td>
	</tr>
	<tr>
		<td>Thứ tự</td>
		<td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
	</tr>
	<tr>
		<td height="28" colspan="2"><div align="center">
       <button name="sua" value="sua" onclick = "return confirm('Are you sure');">Sửa</button></div></td>
		
	</tr>
</table>
</form>