<style>
.left
{
	width: 30%;
	height: auto;
	border: 1px solid #000;
	float: left;
	margin-left: 10px;

.right
{
	width: 50%;
	height: auto;
	border: 1px solid #000;
	float: right;
}

</style>

<div class="left" >
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
			include('modules/quanlyloaisp/them.php');
		}
		if($tam == 'sua')
		{
			include('modules/quanlyloaisp/sua.php');
		}
	?>
</div>

<div class="right">
	<?php 
		include('modules/quanlyloaisp/lietke.php');
	?>
</div>
