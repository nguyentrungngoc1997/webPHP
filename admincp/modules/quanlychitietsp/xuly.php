<?php 
	include('../config.php');
	$id = $_GET['id']; 
	$tensp = $_POST['tensp'];
	$mota = $_POST['motasp'];
	$gia = $_POST['gia'];
	$loaisp = $_POST['loaisp'];
	$thutu = $_POST['thutu'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	if(isset($_POST['them']))
	{
		//them	
		$sql = "INSERT INTO chitietsp(tensp,thutu,mota,gia,id_loaisp,hinhanh) 
						VALUES('$tensp', '$thutu','$mota','$gia','$loaisp','$hinhanh')";
		mysqli_query($conn,$sql);
		header('location: ../../index1.php?quanly=quanlychitietsp&ac=them');
	}
	elseif (isset($_POST['sua'])) 
	{
		if($hinhanh!='')
		{
		$sql = "UPDATE chitietsp SET tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' WHERE id_sp='$id'";
		}
		else
		{
			$sql = "UPDATE chitietsp SET tensp='$tensp',thutu='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp' WHERE id_sp='$id'";
		}
		mysqli_query($conn,$sql);
		header('location:../../index1.php?quanly=quanlychitietsp&ac=sua&id='.$id);
		
	}

	else
	{
		//xoa
		$id = $_GET['id'];
		$sql = " DELETE FROM chitietsp WHERE id_sp = '$id'";
		//$sql = "delete from loaisp where id_loaisp ='$id'";
		mysqli_query($conn,$sql);
		header('location: ../../index1.php?quanly=quanlychitietsp&ac=them');
		
	}
?>
