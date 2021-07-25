<?php
	include 'admincp/modules/config.php';
	$sql_all = "SELECT*FROM chitietsp";
	$query_all = mysqli_query($conn,$sql_all);
?>
<p style="text-align:center;color:#F00;background:#00F"> Tat ca san pham</p>
	<div class="sanphammall">
       <ul>
          <?php 
		  	while($dong_all = mysqli_fetch_array($query_all) ){
		  ?>
          <li><a href="webbanhang.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sp']?>">
              <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100" height="100">
            	<p style="color:#F00;">Ten sp:<?php echo $dong_all['tensp']?></p>
            	<p style="color:#F00;">Gia sp:<?php echo $dong_all['gia']?></p>
            	<p style="color:#F00;">Chi tiet</p>
            </a>
            </li>
           	
            <?php		
			}
			?>  
        </ul>
	</div>
    