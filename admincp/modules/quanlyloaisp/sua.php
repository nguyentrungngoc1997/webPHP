<?php 
	include('modules/config.php');
 	$id = $_GET['id']; 
	$sql = " SELECT * FROM loaisp WHERE id_loaisp = '$id'";
	//$sql ="select * from loaisp whre id_loaisp=$_GET[id]";
	$run = mysqli_query($conn,$sql);	
	$row =  mysqli_fetch_array($run);


?> 
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_loaisp'];?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2">Sửa lọai sản phẩm</td>
			
		</tr>
		<tr>
			<td>Tên lọai sp</td>
			<td width="60%"><input type="text" name="tenloaisp" value="<?php echo $row['tenloaisp'];?>"></td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td width="60%"><input type="text" name="thutu" value="<?php echo $row['thutu'];?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" >
				<input type="submit" name="sua" id="sua" value="Sửa" onclick = "return confirm('Are you sure');">
			</td>
			
		</tr>
	</table>
</form>