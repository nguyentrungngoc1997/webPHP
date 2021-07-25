<?php 
	include 'admincp/modules/config.php';	
	$id_chitiet = $_GET['id'];
	$sql_chitiet = "SELECT*FROM chitietsp WHERE id_loaisp = '$id_chitiet'";
	$query = mysqli_query($conn,$sql_chitiet);
?>
<?php 
	include 'admincp/modules/config.php';	
	$id_loaisp = $_GET['id'];
	$sql_loaisp = "SELECT*FROM loaisp WHERE id_loaisp = '$id_loaisp'";
	$query_loaisp = mysqli_query($conn,$sql_loaisp);
	$dong_loaisp = mysqli_fetch_array($query_loaisp);
?>
<p style="text-align:center;color:#F00;background:#00F"><?php echo $dong_loaisp['tenloaisp']?></p>
	<div class="sanphammall">
        <ul>
          <?php 
		  	while($dong_chitiet = mysqli_fetch_array($query) ){
		  ?>
          <li><a href="webbanhang.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp']?>">
              <img src = "admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" width="100" height="100"/>
            	<p style="color:#F00;">Ten sp:<?php echo $dong_chitiet['tensp']?></p>
            	<p style="color:#F00;">Gia sp:<?php echo $dong_chitiet['gia']?></p>
            	<p style="color:#F00;">Chi tiet</p>
            </a>
            </li>
            <?php		
			}
			?>  
        </ul>
	</div>