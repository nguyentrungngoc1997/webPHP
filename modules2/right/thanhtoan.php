<?php  
	include 'admincp/modules/config.php';
	//$id = $_GET['id']; 
	//$hoten = $_POST['hoten'];
	//$email = $_POST['email'];
	//$phone = $_POST['phone'];
	//$diachi = $_POST['diachi'];	
	if(isset($_POST['xacnhan']))
	{
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$diachi = $_POST['diachi'];	
		//them	
		$sql_thongtinxacnhan = "INSERT INTO thongtinxacnhan(hoten,email,phone,diachi) 
						VALUES('$hoten','$email','$phone','$diachi')";
		$xacnhan = mysqli_query($conn, $sql_thongtinxacnhan);
		
	}
?>
<p>Vui lòng điền thông tin vào đây</p>
<form  method="post">
<table width="450" border="1">
  <tr>
  
    <td style="width:50px">Họ Tên</td>
    <td><input type="text" name="hoten" style="width:400px;height:25px"></td>
  </tr>
  <tr>
    <td style="width:50px">Email</td>
    <td><input type="text" name="email" style="width:400px;height:25px"></td>
  </tr>
  <tr>
    <td style="width:50px">Số điện thoại</td>
    <td><input type="text" name="phone"  style="width:400px;height:25px"></td>
  </tr>
  <tr>
    <td style="width:50px">Địa chỉ</td>
    <td><input type="text" name="diachi" style="width:400px;height:25px"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="xacnhan" value="Xać nhận"  onclick = "return confirm('Are you sure');">
    								<input type="reset" name="reset" value="Reset"></td>
  </tr>
</table>
</form>