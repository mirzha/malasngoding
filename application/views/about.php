<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome To My Blog</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		</div>
			
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Blog MalasNgoding</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo site_url()?>/home">Home</a></li>
							<li class="active"><a href="<?php echo site_url()?>/about">About</a></li>
							<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
						</ul>
					
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
				<table class="table table-striped table-hover">
					<tbody>
						<tr>
							<td>Nama</td>
							<td><?php echo $nama ?></td>
						</tr>
						<tr>
							<td>NIM</td>
							<td><?php echo $nim ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?php echo $alamat ?></td>
						</tr>
						<tr>
							<td>No Telephon</td>
							<td><?php echo $no_telp ?></td>
						</tr>
						<tr>
							<td>Hobby</td>
							<td><?php echo $hobby ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>