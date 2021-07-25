
<?php 
	include 'admincp/modules/config.php';
	if(isset($_POST['search']))
	{
		$search = $_POST['searchtext'];
		$sql_search = "SELECT*FROM chitietsp WHERE tensp LIKE '%$search%' ";
		$query_search = mysqli_query($conn,$sql_search);
	}
?>
<p style="text-align:center;color:#F00;background:#00F">San pham tim thay</p>
	<div class="sanphammall">
     	<?php 
		  	if($count = mysqli_num_rows($query_search)==0)
			{
				?>
                <p>Khong tim thay san pham</p>
				<?php
			}else{
			?>
        <ul>
          <?php 
		  	while($dong_search = mysqli_fetch_array($query_search) ){
		  ?>
          <li><a href="webbanhang.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp']?>">
              <img src = "admincp/modules/quanlychitietsp/uploads/<?php echo$dong_search['hinhanh']?>" width="100" height="100"/>
            	<p style="color:#F00;">Ten sp:<?php echo $dong_search['tensp']?></p>
            	<p style="color:#F00;">Gia sp:<?php echo $dong_search['gia']?></p>
            	<p style="color:#F00;">Chi tiet</p>
            </a>
            </li>
            <?php		
				}
			}
			?>  
        </ul>
	</div>