<?php
	// include('../config.php');

	$sql = "SELECT*FROM loaisp ORDER BY id_loaisp DESC  ";
	$run = mysqli_query($conn,$sql);
?>
<table width="49%" border="1">
	<tr >
		<td width="17%">Id</td>
		<td width="21%">Tên sp</td>
		<td width="20%">Thứ tự</td>
		<td colspan="2">Quản lý</td>
		
	</tr>

	<?php
		$i=0;  
		while ($row = mysqli_fetch_array($run)) {
			
	?>
	<tr>
		<td> <?php echo $i;?> </td>
		<td> <?php echo $row['tenloaisp'];?></td>
		<td> <?php echo $row['thutu'];?> </td>
		<td width="21%"><a href="index1.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $row['id_loaisp'];?> "> Sửa </a> </td>
		<td width="21%"> <a href="modules/quanlyloaisp/xuly.php?id=<?php echo $row['id_loaisp'];?>" onclick = "return confirm('Are you sure');"> Xóa </a></td>
	</tr>
	
	<?php 
			$i++;
		}
	?>
</table>