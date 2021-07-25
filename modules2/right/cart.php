<h1>Cart</h1>
<?php 
	include 'admincp/modules/config.php';
	//session_start();
	//session_destroy();
	// them san pham moi
	if(isset($_GET['add']) && !empty($_GET['add']))
	{
		 $id = $_GET['add'];
		 @$_SESSION['cart_'.$id]+=1;
		 header('location:webbanhang.php?xem=giohang');
	}
	//cong san pham
	if(isset($_GET['them']))
	{
		$_SESSION['cart_'.$_GET['them']]+=1;
		header('location:webbanhang.php?xem=giohang');	
	}
	//tru san pham
	if(isset($_GET['tru']))
	{
		$_SESSION['cart_'.$_GET['tru']]--;
		header('location:webbanhang.php?xem=giohang');	
	}
	//xoa san pham
	if(isset($_GET['xoa']))
	{
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header('location:webbanhang.php?xem=giohang');	
	}
	
	// hien thi san pham da them
	$thanhtien = 0;
	foreach($_SESSION as $name => $value)
	{
		//echo $name. ' ' .$value.'</br>'; 
		if($value > 0)
		{
			if(substr($name,0,5)=='cart_')
			{
				$id = substr($name,5,strlen($name)-5); 	
				$sql = "SELECT*FROM chitietsp WHERE id_sp='".$id."' ";
				$query = mysqli_query($conn,$sql);
				
				while($dong = mysqli_fetch_array($query))
				{
					$tongtien = $dong['gia']*$value;
					echo  $dong['tensp'].':So luong:'.$value.':Gia:'.$dong['gia'].'='.
					$tongtien.'VND'.'<br/> 
									 <a href="webbanhang.php?xem=giohang&them='.$id.'"><img src="file_click/add.png" height="40" width="40"></a>
									 <a href="webbanhang.php?xem=giohang&tru='.$id.'"><img src="file_click/minus.png" height="40" width="40"></a> 
									 <a href="webbanhang.php?xem=giohang&xoa='.$id.'"><img src="file_click/delete.jpg" height="40" width="40"></a>
								<br/><br/><br/>'; 
				}
			}
			$thanhtien += $tongtien;	
		}	
	}
	if($thanhtien == 0)
				{
					echo "Gio hang trong";	
				}else
				{
					echo "Tong tien:".$thanhtien.'VND';	
				}
	
?>
<p style="float:right"><a href="webbanhang.php?xem=thanhtoan" onclick = "return confirm('Are you sure');"><img src="file_click/pay.png" width="50" height="50"></a></p>


	
