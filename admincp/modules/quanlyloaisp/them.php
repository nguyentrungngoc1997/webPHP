
<form  action="modules/quanlyloaisp/xuly.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2">Thêm loại sản phẩm</td>
			
		</tr>
		<tr>
			<td width="60%" align="left">Tên loại sp</td>
			<td width="60%" align="center"><input type="text" name="tenloaisp"></td>
		</tr>
		<tr>
			<td width="60%" align="left">Thứ tự</td>
			<td width="60%" align="center"><input type="text" name="thutu"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="them" id="them" value="Thêm"  onclick = "return confirm('Are you sure');">
			</td>
			
		</tr>
	</table>
</form>