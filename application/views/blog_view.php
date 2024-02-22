<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<!-- load bootstrap css file -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1>Welocome To My Blog.</h1>
				<h2 class="display-4"><?php echo $content;?></h2>
				<p class="lead">This is my first blog.</p>
			</div>
		</div>
	</div>
	
	<!--load jquery js file -->
	<script src="<?php echo base_url('assets/js/jquery-3.6.3.min.js');?>"></script>
	<!--load bootstrap js file -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	</body>
</html>