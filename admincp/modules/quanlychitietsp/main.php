<style>
.left
{
	width: 40%;
	height: auto;
	border: 1px solid #000;
	float: left;
	margin-left: 10px;

.right
{
	width: 60%;
	height: auto;
	border: 1px solid #000;
	float: right;
}

</style>
<div class="left">
	<?php
		if(isset($_GET['ac']))
		{
			$tam = $_GET['ac'];
		}
		else
		{
			$tam = '';
		}
		if($tam == 'them')
		{
			include('modules/quanlychitietsp/them.php');
		}
		if($tam == 'sua')
		{
			include('modules/quanlychitietsp/sua.php');
		}
	?>
</div>
<div class="right">
	<?php 
		include('modules/quanlychitietsp/lietke.php');
	?>
</div>
