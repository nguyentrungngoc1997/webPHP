<?php 
	include('../config.php');
	$id = $_GET['id']; 
	$tenloaisp = $_POST['tenloaisp'];
	$thutu = $_POST['thutu'];
	if(isset($_POST['them']))
	{
		//them	
		$sql = "INSERT INTO loaisp(tenloaisp,thutu) 
						VALUES('$tenloaisp', '$thutu')";
		mysqli_query($conn,$sql);
		header('location: ../../index1.php?quanly=quanlyloaisp&ac=them');
	}
	elseif (isset($_POST['sua'])) 
	{
		$sql = "UPDATE loaisp SET tenloaisp='$tenloaisp',thutu='$thutu' WHERE id_loaisp='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index1.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}

	else
	{
		//xoa
		$id = $_GET['id'];
		$sql = " DELETE FROM loaisp WHERE id_loaisp = '$id'";
		//$sql = "delete from loaisp where id_loaisp ='$id'";
		mysqli_query($conn,$sql);
		header('location: ../../index1.php?quanly=quanlyloaisp&ac=them');
		
	}
?>
