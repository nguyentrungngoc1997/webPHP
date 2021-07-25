<?php
	include 'admincp/modules/config.php';
	$sql_loaisp = "SELECT*FROM loaisp";
	$query = mysqli_query($conn,$sql_loaisp) or die( mysqli_error($conn));
	
?>
        <p style="text-align:center;color:#F00;background:#00F;padding:10px" >San pham</p>
        <div class="danhsachsanpham">
            <ul>
            	<?php
                	while($dong_sp = mysqli_fetch_array($query))
					{		
				?>
                <li><a href="webbanhang.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'];?>">
                    		<?php echo $dong_sp['tenloaisp'] ?></a></li>
				<?php
					}
				?>
            </ul>
        </div><!-- Ket thuc san pham-->
        
        <!--<p style="text-align:center;color:#F00;background:#00F;padding:10px">Loai san pham</p>
                <div class="danhsachsanpham">
                    <ul>
                        <li><a href="#">Trung quoc</a></li>
                        <li><a href="#">My</a></li>
                        <li><a href="#">Nhat</a></li>
                        <li><a href="#">Chau Au</a></li>
                    </ul>
                </div>-->