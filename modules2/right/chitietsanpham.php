<?php
	include 'admincp/modules/config.php';
	$id_chitiet = $_GET['id'];
	$sql_chitietsp = "SELECT*FROM chitietsp WHERE id_sp='$id_chitiet'";
	$query_chitietsp= mysqli_query($conn,$sql_chitietsp);
	$dong_chitietsp =  mysqli_fetch_array($query_chitietsp);
?>


<table width="400" border="1" style="border-collapse:collapse">
  <tr>
    <td colspan="2"><div align="center">Chi tiet san pham</div></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/
	<?php echo $dong_chitietsp['hinhanh']?>"
    width="200" height="200"> </td>
    <td>Ten SP:<?php echo $dong_chitietsp['tensp']?></td>
  </tr>
  <tr>
    <td style="color:#F00">Gia:<?php echo $dong_chitietsp['gia'].'VND'?></td>
  </tr>
  <tr>
    <td colspan="2"><div  align="center">Mo ta:</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['mota']?></td>
  </tr>
  <a href="webbanhang.php?xem=giohang&add=
  <?php echo $dong_chitietsp['id_sp']?>"><img src="file_click/bynow2.PNG"  height="20" width="70" style="float:right" > </a>
  </table>
