<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<link rel="stylesheet" type="text/css" href="first.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/slider.js"></script>


	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
<style type="text/css">
	body, html
	{
	  height: 100%;
	  margin:0;
	  font-family: Arial, Helvetica, sans-serif;

	} 
	
	* {
	  box-sizing: border-box;
	}


	.bg-image {
  /* The image used */
  background-image: url("hinhanh/anhbackround.jpg");
  
  /* Add the blur effect */
  /*filter: blur(8px);*/
  /*-webkit-filter: blur(8px);*/
  
  /* Full height */
  height: 100%; 
  width: 100%;
  margin:auto;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

/* Position text in the middle of the page/image */


/* Search css*/
.container
	  	{
	  		margin-top: 200px;

	  	}	
	  	 .glyphicon-search
	  	 {
	  	 	font-size: 20px;
	  	 }
	  	 .btn-default
	  	 {
	  	 	background:orange;
	  	 	width: 100px;
	  	 	padding: 12.5px;

	  	 }
	  	 .form-control
	  	 {
	  	 	padding: 25px;
	  	 	font-size: 20px;
	  	 }


</style>

</head>
<body>
		

	<div id="menu" method="post" action="register.php" >

	  <ul>
	    <li><a href="index.php">Homepage</a></li>
	    <li><a href="webbanhang.php">Product</a>		
	    </li>
	    
	    <li ><a href="#" >Information</a>
	    	<ul class="sub-menu">
	        	  <li><a href="register.php">Register</a></li>
	        	   <li ><a href="login.php">Login </a></li>
      		</ul>
	    </li>
	    <li><a href="support.php">Support</a></li>


	      <li><a href="#">
	      		<img src="file_click/login.jpg" width="30" height="30">
	      		<ul class="sub-menu">
	      			<li>
						<!-- notification message -->
						<!-- <?php //if (isset($_SESSION['success'])) : ?>
							<div class="error success" >
								<h3>
									<?php 
										//echo $_SESSION['success']; 
										//unset($_SESSION['success']);
									?>
								</h3>
							</div>
						<//?php endif ?> -->

						<!-- logged in user information -->
						<?php  if (isset($_SESSION['username'])) : ?>
							<p><strong> <?php echo $_SESSION['username']; ?></strong></p>
							<p> <a href="index.php?logout='1'" style="color: red;" >Logout</a></p>
						<?php endif ?>
	      			</li>
				</ul>
	      </a></li>
	  </ul>
	</div>




	<div class="bg-image" >
			<!--<img class="slide" stt="0" src="hinhanh/1.jpg">
			<img class="slide" stt="1" src="hinhanh/6.jpg" style="display: none;">
			<img class="slide" stt="2" src="hinhanh/7.jpg" style="display: none;">
			<a href="#" id="back">  <img src="hinhanh/back.jpg">  </a>
			<a href="#" id="next"> <img src="hinhanh/next.jpg">  </a>-->
	</div> 

	<!-- <div id="slider">
			
	 </div>
 -->





	<!-- <div class="header">
		<h2>Home Page</h2>
	</div> -->
	

		


	

	<!-- <div>Information address
		<table>
			<tr >
				<td>
					<p>Email:ngocpasal@gmail.com</p>
					<p>PhoneNumber:033781055</p>
					<p>address:</p>
					<p>Fax:</p>
				</td>
			</tr>
		</table>
	</div>
 -->
		
</body>
</html>