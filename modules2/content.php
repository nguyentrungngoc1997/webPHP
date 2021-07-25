<div class="content">
	<div class="left">
    	<?php 
			include('modules2/left/danhsach.php');
		?>
    </div>
	<div class="right">
    	<?php 
			if(isset($_GET['xem'])){
				$tam = $_GET['xem'];
			}
			else{
				$tam ='';
			}
			if($tam == 'chitietloaisanpham'){
				include('modules2/right/chitietloaisanpham.php');
			}
			elseif($tam == 'chitietsanpham'){
				include('modules2/right/chitietsanpham.php');
			}
			elseif($tam == 'giohang'){
				include('modules2/right/cart.php');
			}
			elseif(isset($_POST['search']))
			{
				include('modules2/right/search.php');
			}
			elseif($tam == 'thanhtoan'){
				include('modules2/right/thanhtoan.php');
			}
			else{
				include('modules2/right/tatcasanpham.php');
			}
		?>
    </div>	
</div>
 <div class="clear"></div>	