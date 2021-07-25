<?php 
	session_start(); 
	/*if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}*/

?>
<div class="menu">
    <ul>
        <li><a href="index.php">Hompage</a></li>
        <li><a href="webbanhang.php?xem=chitietloaisanpham&id=1">Product</a></li>
        <li><a href="support.php">Support</a></li>
        <li><a href="webbanhang.php?xem=giohang"><img src="file_click/cart.png" width="20" height="20"></a></li>
        <li><a href="#">
						<?php  if (isset($_SESSION['username'])) : ?>
							<p> Name:<strong> <?php echo $_SESSION['username']; ?></strong></p>
						<?php endif ?>
	      </a>
         </li>
         <p> <a href="index.php?logout='1'" style="float:right;margin-top:5px ">Logout</a></p>
        
         <form action="webbanhang.php" method="post" enctype="multipart/form-data">	
             <div class="searchform" style="float:right;margin-top:5px" >
            
                <input type="text" id="searchf" name="searchtext" size="30" />
                <input type="submit" id="searchbtn" name="search" value="Search" placeholder="Search..."/>
             
            </div>
   		</form>
   </ul>
    
    
</div>	