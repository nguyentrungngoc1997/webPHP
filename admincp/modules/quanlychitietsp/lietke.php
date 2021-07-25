<?php 
	
	$sql = "SELECT*FROM chitietsp,loaisp WHERE loaisp.id_loaisp = chitietsp.id_sp ORDER BY chitietsp.id_sp DESC";
	$run = mysqli_query($conn,$sql);
?>
<table width="58%" height="260" border="1">
	<tr>
		<td width="6%">ID</td>
		<td width="15%">Tên sp</td>
		<td width="19%">Hình ảnh</td>
		<td width="12%">Giá</td>
		<td width="10%">Lọai sp</td>
		<td width="12%">Thứ tự</td>
		<td colspan="2" >Quản lý</td>
	</tr>
    <?php 
		$i = 0;
		while($row = mysqli_fetch_array($run))
		{	
	?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['tensp'];?></td>
		<td><img src="modules/quanlychitietsp/uploads/<?php echo $row['hinhanh'];?>" width="60" height="60"></td>
		<td><?php echo $row['gia'];?></td>
		<td><?php echo $row['tenloaisp'];?></td>
		<td><?php echo $row['thutu'];?></td>
		<td width="13%"><a href="index1.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $row['id_sp']; ?>">Sửa</a> </td>
		<td width="13%">
      <a href="modules/quanlychitietsp/xuly.php?id=<?php echo $row['id_sp']?>" onclick = "return confirm('Are you sure');">Xóa</a></td>
	</tr>
    <?php 
		$i++;
		}
	?>
</table>